<?php
/*
	Plugin pour la transformation des images
	Auteur : thomas morin
*/

class imageManager extends plxPlugin {

	protected $on = false ;

	# Constructeur
	public function __construct($default_lang) {
			
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclaration des hooks
		$this->addHook('AdminMediasPrepend', 'AdminMediasPrepend');
		$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
		$this->addHook('AdminMediasTop', 'AdminMediasTop');
		$this->addHook('AdminMediasFoot', 'AdminMediasFoot');
	}
	
	# Les liens vers les images vont pointer vers la page d'administration des images 
	public function AdminMediasTop(){
		global $plxMedias ;
		if(is_array($plxMedias->aFiles)) {
			foreach($plxMedias->aFiles as $k => $v) {
				# Si le fichier n'est pas une image on continue
				if(!isset($v['infos']['mime'])){
					continue ;
				}else{
					# Sinon au lieu d'aller vers l'image on va vers la page d'administration
					$plxMedias->aFiles[$k]['path'] = 'medias.php?image='.$v['name'] ;
				}
			}
		}
	}	
	
	# Inclusion du style pour le gestionnaire d'image
	public function AdminTopEndHead(){
		if($this->on) {
			$path = PLX_PLUGINS.basename(dirname(__FILE__)).'/' ;
			echo '<?php echo \'<link rel="stylesheet" type="text/css" href="'.$path.'style.css" media="screen" />\'; ?>' ;
		}
	}	
	
	# Inclusion du formulaire d'image
	public function AdminMediasPrepend(){
		if(isset($_GET['image']) and plxUtils::checkSource($_GET['image'],'file')) {
			$this->on = true ;
			echo "<?php"
					." define('MY_CUSTOM_IMAGE_TO_CORE',dirname(__FILE__).'/') ;"
					." \$image_name='".$_GET['image']."' ;"
					." include('".dirname(__FILE__)."/form.image.php') ;"
					." exit ;"
				." ?>" ;
		}
	}

	# Modifie le comportement javascript des liens qui s'ouvraient auparavant dans une autre page
	public function AdminMediasFoot(){
		echo "\n"
			."<script type=\"text/javascript\">\n"
			."	for (var i=0;i < document.links.length;i++) {\n"
			."		if(document.links[i].getAttribute('onclick') == \"this.target='_blank';return true;\") {\n"
			."			document.links[i].removeAttribute('onclick') ;\n"
			."		}\n"
			."	}\n"
			."</script>\n" ;
	}
}
?>