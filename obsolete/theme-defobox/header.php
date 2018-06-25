<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<!-- jQuery -->
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/fancyBox/lib/jquery-1.10.1.min.js"></script>

	<!-- plugin mousewheel (optionnel) -->
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- fancyBox -->
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Button helper (optionnel) -->
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Thumbnail helper (optionnel) -->
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Media helper (optionnel) -->
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>	
</head>

<body id="top">

<div class="container">

	<header class="header sml-text-center med-text-left" role="banner">
		<h1 class="no-margin"><?php $plxShow->mainTitle('link'); ?></h1>
		<h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>
	</header>

	<nav class="nav" role="navigation">
		<div class="responsive-menu">
			<label for="menu"><?php $plxShow->lang('MENU'); ?></label>
			<input type="checkbox" id="menu">
			<ul class="menu expanded">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
			</ul>
		</div>
	</nav>
