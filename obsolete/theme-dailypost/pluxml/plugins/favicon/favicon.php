<?php
/**
 * Plugin Favicon
 *
 * @package	PLX
 * @version	1.0
 * @date	03/08/2011
 * @author	Cyril MAGUIRE
 **/
class favicon extends plxPlugin {

	/**
	 * Constructeur de la classe favicon
	 *
	 * @param	default_lang	langue par d?faut utilis?e par PluXml
	 * @return	null
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addFavicon');
		$this->addHook('AdminTopEndHead', 'addFavicon');
		$this->addHook('AdminAuthEndHead', 'addFavicon');
	}

	/**
	 * Méthode qui ajoute l'insertion des liens vers les favicons dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Cyril MAGUIRE
	 **/	
	public function addFavicon() {
		
		echo "\t".'<!-- FAVICONS -->'."\n";
		echo "\t".'<link href="'.PLX_PLUGINS.'favicon/img/favicon.ico" type="image/x-icon" rel="icon" />'."\n";
		echo "\t".'<link href="'.PLX_PLUGINS.'favicon/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />'."\n";
		echo "\t".'<link href="'.PLX_PLUGINS.'favicon/img/apple-touch-icon.png" type="image/apple-touch-icon" rel="apple-touch-icon" />'."\n";

	}

}
?>