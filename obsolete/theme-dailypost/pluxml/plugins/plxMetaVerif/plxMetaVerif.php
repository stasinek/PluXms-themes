<?php
/**
 * Classe plxMetaVerif
 *
 * @version 1.0
 * @date	28/09/2010
 * @author	Cyril MAGUIRE
 **/
class plxMetaVerif extends plxPlugin {
	
	
	/**
	 * Constructeur de la classe
	 *
	 * @return	null
	 * @author	Cyril MAGUIRE 
	 **/	
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# droits pour accèder à la page config.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);
		
		# Ajouts des hooks
		$this->addHook('ThemeEndHead', 'MyMetaVerif');
		$this->addHook('AdminTopEndHead', 'AdminTopEndHead');	
	}

	/**
	 * Méthode qui insère la balise meta de vérification des moteurs de recherche dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Cyril MAGUIRE
	 **/	
	public function MyMetaVerif() {
		echo "\n\t".'<meta name="google-site-verification" content="'.$this->getParam('metagoogle').'" />'."\n";
		echo "\n\t".'<meta name="msvalidate.01" content="'.$this->getParam('metabing').'" />'."\n";
	}
	
	/**
	 * Méthode qui insère la balise link de mise en forme (css) des formulaires
	 *
	 * @return	stdio
	 * @author	Cyril MAGUIRE
	 **/
	public function AdminTopEndHead() {
		echo "\n\t".'<link rel="stylesheet" type="text/css" href="'.PLX_PLUGINS.'plxMetaVerif/styles.css" media="screen" />';
	}
	
}
?>