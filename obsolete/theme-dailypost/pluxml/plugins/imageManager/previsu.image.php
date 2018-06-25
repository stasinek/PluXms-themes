<?php
/*
	Rend une image
*/

# Inclusion de la classe customImage
include_once(dirname(__FILE__).'/class.custom.image.php');

# Nouvelle image
$image = new customImage() ;

# Requis : image est une image
session_start();
$file=$_SESSION['my_custom_image'] ;
unset($_SESSION['my_custom_image']);
if(!$image->load($file)) exit ;

# Parametres pour la transformation
$transform = (!empty($_GET['transform']))?$_GET['transform']:false;
$w = (isset($_GET['w']))?intval($_GET['w']):0;
$h = (isset($_GET['h']))?intval($_GET['h']):0;
$x = (isset($_GET['x']))?intval($_GET['x']):0;
$y = (isset($_GET['y']))?intval($_GET['y']):0;
$d = (isset($_GET['d']))?intval($_GET['d']):0;

# Transformation
if(!empty($transform)) {
	$image->launchTransformation($transform,$d,$w,$h,$x,$y) ;
}

# Affichage
header ("Content-type: image/jpeg");
ImageJPEG ($image->image);

?>