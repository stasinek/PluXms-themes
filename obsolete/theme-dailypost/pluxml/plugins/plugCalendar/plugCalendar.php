<?php
/**
 * Plugin calendar
 *
 * @package	PLX
 * @version	0.1
 * @date	03/05/2012
 * @author	Cyril MAGUIRE
 **/

class plugCalendar extends plxPlugin {

	
	private $aArts = array(); # tableau des articles
	private $plxMotor = null; # instance de l'objet plxMotor
	
	/**
	 * Constructeur de la classe plugCalendar
	 *
	 * @param	default_lang	langue par defaut utilisee par PluXml
	 * @return	null
	 *
	 **/
	public function __construct($default_lang) {
		
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Autorisation d'acces a la configuration du plugin
		//$this-> setConfigProfil(PROFIL_ADMIN, PROFIL_MANAGER);

		# Autorisation d'acces a l'administration du plugin
		//$this->setAdminProfil(PROFIL_ADMIN, PROFIL_MANAGER);

		# Declarations des hooks
		$this->addHook('CalInSidebar', 'CalInSidebar');
		
		
	}

	/**
	 * Méthode pour ne remplacer que la première occurence d'un caractère
	 * @param $s string le caractère à remplacer
	 * @param $r string le caractère de remplacement
	 * @param $str string la chaine dans laquelle chercher
	 * 
	 * @author jetweedy at hotmail dot com
	 */
	/*public function str_replaceFirst($s,$r,$str){
		$l = strlen($str);
		$a = strpos($str,$s);
		$b = $a + strlen($s);
		return substr($str, 0, $a).$r.substr($str,$b,($l-$b));
	}*/
	
	/**
	 * Methode qui affiche le calendrier dans la sidebar
	 * @return string
	 * 
	 * @author	Cyril MAGUIRE
	 **/
	public function CalInSidebar() {
		
		include 'class.calendar.php';
		$cal = new Calendar();
		$y = date('Y');
		$m = date('m');
		$links = array();
		if (strpos($_SERVER['QUERY_STRING'],'archives/') !== false) {
			$page = explode('/',str_replace('archives/','',$_SERVER['QUERY_STRING']));
			$y = $page[0];
			if (isset($page[1])){
				$m = $page[1];
			}else {
				$y = date('Y');
				$m = date('m');
			}
		} else {
			$page = '';
		}
		
		echo $cal->display($y,$m,1,$this->getArticles(),' id="wp-calendar"',$this->makeFooter($y,$m,$links)); 
		
		//echo '<div id="selectMonth">'.$footer.'</div>';

	}

	/**
	 * Méthode qui créer les liens vers les mois contenant des articles dans le pied du tableau
	 * 
	 * @param $y integer l'année à afficher
	 * @param $m integer le mois à afficher
	 * @param $links array l'ensemble des liens à afficher
	 *
	 * @return $footer string les cases du pied du tableau contenant les liens vers les mois avec articles
	 * @author Cyril MAGUIRE
	 */
	public function makeFooter($y,$m,$links)
	{
		$archives = $this->archList('<a href="#archives_url" title="#archives_name">#archives_link_name</a>',$y,4);
		
		$k = array_keys($archives);
		foreach($k as $key=>$date) {
			if ($date == $y.$m) {
				if (isset($archives[$k[$key-1]])) {
					$links[0] = array(
						'date'=>$k[$key-1],
						'url'=>$archives[$k[$key-1]]
					);
				}elseif (isset($archives[$k[$key+1]])) {
					$links[0] = array(
						'date'=>$k[$key+1],
						'url'=>$archives[$k[$key+1]]
					);
				}else {
					$links[0] = array(
						'date'=>$k[0],
						'url'=>$archives[$k[0]]
					);
					$links[1] = '';
				}
				if (isset($archives[$k[$key+1]]) && $links[0]['url'] != $archives[$k[$key+1]]){
					$links[1] = array(
						'date'=>$k[$key+1],
						'url'=>$archives[$k[$key+1]]
					);
				}else {
					$links[1] = '';
				}
				
			}elseif (!isset($links[0])) {
				$links[0] = array(
						'date'=>$k[0],
						'url'=>$archives[$k[0]]
					);
				$links[1] = '';
			}
		}
		if (count($k) == 1) {
			$links[0] = array(
				'date'=>$k[$key],
				'url'=>$archives[$k[0]]
			);
			$links[1] = '';
		}
		
		$linkYear = substr($links[0]['date'],0,4);
		$linkMonth = substr($links[0]['date'],4,2);
		
		if (!empty($links[1])){
				$footer = '
				<td colspan="3" id="prev">'.str_replace('">','">&laquo;&nbsp;',$links[1]['url']).'</td>
				<td class="pad">&nbsp;</td>
				<td colspan="3" id="next" class="pad">'.str_replace('</','&nbsp;&raquo;</',$links[0]['url']).'</td>';
		}else {
			if ($linkYear == $y && $linkMonth < $m){
				$footer = '
				<td colspan="3" id="prev">'.str_replace('">','">&laquo;&nbsp;',$links[0]['url']).'
				<td class="pad">&nbsp;</td>
				<td colspan="3" id="next" class="pad">&nbsp;</td>';
			}
			if ($linkYear == $y && $linkMonth > $m){
				$footer = '
				<td colspan="3" id="prev">&nbsp;</td>
				<td class="pad">&nbsp;</td>
				<td colspan="3" id="next" class="pad">'.str_replace('</','&nbsp;&raquo;</',$links[0]['url']).'</td>';
			}
			if ($linkYear < $y){
				$footer = '
				<td colspan="3" id="prev">'.str_replace('">','">&laquo;&nbsp;',$links[0]['url']).'
				<td class="pad">&nbsp;</td>
				<td colspan="3" id="next" class="pad">&nbsp;</td>';
			}
			if ($linkYear > $y){
				$footer = '
				<td colspan="3" id="prev">&nbsp;</td>
				<td class="pad">&nbsp;</td>
				<td colspan="3" id="next" class="pad">'.str_replace('</','&nbsp;&raquo;</',$links[0]['url']).'</td>';
			}
			if ($linkYear == $y && $linkMonth == $m){
				$footer = '
				<td colspan="3" id="prev">&nbsp;
				<td class="pad">&nbsp;</td>
				<td colspan="3" id="next" class="pad">&nbsp;</td>';
			}
		}
		return $footer;
	}
	
	/**
	 * Methode qui recupere les articles en fonction des criteres
	 *
	 * @author	Cyril MAGUIRE (d'apres Stephane F)
	 **/
	public function getArticles() {
		$this->plxMotor = plxMotor::getInstance();
		$art = array();
		
		$plxGlob_arts = clone $this->plxMotor->plxGlob_arts;
		if($files = $plxGlob_arts->query('/^[0-9]{4}.[home|'.$this->plxMotor->activeCats.',]*.[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/','art','sort',0,false,'before')) {
			foreach($files as $filename) {
				if(preg_match('/[0-9]{4}.([home|'.$this->plxMotor->activeCats.',]*).[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/',$filename,$capture)){
					$catIds=explode(',',$capture[1]);
					foreach($catIds as $catId) {
						if(!in_array($catId, $this->excludeCats)) {
							$tmp = $this->plxMotor->parseArticle(PLX_ROOT.$this->plxMotor->aConf['racine_articles'].$filename);
							$y = substr($tmp['date'], 0,4);
							$m = substr($tmp['date'],4,2);
							$d = substr($tmp['date'],6,2);
							$art[$y][$y.$m.$d] = array(
								'month'	=> $m,
								'day'	=> $d,
								'url' 	=> $this->plxMotor->urlRewrite('?archives/'.$y.'/'.$m.'/'.$d),
								'title'	=> $tmp['title']
							);
						}
					}
				}
			}
		}
		return $art;
	}

	
	/**
	 * M?thode qui affiche la liste des archives
	 *
	 * @param $format string format du texte pour l'affichage 
	 * 		  (variables : #archives_id, #archives_status, #archives_nbart, #archives_url, #archives_name, #archives_link_name, #archives_month, #archives_year)
	 * @param $curYear integer l'année en cours
	 * @param $substr integer le nombre de lettres à afficher pour les liens
	 *
	 * @return	array $arch
	 * @author	Cyril MAGUIRE (d'apres Stephane F)
	 **/
	public function archList($format='<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_link_name</a></li>',$curYear='',$substr=''){
		if ($curYear=='') {
			$curYear=date('Y');
		}
		
        $array = array();
		$arch = array();

		$plxGlob_arts = clone $this->plxMotor->plxGlob_arts;

		if($files = $plxGlob_arts->query('/^[0-9]{4}.[home|'.$this->plxMotor->activeCats.',]*.[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/','art','rsort',0,false,'before')) {
			foreach($files as $id => $filename){
				if(preg_match('/([0-9]{4}).([home|'.$this->plxMotor->activeCats.',]*).[0-9]{3}.([0-9]{4})([0-9]{2})([0-9]{6}).([a-z0-9-]+).xml$/',$filename,$capture)){
					if($capture[3]==$curYear) {
						if(!isset($array[$capture[3]][$capture[4]])) $array[$capture[3]][$capture[4]]=1;
						else $array[$capture[3]][$capture[4]]++;
					} else {
						if(!isset($array[$capture[3]][$capture[4]])) $array[$capture[3]][$capture[4]]=1;
						else $array[$capture[3]][$capture[4]]++;
					}
				}
			}
			krsort($array);
			
			# Affichage pour l'annee en cours
			if(isset($array[$curYear])) {
				foreach($array[$curYear] as $month => $nbarts){
					$name = str_replace('#archives_id','archives-'.$curYear.$month,$format);
					$name = str_replace('#archives_name',plxDate::getCalendar('month', $month).' '.$curYear,$name);
					if ($substr=='') {
					$name = str_replace('#archives_link_name',plxDate::getCalendar('month', $month).' '.$curYear,$name);
					}else {
					$name = str_replace('#archives_link_name',substr(plxDate::getCalendar('month', $month),0,$substr).' '.$curYear,$name);
					}
					$name = str_replace('#archives_year',$curYear,$name);
					$name = str_replace('#archives_month',plxDate::getCalendar('month', $month),$name);
					$name = str_replace('#archives_url', $this->plxMotor->urlRewrite('?archives/'.$curYear.'/'.$month), $name);
					$name = str_replace('#archives_nbart',$nbarts,$name);
					$name = str_replace('#archives_status',(($this->plxMotor->mode=="archives" AND $this->plxMotor->cible==$curYear.$month)?'active':'noactive'), $name);
					$arch[$curYear.$month] = $name;
				}
			}
			# Affichage pour les annees precedentes
			unset($array[$curYear]);
			foreach($array as $year=>$m){
				foreach($array[$year] as $month=>$nbarts){
					$name = str_replace('#archives_id','archives-'.$year.$month,$format);
					$name = str_replace('#archives_name',plxDate::getCalendar('month', $month).' '.$year,$name);
					if ($substr=='') {
					$name = str_replace('#archives_link_name',plxDate::getCalendar('month', $month).' '.$curYear,$name);
					}else {
					$name = str_replace('#archives_link_name',substr(plxDate::getCalendar('month', $month),0,$substr).' '.$curYear,$name);
					}
					$name = str_replace('#archives_year',$year,$name);
					$name = str_replace('#archives_month',plxDate::getCalendar('month', $month),$name);
					$name = str_replace('#archives_url', $this->plxMotor->urlRewrite('?archives/'.$year.'/'.$month), $name);
					$name = str_replace('#archives_nbart',$nbarts,$name);
					$name = str_replace('#archives_status',(($this->plxMotor->mode=="archives" AND $this->plxMotor->cible==$year)?'active':'noactive'), $name);
					$arch[$year.$month] = $name;
				}
			}
		}
		krsort($arch);		
		return $arch;
    }


}
	
?>
