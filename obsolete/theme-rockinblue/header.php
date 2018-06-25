<!-- TODO: Améliorer l'affichage du menu -->

<?php if(!defined('PLX_ROOT')) exit; ?>
<!-- <?php include(PLX_ROOT.'plugins/tags/tags.php') ?> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title><?php $plxShow->pageTitle(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
    <link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
    <link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
    <link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
    <link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
    <link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
    <link rel="icon" type="image/png" href="/images/mafavicon.png" />
    <script src="js/clearbox.js" type="text/javascript"></script>  
</head>
<body>
	<div id="top">
		<!-- Le conteneur fait office de cadre, tout est centré sur l'ecran, grâce à ce cadre -->
		<div id="container">
			<div id="header">
				<!--description du blog-->
				<h3><?php $plxShow->subTitle(); ?></h3>
				<!--titre du blog-->
				<h2><?php $plxShow->mainTitle('link'); ?></h2>
			</div>
			<!-- Accueil et menus statiques -->
			<div id="menu">
				<ul><?php $plxShow->staticList('Accueil','<li><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?></ul>
			</div>
