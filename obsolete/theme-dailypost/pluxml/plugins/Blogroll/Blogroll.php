<?php
/**
 * Plugin blogroll
 *
 * @package	PLX
 * @version	0.3
 * @date	22/04/2012
 * @author	Rockyhorror
 **/
 

class Blogroll extends plxPlugin {

	public $blogList = array(); # Tableau des blogs
	
	/**
	 * Constructeur de la classe blogroll
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Rockyhorror
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Autorisation d'acces à la configuration du plugin
		$this-> setConfigProfil(PROFIL_ADMIN, PROFIL_MANAGER);

		# Autorisation d'accès à l'administration du plugin
		$this->setAdminProfil(PROFIL_ADMIN, PROFIL_MANAGER);

		# Déclarations des hooks
		$this->addHook('showBlogHead', 'showBlogHead');
		$this->addHook('showBlogroll','showBlogroll');
	}

	public function getBlogroll($filename) {
		
		if(!is_file($filename)) return;
		
		# Mise en place du parseur XML
		$data = implode('',file($filename));
		$parser = xml_parser_create(PLX_CHARSET);
		xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
		xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,0);
		xml_parse_into_struct($parser,$data,$values,$iTags);
		xml_parser_free($parser);
		if(isset($iTags['blogroll']) AND isset($iTags['title'])) {
			$nb = sizeof($iTags['title']);
			$size=ceil(sizeof($iTags['blogroll'])/$nb);
			for($i=0;$i<$nb;$i++) {
				$attributes = $values[$iTags['blogroll'][$i*$size]]['attributes'];
				$number = $attributes['number'];
				# Recuperation du titre
				$this->blogList[$number]['title']=plxUtils::getValue($values[$iTags['title'][$i]]['value']);
				# Recuperation du nom de la description
				$this->blogList[$number]['description']=plxUtils::getValue($values[$iTags['description'][$i]]['value']);
				# Recuperation de l'url
				$this->blogList[$number]['url']=plxUtils::getValue($values[$iTags['url'][$i]]['value']);
				# Recuperation de la langue
				$this->blogList[$number]['langue']=plxUtils::getValue($values[$iTags['langue'][$i]]['value']);
				
			}
		}
		
	}
	
	/**
	 * Méthode qui édite le fichier XML du blogroll selon le tableau $content
	 *
	 * @param	content	tableau multidimensionnel du blogroll
	 * @param	action	permet de forcer la mise à jour du fichier
	 * @return	string
	 * @author	Stephane F
	 **/
	public function editBloglist($content, $action=false) {

		$save = $this->blogList;
		
		# suppression
		if(!empty($content['selection']) AND $content['selection']=='delete' AND isset($content['idBlogroll'])) {
			foreach($content['idBlogroll'] as $blogroll_id) {
				unset($this->blogList[$blogroll_id]);
				$action = true;
			}
		}
		
		# mise à jour de la liste des catégories
		elseif(!empty($content['update'])) {
			foreach($content['blogNum'] as $blog_id) {
				$blog_name = $content[$blog_id.'_title'];
				if($blog_name!='') {
					$this->blogList[$blog_id]['title'] = $blog_name;
					$this->blogList[$blog_id]['url'] = $content[$blog_id.'_url'];
					$this->blogList[$blog_id]['description'] = $content[$blog_id.'_description'];
					$this->blogList[$blog_id]['langue'] = $content[$blog_id.'_langue'];
					$this->blogList[$blog_id]['ordre'] = intval($content[$blog_id.'_ordre']);
					$action = true;
				}
			}

		}
		# On va trier les clés selon l'ordre choisi
		if(sizeof($this->blogList)>0) uasort($this->blogList, create_function('$a, $b', 'return $a["ordre"]>$b["ordre"];'));
		
		# sauvegarde
		if($action) {
			# On génére le fichier XML
			$xml = "<?xml version=\"1.0\" encoding=\"".PLX_CHARSET."\"?>\n";
			$xml .= "<document>\n";
			foreach($this->blogList as $blog_id => $blog) {

				$xml .= "\t<blogroll number=\"".$blog_id."\">";
				$xml .= "<title><![CDATA[".plxUtils::cdataCheck($blog['title'])."]]></title>";
				$xml .= "<description><![CDATA[".plxUtils::cdataCheck($blog['description'])."]]></description>";
				$xml .= "<url><![CDATA[".plxUtils::cdataCheck($blog['url'])."]]></url>";
				$xml .= "<langue><![CDATA[".plxUtils::cdataCheck($blog['langue'])."]]></langue>";
				$xml .= "</blogroll>\n";
			}
			$xml .= "</document>";
			
			# On écrit le fichier
			if(plxUtils::write($xml, PLX_ROOT.$this->getParam('blogroll')))
				return plxMsg::Info(L_SAVE_SUCCESSFUL);
			else {
				$this->blogList = $save;
				return plxMsg::Error(L_SAVE_ERR.' '.$filename);
			}			
		}
	}

	public function showBlogHead () {
		$title = plxUtils::strCheck($this->getParam('pub_title'));
		echo $title;
	}

	public function showBlogroll($format) {		
		
		$this->getBlogroll(PLX_ROOT.$this->getParam('blogroll'));
		if(!$this->blogList) { return; }
		
		if(!isset($format)) { $format = '<li><a href="#url" hreflang="#langue" title="#description">#title</a></li>'; }
		foreach($this->blogList as $link) {
			$row = str_replace('"#url"','"#url" onclick="window.open(this.href);return false;"',$format);
			$row = str_replace('#url',$link['url'],$row);
			$row = str_replace('#description',plxUtils::strCheck($link['description']),$row);
			$row = str_replace('#title',plxUtils::strCheck($link['title']),$row);
			$row = str_replace('#langue',plxUtils::strCheck($link['langue']),$row);
			echo $row;
		}
		
	}
}
	
?>
