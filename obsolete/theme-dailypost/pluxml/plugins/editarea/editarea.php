<?php
/**
 * Plugin editarea
 *
 * @package	PLX
 * @version	1.0
 * @date	18/07/2011
 * @author	Stephane F.
 * @author	Maguire Cyril
 **/
class editarea extends plxPlugin {

	/**
	 * Constructeur de la classe editarea
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Maguire Cyril
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		if($this->getParam('uplDir')=='' AND preg_match('/(parametres_edittpl.php|statique.php)/', basename($_SERVER['SCRIPT_NAME']))) {
			# Déclarations des hooks
			$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
		}		
	}

	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de EditArea dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Maguire Cyril
	 **/	
	public function AdminTopEndHead() {
		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'editarea/editarea/edit_area_full.js"></script>'."\n";
		echo "\t".'<script type="text/javascript" >'."\n";
		    echo "\t\t".'editAreaLoader.init({'."\n";
		    echo "\t\t\t".'id : "id_content"        // textarea id'."\n";
		    echo "\t\t\t".',syntax: "php"            // syntax to be uses for highgliting'."\n";
		    echo "\t\t\t".',start_highlight: true        // to display with highlight mode on start-up'."\n";
		    echo "\t\t\t".',language: "fr"'."\n";
		    //echo "\t\t\t".',display: "later"'."\n";
		    echo "\t\t\t".',toolbar:"syntax_selection, | ,search, go_to_line, fullscreen, |, undo, redo, |, select_font,|, change_smooth_selection, highlight, reset_highlight, word_wrap, |, help"'."\n";
		    echo "\t\t".'});'."\n";
		echo "\t".'</script>'."\n";
	}

}
?>