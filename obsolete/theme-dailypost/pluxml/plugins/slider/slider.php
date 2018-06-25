<?php
/*
Slideshow pour PluXml basé sur s3slider
Par MILLET Maxime
site : http://www.milletmaxime.net
*/
class slider extends plxPlugin
{
	/*
	 * constructeur du slider
	 * @author MILLET Maxime
	 * @param string $default_lang
	 *
	*/
	public function __construct($default_lang)
	{
		// constructeur
		parent::__construct($default_lang);
		// gestion des droits
		$this->setConfigProfil(PROFIL_ADMIN, PROFIL_MANAGER);
		$this->setAdminProfil(PROFIL_ADMIN, PROFIL_MANAGER, PROFIL_MODERATOR, PROFIL_EDITOR, PROFIL_WRITER);
		// les hooks
		$this->addHook('ThemeEndHead', 'sliderHeaders');
		$this->addHook('ThemeEndBody', 'sliderFooters');
		$this->addHook('slideHTML', 'sliderHTML');
	}
	
	/*
	 * Recherche des images
	 * @author MILLET Maxime
	 * @return array $pictures
	 *
	*/
	public function getPictures()
	{
		$pictures=array();
		$i=0;
		$slide = simplexml_load_file(PLX_PLUGINS.'slider/pictures.xml','SimpleXMLElement', LIBXML_NOCDATA);
		foreach ($slide->picture as $picture)
		{
			$pictures[$i]=array( 'name' => plxUtils::getValue($picture->name),'uri' => plxUtils::getValue($picture->uri),'span' => plxUtils::getValue($picture->span),'geo'  => plxUtils::getValue($picture->geo));
			$i++;
		}
		return $pictures;
	}
	
	/*
	 * Constructeur du fichier xml contenant les paramètres des images
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	private function newXML($pictures)
	{
								  $xml = "<?xml version='1.0' encoding='UTF-8'?>\n<slide>\n\n";
		for($i=0;$i!=count($pictures);$i++)
		{
								  $xml .= "\t<picture>\n";
								  $xml .= "\t\t<name><![CDATA[".$pictures[$i]['name']."]]></name>\n";
if(isset($pictures[$i]['span']))  $xml .= "\t\t<span><![CDATA[".$pictures[$i]['span']."]]></span>\n";
								  $xml .= "\t\t<uri><![CDATA[".$pictures[$i]['uri']."]]></uri>\n";
								  $xml .= "\t\t<geo>".$pictures[$i]['geo']."</geo>\n";
								  $xml .= "\t</picture>\n\n";
		}
								  $xml .= "</slide>";
		plxUtils::write($xml, PLX_PLUGINS.'slider/pictures.xml');
		header("Location: plugin.php?p=slider");
	}
	
	/*
	 * Placement du fichier css dans l'entête de la page
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	public function sliderHeaders()
	{
		$width = $this->getParam('width');
		$height = $this->getParam('height');
		$bcolor = $this->getParam('bcolor');
		$tcolor = $this->getParam('tcolor');
		$lcolor = $this->getParam('lcolor');
		$GETcss=str_replace("#","%23","h=$height&amp;w=$width&amp;bc=$bcolor&amp;tc=$tcolor&amp;lc=$lcolor");
		echo "<link rel=\"stylesheet\" href=\"".PLX_PLUGINS."slider/s3slider.css.php?$GETcss\" type=\"text/css\" />\n";
	}
	
	/*
	 * Placement des fichiers javascript dans le pied de page
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	public function sliderFooters()
	{
		$time = $this->getParam('time');
		if($this->getParam('JSfile') == 1) {
			echo "<script type=\"text/javascript\" src=\"".PLX_PLUGINS."slider/s3slider.js\"></script>\n";
		}else {
			echo "<script type=\"text/javascript\">";
			include(PLX_PLUGINS."slider/s3slider.js");
			echo "</script>\n";
		}
		echo "<script type=\"text/javascript\">\$(document).ready(function() {\$('#slider').s3Slider({ timeOut: $time });});</script>\n";
	}
	
	/*
	 * Constrution du slider (code html)
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	public function sliderHTML()
	{
		$plxMotor = plxMotor::getInstance();
		$getPics=$this->getPictures();
		if(count($getPics) > 0)
		{
			echo "\n\n\t<div id=\"slider\">\n\t\t<ul id=\"sliderContent\">\n";
			for($i=0;$i!=count($getPics);$i++)
			{
				echo "\t\t\t<li class=\"sliderImage\">\n";
				echo "\t\t\t\t<a href=\"".$plxMotor->urlRewrite()."\">\n";
				echo "\t\t\t\t<img src=\"".$getPics[$i]['uri']."\" alt=\"".$getPics[$i]['name']."\" width=\"".$this->getParam('width')."\" height=\"".$this->getParam('height')."\" />\n"; 
				echo "\t\t\t\t</a>\n";
					if($getPics[$i]['geo'] != 'null') {
						echo "\t\t\t\t<span class=\"".$getPics[$i]['geo']."\"><strong>".$getPics[$i]['name']."</strong><br />".$getPics[$i]['span']."</span>\n";
					}else {
						echo "\t\t\t\t<span></span>\n";
					}
				echo "\t\t\t</li>\n";
			}
			echo "\n\t\t</ul>\n\t</div>";
		}
	}
	
		
	/*
	 * Suppression d'une image du fichier xml
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	public function delPic($id)
	{
		$getPics=$this->getPictures();
		unset($getPics[$id]);
		$this->newXML(array_values($getPics));
	}
	
	/*
	 * Modification des paramètres d'une image dans le fichier xml
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	public function editPic($id,$name,$uri,$geo,$span=NULL)
	{
		$plxMotor = plxMotor::getInstance();
		$getPics=$this->getPictures();
		$getPics[$id]['name'] = $name;
		if (strpos($span,'onclick') === false) {
			$getPics[$id]['span'] = preg_replace('!href="(.*)"!', 'href="$1" onclick="window.open(this.href);return false;"', $span);
		}else {
			$getPics[$id]['span'] = $span;
		}
		if (substr($uri,0,4) == 'data') {
			$uri = $plxMotor->urlRewrite($uri);
		}
		$getPics[$id]['uri'] = $uri;
		$getPics[$id]['geo'] = $geo;
		$this->newXML($getPics);
	}
	
	/*
	 * Ajout des paramètres d'une image dans le fichier xml
	 * @author MILLET Maxime
	 * @return void
	 *
	*/
	public function newPic($name,$uri,$geo,$span=NULL)
	{
		$plxMotor = plxMotor::getInstance();
		$getPics=$this->getPictures();
		$id = count($getPics);
		$getPics[$id]['name'] = $name;
		$getPics[$id]['span'] = preg_replace('!href="(.*)"!', 'href="$1" onclick="window.open(this.href);return false;"', $span);
		if (substr($uri,0,4) == 'data') {
			$uri = $plxMotor->urlRewrite($uri);
		}
		$getPics[$id]['uri'] = $uri;
		$getPics[$id]['geo'] = $geo;
		$this->newXML($getPics);
	}
}
?>