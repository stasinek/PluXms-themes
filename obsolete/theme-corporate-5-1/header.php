<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>	
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
<?php $plxShow->templateCss() ?>
<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="Fil Rss des commentaires">Commentaires</a></li>
<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="Fil Rss des articles">Articles</a></li>
	<!--[if lte IE 8]> 
  <style type="text/css"> 
  #page { 
     filter:progid:DXImageTransform.Microsoft.Glow(Color=#000000,Strength=8); 
            zoom: 1; 
  }  
  </style> 
<![endif]--> 
</head>
<body>
<div id="page">
<div id="top">
	<div id="header">
		<h1><?php $plxShow->mainTitle('link'); ?></h1>
		<p><?php $plxShow->subTitle(); ?></p>
	</div>
</div>
