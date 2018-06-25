<?php
/**
 * Plugin plxMyAllArchive
 *
 * @author	Stephane F
 **/
class plxArchives {

	private $aArts = array(); # tableau des articles
	private $plxMotor = null; # instance de l'objet plxMotor
	private $plxPlugin = null; # objet plugin
	private $excludeCats = array(); # tableau des categories exclues de l'affichage

	/**
	 * Constructeur de la classe
	 *
	 * @author	Stephane F
	 **/
	public function __construct() {
		$this->plxMotor = plxMotor::getInstance();
		$this->plxPlugin = $this->plxMotor->plxPlugins->aPlugins['plxMyAllArchive']['instance'];
		$this->excludeCats = explode(',',$this->plxPlugin->getParam('exclude'));
	}

	/**
	 * Méthode qui récupère les articles en fonction des critères
	 *
	 * @author	Stephane F
	 **/
	public function getArticles() {

		$plxGlob_arts = clone $this->plxMotor->plxGlob_arts;
		if($files = $plxGlob_arts->query('/^[0-9]{4}.[home|'.$this->plxMotor->activeCats.',]*.[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/','art',$this->plxPlugin->getParam('sort'),0,false,'before')) {
			$sort = $this->plxPlugin->getParam('sortby');
			foreach($files as $filename) {
				if(preg_match('/[0-9]{4}.([home|'.$this->plxMotor->activeCats.',]*).[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/',$filename,$capture)){
					$catIds=explode(',',$capture[1]);
					foreach($catIds as $catId) {
						if(!in_array($catId, $this->excludeCats)) {
							$tmp = $this->plxMotor->parseArticle(PLX_ROOT.$this->plxMotor->aConf['racine_articles'].$filename);
							$art = array(
								'year'	=> substr($tmp['date'], 0,4),
								'cats'	=> $catIds,
								'cat'	=> $catId,
								'url' 	=> $this->plxMotor->urlRewrite('?article'.intval($tmp['numero']).'/'.$tmp['url']),
								'title' => $tmp['title'],
								'date'	=> plxDate::formatDate($tmp['date'],'#num_day/#num_month/#num_year(4)'),
								'author'=> $this->plxMotor->aUsers[$tmp['author']]['name'],
							);
							switch ($sort) {
								case 'by_year_asc':
								case 'by_year_desc':
									$this->getByYear($art);
									break;
								case 'by_category':
									$this->getByCategory($art);
									break;
							}
						}
					}
				}
			}
			$this->Sort($sort);
		}
	}

	/**
	 * Méthode qui trie les articles par année
	 *
	 * @author	Stephane F
	 **/
	private function getByYear($art) {
		$this->aArts[$art['year']][] = $art;
	}

	/**
	 * Méthode qui trie les articles par catégorie
	 *
	 * @author	Stephane F
	 **/
	private function getByCategory($art) {
		if($art['cat']=='000')
			$catName = L_UNCLASSIFIED;
		elseif($art['cat']=='home')
			$catName = L_HOMEPAGE;
		else
			$catName = plxUtils::strCheck($this->plxMotor->aCats[$art['cat']]['name']);
		$this->aArts[$catName][] = $art;
	}

	/**
	 * Méthode qui trie les articles par date
	 *
	 * @author	Stephane F
	 **/
	private function Sort($sort) {

		switch ($sort) {
			case 'by_year_asc':
				ksort($this->aArts);
				break;
			case 'by_year_desc':
				krsort($this->aArts);
				break;
			case 'by_category':
				$array = array();
				foreach($this->plxMotor->aCats as $k=>$v) { # articles affectés à ne catégories
					if(isset($this->aArts[$v['name']])) {
						$array[$v['name']]=$this->aArts[$v['name']];
					}
				}
				if(isset($this->aArts[L_UNCLASSIFIED])) # articles non classé
					$array[L_UNCLASSIFIED]=$this->aArts[L_UNCLASSIFIED];
				if(isset($this->aArts[L_HOMEPAGE])) # articles en page d'accueil
					$array[L_HOMEPAGE]=$this->aArts[L_HOMEPAGE];
				$this->aArts=$array;
				break;
		}
	}

	/**
	 * Méthode qui affiche la liste des archives
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function Display() {
		if($this->aArts) {
			$format = $this->plxPlugin->getParam('format');
			foreach($this->aArts as $k => $v) {
				echo '<div id="allarchive">';
				echo '<p class="p_archive">'.$k.'</p>';
				echo '<ul>';
				foreach($v as $art) {
					$row = str_replace('#art_date', $art['date'], $format);
					$row = str_replace('#art_link', '<a href="'.$art['url'].'">'.plxUtils::strCheck($art['title']).'</a>', $row);
					$row = str_replace('#art_author', plxUtils::strCheck($art['author']), $row);
					echo '<li>'.$row.'</li>';
				}
				echo '</ul>';
				echo '</div>';
			}
		} else {
			echo '<p>'.$this->plxPlugin->getLang('L_NO_ARTICLE').'</p>';
		}
	}
}