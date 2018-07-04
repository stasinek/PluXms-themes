<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
</head>
<body>
<div id="top">
	<h1><?php $plxShow->mainTitle('link'); ?></h1>
	<ul>
		<?php $plxShow->staticList('Accueil'); ?>
	</ul>
	<p><cite>« Notre métier n'est pas de faire plaisir, non plus de faire du tort, il est de porter la plume dans la plaie. » Albert Londres</cite></p>
</div>
