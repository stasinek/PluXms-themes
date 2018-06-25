<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/assets/stylesheets/master.css" />
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/assets/stylesheets/ie8.css" />
	<![endif]-->
	<!--[if !IE]><!-->
	<script src="<?php $plxShow->template(); ?>/assets/javascripts/iscroll.js"></script>
	<!--<![endif]-->
	<script src="<?php $plxShow->template(); ?>/assets/javascripts/jquery.js"></script>
	<script src="<?php $plxShow->template(); ?>/assets/javascripts/master.js"></script>
	
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	
</head>
<body>
<div id="main" class="abs">

