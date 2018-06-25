<?php
/**
 * Plugin plxMyAllArchive
 *
 * @version	1.1.1
 * @date	16/04/2012
 * @author	Stephane F
 **/
class plxMyAllArchive extends plxPlugin {

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

        # appel du constructeur de la classe plxPlugin (obligatoire)
        parent::__construct($default_lang);

		# droits pour accèder à la page config.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);

        # déclaration des hooks
        $this->addHook('plxMotorPreChauffageBegin', 'plxMotorPreChauffageBegin');
        $this->addHook('plxShowStaticListEnd', 'plxShowStaticListEnd');
		$this->addHook('ThemeEndHead', 'ThemeEndHead');
		$this->addHook('plxShowPageTitle', 'plxShowPageTitle');

    }

	/**
	 * Méthode de traitement du hook plxMotorPreChauffageBegin
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
    public function plxMotorPreChauffageBegin() {

		$template = $this->getParam('template')==''?'static.php':$this->getParam('template');
		$mnuName = $this->getParam('mnuName')==''? $this->getLang('L_DEFAULT_MENU_NAME'):$this->getParam('mnuName');

		$string = "
		if(\$this->get && preg_match('/^allarchive\/?/',\$this->get)) {
			\$this->mode = 'allarchive';
			\$this->cible = '../../plugins/plxMyAllArchive/static';
			\$this->template = '".$template."';
			\$this->aStats[ \$this->cible ]['readable'] = 1;
			\$this->aStats[ \$this->cible ]['url'] = 'allarchive';
			\$this->aStats[ \$this->cible ]['name'] = '".$mnuName."';
			return true;
		}
		";

		echo "<?php ".$string." ?>";
    }

	/**
	 * Méthode de traitement du hook plxShowStaticListEnd
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
    public function plxShowStaticListEnd() {
    	$plxMotor = plxMotor::getInstance();
		# infos sur la page statique
		$string  = "if(\$this->plxMotor->mode=='allarchive') {";
		$string .= "	\$array = array();";
		$string .= "	\$array[\$this->plxMotor->cible] = array('name' => '".$this->getParam('mnuName')."', 'url' => 'allarchive', 'readable' => 1);";
		$string .= "	\$this->plxMotor->aStats = array_merge(\$this->plxMotor->aStats, \$array);";
		$string .= "}";
		echo "<?php ".$string." ?>";
		# ajout du menu pour accèder à la page des archives
		echo "<?php \$class = (\$this->plxMotor->mode=='allarchive'?'active':(\$this->plxMotor->mode=='archives'?'active':'noactive')); ?>";
		if (in_array($plxMotor->aConf['style'],array('typebased')) || in_array(plxUtils::getValue($_COOKIE['style'], $plxMotor->style),array('typebased'))) {
		echo "<?php array_splice(\$menus, ".($this->getParam('mnuPos')-1).", 0, '<li class=\"page_item '.\$class.'\"><a href=\"'.\$this->plxMotor->urlRewrite('?allarchive').'\"><span>".$this->getParam('mnuName')."</span></a></li>'); ?>";
		} else {
		echo "<?php array_splice(\$menus, ".($this->getParam('mnuPos')-1).", 0, '<li class=\"page_item '.\$class.'\"><a href=\"'.\$this->plxMotor->urlRewrite('?allarchive').'\">".$this->getParam('mnuName')."</a></li>'); ?>";
			}
    }

	/**
	 * Méthode qui ajoute le fichier css dans le fichier header.php du thème
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function ThemeEndHead() {
		echo "\t".'<link rel="stylesheet" type="text/css" href="'.PLX_PLUGINS.'plxMyAllArchive/style.css" media="screen" />'."\n";

	}

	/**
	 * Méthode qui rensigne le titre de la page dans la balise html <title>
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function plxShowPageTitle() {
		echo '<?php
			if($this->plxMotor->mode == "allarchive") {
				$this->plxMotor->plxPlugins->aPlugins["plxMyAllArchive"]["instance"]->lang("L_PAGE_TITLE");
				return true;
			}
		?>';
	}
}
?>