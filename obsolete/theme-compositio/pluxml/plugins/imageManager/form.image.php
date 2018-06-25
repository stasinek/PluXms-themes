<?php if(!defined('PLX_ROOT') or !defined('MY_CUSTOM_IMAGE_TO_CORE')) exit;
/*
	Formulaire pour la transformation des images
*/

# Inclusion de la classe customImage
include_once(dirname(__FILE__).'/class.custom.image.php');

# Initialisation 
$path = PLX_ROOT.$_SESSION['medias'].(($plxAdmin->aConf['userfolders'])?$_SESSION['user'].'/':'') ;
$dir = $_SESSION['folder'] ;
$image_path= $path.$dir.$image_name ;
$image_infos = @getimagesize($image_path) ;
$mode = 'normal' ;
$is_thumb = (substr(substr($image_name, 0, strrpos($image_name,'.')),-3)=='.tb') ;
unset($_SESSION['my_custom_image']) ;

# On vérifie qu'on a bien une image
if(!isset($image_infos['mime'])) {
	$_SESSION['my_custom_image'] = '' ;
	plxMsg::Error("Le fichier ".$image_path." n'existe pas ou n'est pas une image.");
	header('Location: medias.php');
	exit;	
}

# Enregistrement ou prévisualisation d'une transformation
if(!empty($_POST['transform'])) {	
	# Récupération des informations
	$t = $_POST['transform'] ;
	$d = $_POST['d'] ;
	$w = abs(intval($_POST['w'])) ;
	$h = abs(intval($_POST['h'])) ;
	$x = abs(intval($_POST['x'])) ;
	$y = 0;
	$toggle = $_POST['toggle'] ;
	
	# Cas particuliers
	switch($t) {
		case 'setwidth' :
			if($toogle=='height') {
				$t='setheight' ;
				$h = $w ;
			}
			break ;
		case 'cut' :
			switch ($toggle) {
				case 'right' : $x = -$x ; break ;
				case 'top' : $y = $x ;$x=0;  break ;
				case 'bottom' : $y = -$x ;$x=0;  break ;
				default: break ;
			}
			break ;
	}
	
	# Prévisualisation
	if(!empty($_POST['preview'])) {
		$_SESSION['my_custom_image'] = $image_path ;
		$mode = 'preview';
		$image_path = PLX_PLUGINS.basename(dirname(__FILE__)).'/previsu.image.php?transform='.$t.'&amp;w='.$w.'&amp;h='.$h.'&amp;x='.$x.'&amp;y='.$y.'&amp;d='.$d ;
	} 
	# Enregistrement	
	elseif(!empty($_POST['update'])) {

		# Nouvelle image
		$image = new customImage() ;

		# Trop peu probable pour être honnète
		if(!$image->load($image_path)) exit ;

		# Transformation
		if(!$image->launchTransformation($t,$d,$w,$h,$x,$y)) {
			plxMsg::Error("Erreur lors de la modification de l'image ".plxUtils::strCheck($_SESSION['folder'].$image_name));
			header('Location:'.$_SERVER['REQUEST_URI']);
			exit;		
		}
		# Enregistrement
		elseif(!$image->save($image_path)) {
			plxMsg::Error("Erreur lors de l'enregistrement de l'image ".plxUtils::strCheck($_SESSION['folder'].$image_name));
			header('Location:'.$_SERVER['REQUEST_URI']);
			exit;		
		} 
		# Recréation de la Miniature pr l'administration
		if(!$is_thumb) {
			$thumb_path= $path.'.thumbs/'.$dir.$image_name ;
			plxUtils::makeThumb($image_path,$thumb_path,60,60,60) ;
		}
		# Redirection
		plxMsg::Info("Modification et enregistrement de l'image ".plxUtils::strCheck($_SESSION['folder'].$image_name));
		header('Location:'.$_SERVER['REQUEST_URI']);
		exit;		
	}	
}
# Renommer
elseif(!empty($_POST['old_name']) and !empty($_POST['new_name']) and !$is_thumb) {

	# Trop peu probable pour être honnète
	if($image_name != $_POST['old_name']) exit ;
	
	# Nouveau nom (on garde l'ancienne extension pour s'éviter des vérifiactions)
	$new = plxUtils::title2filename($_POST['new_name']);
	
	# Seconde vérification : on ne garde que les caractères a-z0-9- 
	#(? je pensais que c'était fait par title2filename)
	$new_body = substr($new, 0, strrpos($new,'.')) ;
	$new_body = preg_replace('/[^a-z0-9-]+/',' ',$new_body);
	$new_body = strtr(ltrim(trim($new_body)), ' ', '-');
	$new_name = substr($new, 0, strrpos($new,'.')).strtolower(strrchr($image_name, '.'));
		
	# Chemin complet
	$new_path = $path.$dir.$new_name ;
	
	# Le nouveau chemin existe déjà
	if(is_file($new_path)) {
		plxMsg::Error("Le fichier ".$dir.$new_name." existe d&eacute;j&agrave;");
		header('Location:'.$_SERVER['REQUEST_URI']);
		exit;		
	}
	# Renommage de l'original
	if(rename($image_path,$new_path)) {
		$msg = $dir.$new_name.' renomm&eacute; correctement.' ;
	} else {
		plxMsg::Error("&Eacute;chec pour renommer ".$image_name);
		header('Location:'.$_SERVER['REQUEST_URI']);
		exit;		
	}
	# Renommage de la miniature
	if(is_file($old_thumb=plxUtils::thumbName($image_path)) and !rename($old_thumb,plxUtils::thumbName($new_path))) {
		$msg .= ' &Eacute;chec pour renommer la miniature du site.' ;
	}
	# Renommage de la miniature de l'administration
	if(is_file($old_thumb=$path.'.thumbs/'.$dir.$image_name) and !rename($old_thumb,$path.'.thumbs/'.$dir.$new_name)) {
		$msg .= ' &Eacute;chec pour renommer la miniature de l\'administration.' ;
	}
	# Redirection
	plxMsg::Info($msg);
	header('Location: medias.php?image='.$new_name);
	exit;
}
# Aucune transformation
else {
	# Force le rechargement de l'image
	$image_path .= '?'.@date('YdHs') ;
	# Initialisation des paramètres
	$t = $d = $w = $h = $x = $y = $toggle = 0  ;
} 

# On inclut le header
include(MY_CUSTOM_IMAGE_TO_CORE.'top.php');

# Affichage de l'image
?>
<div id="custom-image">
	<h2>Modification d'une image</h2>
	<p class="path"><?php echo L_MEDIAS_DIRECTORY.' : /'.plxUtils::strCheck(basename($_SESSION['medias']).'/'.$_SESSION['folder'].$image_name) ?> (<a href="medias.php">Revenir au dossier</a>)</p>
	<br/>
	<img src="<?php echo $image_path ; ?>" alt="image <?php echo $image_name ?>" />
</div>
<?php
# Formulaires pour transformer l'image
$tokenMethod = plxToken::getTokenPostMethod()."\n" ;
?>
<div id="custom-image-form">
<p class="field_head">
	&Eacute;tat&nbsp;:&nbsp;
	<strong><?php echo ($mode=='preview')?'Pr&eacute;visualisation (<a href="medias.php?image='.$image_name.'">r&eacute;initialiser</a>)':'Image enregistr&eacute;e' ; ?></strong>
</p>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
	<h3>Retourner</h3>
	<select name="d">
		<option value="90"<?php if($d=='90') echo ' selected="selected"';?>>vers la gauche</option>
		<option value="270"<?php if($d=='270') echo ' selected="selected"';?>>vers la droite</option>
		<option value="180"<?php if($d=='180') echo ' selected="selected"';?>>de 180 degr&eacute;s</option>
	</select>
	<p class="image_form_validation">
		<input type="hidden" value="rotate" name="transform"/>
		<?php echo $tokenMethod ?>
		<input type="submit" class="image_preview"  value="Voir" name="preview"/>
		<input type="submit" class="image_update"   value="Ok" name="update"/>
	</p>
</form>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">	
	<h3>R&eacute;duire <span class="image_form_info">(largeur x hauteur)</span></h3>
	<input class="image_dimension" type="text" value="<?php echo ($t=='reduce')?$w:0 ?>" name="w" size="1" maxlength="3"/>
	&nbsp; x &nbsp;
	<input class="image_dimension" type="text" value="<?php echo ($t=='reduce')?$h:0  ?>" name="h" size="1" maxlength="3"/>
	<p class="image_form_validation">
		<input type="hidden" value="reduce" name="transform"/>
		<?php echo $tokenMethod ?>
		<input type="submit" class="image_preview"  value="Voir" name="preview"/>
		<input type="submit" class="image_update"   value="Ok" name="update"/>
	</p>
</form>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">	
	<h3>R&eacute;duire et couper <span class="image_form_info">(largeur x hauteur)</span></h3>
	<input class="image_dimension" type="text" value="<?php echo ($t=='reducecrop')?$w:0 ?>" name="w" size="1" maxlength="3"/>
	&nbsp; x &nbsp;
	<input class="image_dimension" type="text" value="<?php echo ($t=='reducecrop')?$h:0  ?>" name="h" size="1" maxlength="3"/>
	<p class="image_form_validation">
		<input type="hidden" value="reducecrop" name="transform"/>
		<?php echo $tokenMethod ?>
		<input type="submit" class="image_preview"  value="Voir" name="preview"/>
		<input type="submit" class="image_update"   value="Ok" name="update"/>
	</p>
</form>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">	
	<h3>Redimensionner</h3>
	<input class="image_dimension" type="text" value="<?php  if($t=='setwidth') { echo ($toggle=='height')?$h:$w; } else { echo '0' ;} ; ?>" name="w" size="1" maxlength="3"/>
	<select name="toggle">
		<option value="height"<?php if($t=='setwidth' and $toggle=='height') echo ' selected="selected"';?>>en hauteur</option>
		<option value="none"<?php if($t!='setwidth' or $toggle!='height') echo ' selected="selected"'; ?>>en largeur</option>
	</select>
	<p class="image_form_validation">
		<input type="hidden" value="setwidth" name="transform"/>
		<?php echo $tokenMethod ?>
		<input type="submit" class="image_preview"  value="Voir" name="preview"/>
		<input type="submit" class="image_update"   value="Ok" name="update"/>
	</p>
</form>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
	<h3>Rogner</h3>
	<input class="image_dimension" type="text" value="<?php echo abs($x+$y); ?>" name="x" size="1" maxlength="3"/>
	<select name="toggle">
		<option value="left"<?php if($t=='cut' and $toggle=='left') echo ' selected="selected"';?>>&agrave; gauche</option>
		<option value="right"<?php if($t=='cut' and $toggle=='right') echo ' selected="selected"';?>>&agrave; droite</option>
		<option value="top"<?php if($t=='cut' and $toggle=='top') echo ' selected="selected"';?>>en haut</option>
		<option value="bottom"<?php if($t=='cut' and $toggle=='bottom') echo ' selected="selected"';?>>en bas</option>
	</select>&nbsp;
	<p class="image_form_validation">
		<input type="hidden" value="cut" name="transform"/>
		<?php echo $tokenMethod ?>
		<input type="submit" class="image_preview"  value="Voir" name="preview"/>
		<input type="submit" class="image_update"   value="Ok" name="update"/>
	</p>
</form>
<?php if(!$is_thumb): ?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
	<h3>Renommer</h3>
	<input type="hidden" value="<?php echo $image_name; ?>" name="old_name"/>
	<input type="text" class="image_rename" value="<?php echo $image_name; ?>" name="new_name"/>
	<p class="image_form_validation">
		<?php echo $tokenMethod ?>
		<input type="submit" class="image_update"   value="Ok" name="image_rename"/>
	</p>
</form>
<?php endif; ?>
</div>
<div id="custom-image-help">
	<h2>Aide</h2>
	<h3>Principes g&eacute;n&eacute;raux</h3>
	<p>Les dimensions sont exprim&eacute;es en pixels.</p>
	<p>&laquo; 0 &raquo; correspond &agrave; la valeur par d&eacute;faut, c'est &agrave; dire la dimension de l'original.</p>
	<h3>Pivoter </h3>
	<p>Effectue une rotation de l'image selon un angle droit.</p>
	<h3>R&eacute;duire </h3>
	<p>Minimise l'image en conservant les proportions de sorte que ses dimensions sont inf&eacute;rieures ou &eacute;gales &agrave; celles indiqu&eacute;es.</p>
	<h3>R&eacute;duire et couper </h3>
	<p>Minimise l'image en conservant les proportions puis la coupe de sorte que ses dimensions sont exactement celles indiqu&eacute;es.</p>
	<h3>Redimensionner </h3>
	<p>R&eacute;duit ou agrandit l'image en conservant ses proportions selon la largeur ou la hauteur indiqu&eacute;e.</p>
	<h3>Rogner </h3>
	<p>Rogne l'image du nombre de pixels indiqu&eacute;s en partant de la gauche, de la droite, du haut ou du bas.</p>
</div>
<?php
# On inclut le footer
include(MY_CUSTOM_IMAGE_TO_CORE.'foot.php');
?>