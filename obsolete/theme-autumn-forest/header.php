<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/style.css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
</head>
<body>
<a name="top"></a>
<div id="universe-a">
	<div id="universe-b">
		<div id="universe-c">
			<div id="header">
				<h1 id="blog-title"><?php $plxShow->mainTitle('link'); ?></h1>
				<div id="blog-description"><?php $plxShow->subTitle(); ?></div>
				<div id="m-rss"><a href="./feed.php?rss" title="S'abonner au flux RSS"><img src="<?php $plxShow->template(); ?>/img/ico-rss.png" alt="S'abonner au flux RSS" /></a></div>
			</div>
			<hr class="hide" />
			<div id="nav">
				<ul class="clearfix"><?php $plxShow->staticList('Accueil'); ?></ul>
			</div>
			<div id="container" class="clearfix">