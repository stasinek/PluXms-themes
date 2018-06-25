<?php
class filAriane extends plxPlugin {

		public function __construct($default_lang) {
			parent::__construct($default_lang);

			$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
			$this->addHook('filAriane', 'filAriane');
		}


		public function AdminTopEndHead() { // insère la feuille de style du plugin que dans la page d'édition de l'article
			echo "\t".'<link rel="stylesheet" type="text/css" href="'.PLX_PLUGINS.'filAriane/style.css" media="screen" />'."\n";
		}

		public function filAriane($param) { // creation du hook
			$param = "<span>".$param."</span>";
			$plxMotor = plxMotor::getInstance();
			$plxShow = plxShow::getInstance();
			
			echo "<a href=\"".$plxMotor->urlRewrite()."\" title=\"".$this->getlang('L_RETOUR')." ".$plxMotor->aConf['title']."\">Accueil</a>";
			
			if($plxShow->mode()=='static'){
				echo $param;
				$plxShow->staticTitle();
			} elseif($plxShow->mode()=='article'){
				echo $param;
				$plxShow->artCat();
				echo $param;
				$plxShow->artTitle('');
			} elseif($plxShow->mode()=='categorie'){
				echo $param;
				echo plxUtils::strCheck($plxShow->plxMotor->aCats[$plxShow->plxMotor->cible]['name']);
			} elseif($plxShow->mode()=='tags'){
				echo $param;
				echo $plxShow->lang('TAGS');
				echo $param;
				echo plxUtils::strCheck($plxShow->plxMotor->cible);
			} else{}

		}
	
	}

?>