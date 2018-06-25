<?php

/**
 * Classe plxPlugin responsable de l'affichage des plugins sur stdout
 *
 * @package PLX
 * @author	Anthony T.
 **/
class plxPlugin {

	var $plxMotor = false; # Objet plxMotor

	/**
	 * Constructeur qui initialise l'objet plxMotor par référence
	 *
	 * @param	plxMotor	objet plxMotor passé par référence
	 * @return	null
	 * @author	Florent MONTHEL
	 **/
	function plxPlugin(&$plxMotor) {

		$this->plxMotor = &$plxMotor;
	}

	/**
     * Méthode qui affiche la date de la dernière modification de la page statique selon le format choisi 
     *
     * @param    format    format du texte de la date (variable: #minute,#hour,#day,#month,#num_day,#num_month,#num_year(4),#num_year(2))
     * @return    stdout
     * @author    Anthony T.
     **/
    function staticDate($format='#num_day #month #num_year(4)') {

        # On genere le nom du fichier dont on veux récupérer la date
        $file = PLX_ROOT.$this->plxMotor->aConf['racine_statiques'].$this->plxMotor->cible;
        $file .= '.'.$this->plxMotor->aStats[ $this->plxMotor->cible ]['url'].'.php';
        # On récupère la date de la dernière modification du fichier qu'on formate
        $date = date('Y-m-d\TH:i:s', filemtime($file)).$this->plxMotor->aConf['delta'];
        echo plxDate::dateIsoToHum($date, $format);
    }
	
	/**
	* Méthode qui affiche l'url du gravatar de la personne
	*
	* @param	 size	 taille de la miniature à afficher
	* @return    stdout
	* @author    Anthony T.
	**/
	function Gravatar($size = 32){
		$email = $this->plxMotor->plxRecord_arts->f('mail');
        $default = $this->plxMotor->racine.'themes/'.$this->plxMotor->style."/gravatar.jpg";
        $grav_url = "http://www.gravatar.com/avatar/".md5($email)."?d=".urlencode($default)."&amp;s=".$size;
        echo $grav_url;
	}
}

$plxPlugin = new plxPlugin($plxMotor);
?>