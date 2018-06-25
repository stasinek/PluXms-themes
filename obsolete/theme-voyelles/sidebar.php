<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="shortcut icon" href="<?php $plxShow->template(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
</head>
<body>
<div id="sidebar">
	<div id="logo">
		<a href="../" title="Juste Quelques Sons"><img src="themes/voyelles/logo.png" alt="logo" /></a>
	</div>
	<div id="menu">
		<h2>Menu</h2>
		<ul><?php $plxShow->staticList('Accueil'); ?></ul>
		<h2>Cat&eacute;gories</h2>
		<ul><?php $plxShow->catList('','#cat_name'); ?></ul>
	</div>
</div>