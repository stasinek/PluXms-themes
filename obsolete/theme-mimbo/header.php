<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr"  xml:lang="fr" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta name="generator" content="Pluxml" /> <!-- leave this for stats -->
        <meta name="description" content="<?php $plxShow->subTitle(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/nav.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />

	<meta name='robots' content='noindex,follow' />

</head>

<body id="home">

	<div id="page" class="clearfloat">

		<div class="clearfloat">
			<div id="branding" class="left">
				<h1><?php $plxShow->mainTitle('link'); ?></h1>
				<div class="description"><?php $plxShow->subTitle(); ?></div>
			</div>
			
<!-- SEARCH
		<div class="right">
			<form method="get" id="searchform" action="http://www.darrenhoyt.com/demo/mimbo2/">
				<div><input type="text" value="" name="s" id="s" /><input type="submit" id="searchsubmit" value="Search" class="button" /></div>
			</form>
		</div>
-->
	</div>

	<ul id="nav" class="clearfloat">
		<?php $plxShow->staticList('Accueil'); ?>
	</ul>



