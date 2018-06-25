<?php if (!defined('PLX_ROOT')) exit; ?>
    <!DOCTYPE html>
    <!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
    <!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
		<html lang="<?php $plxShow->defaultLang() ?>">
    <!--<![endif]-->

    <head>
		<meta charset="<?php $plxShow->charset('min'); ?>">
		<title><?php $plxShow->pageTitle(); ?></title>
		<?php $plxShow->meta('description') ?>
		<?php $plxShow->meta('keywords') ?>
		<?php $plxShow->meta('author') ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="<?php $plxShow->template(); ?>/images/favicon.png">
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/base.css">
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/vendor.min.css">
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/main.css">
		<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
        <script src="<?php $plxShow->template(); ?>/js/modernizr.js"></script>
	</head>

    <body>
		<header id="main-header">
            <div class="row">
                <div class="logo">
                    <a background: url("../images/logoK@2x.png") no-repeat center; href="."><?php $plxShow->pageTitle(); ?></a>
                </div>
                <nav id="nav-wrap">
                    <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                        <span class="menu-icon">Menu</span>
                    </a>
                    <a class="mobile-btn" href="#" title="Hide navigation">
                        <span class="menu-icon">Menu</span>
                    </a>
					<?php if($plxShow->mode()=='home') {
						echo '<ul id="nav" class="nav">
							<li><a class="smoothscroll" href="#hero">Accueil.</a></li>
							<li><a class="smoothscroll" href="#portfolio">Portfolio.</a></li>
							<li><a class="smoothscroll" href="#section1">Section1.</a></li>
							<li><a class="smoothscroll" href="#section2">Section2.</a></li>
							<li><a class="smoothscroll" href="#contact">Contact.</a></li>
						</ul>';
					}else{
					   echo '<ul id="nav" class="nav">
							<li><a class="smoothscroll" onclick="javascript:location.href=\'.\'">Accueil.</a></li>
							<li><a class="smoothscroll" onclick="javascript:location.href=\'index.php#portfolio\'">Portfolio.</a></li>
							<li><a class="smoothscroll" onclick="javascript:location.href=\'index.php#section1\'">Section1.</a></li>
							<li><a class="smoothscroll" onclick="javascript:location.href=\'index.php#section2\'">Section2.</a></li>
							<li><a class="smoothscroll" onclick="javascript:location.href=\'index.php#contact\'">Contact.</a></li>
						</ul>';
					} ?>
                </nav>
                <ul class="header-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </header>
