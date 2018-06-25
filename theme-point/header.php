<?php if (!defined('PLX_ROOT')) exit; ?>
	<!DOCTYPE html>
	<html lang="<?php $plxShow->defaultLang() ?>">
    <head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/images/favicon.png" />
	<link rel='stylesheet' id='point-style-css' href='<?php $plxShow->template(); ?>/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='point-style-css' href='<?php $plxShow->template(); ?>/css/styleEXTRA.css' type='text/css' media='all' />

    <link rel='stylesheet' id='theme-slug-fonts-css' href='//fonts.googleapis.com/css?family=Droid+Sans%3A400%2C700' type='text/css' media='all' />
	<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>

        <!--[if IE 7]>
			<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/wp-review-ie7.css">
		<![endif]-->
        <style type="text/css" id="custom-background-css">
            body.custom-background {
                background-color: ##e7e5e6;
            }
            
            @font-face {
                font-family: 'point';
                src: url('<?php $plxShow->template(); ?>/fonts/point.eot?29400515');
                src: url('<?php $plxShow->template(); ?>/fonts/point.eot?29400515#iefix') format('embedded-opentype'), url('<?php $plxShow->template(); ?>/fonts/point.woff?29400515') format('woff'), url('<?php $plxShow->template(); ?>/fonts/point.ttf?29400515') format('truetype'), url('<?php $plxShow->template(); ?>/fonts/point.svg?29400515#point') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            
            @font-face {
                font-family: 'font-icons';
                src: url('<?php $plxShow->template(); ?>/fonts/font-icons.eot');
                src: url('<?php $plxShow->template(); ?>/fonts/font-icons.eot') format('embedded-opentype'), url('<?php $plxShow->template(); ?>/fonts/font-icons.woff') format('woff'), url('<?php $plxShow->template(); ?>/fonts/font-icons.ttf') format('truetype'), url('<?php $plxShow->template(); ?>/fonts/font-icons.svg') format('svg');
                font-weight: normal;
                font-style: normal;
            }
        </style>

    </head>

    <body id="blog" class="home blog custom-background">
        <div class="main-container">
            <div class="trending-articles">
                <ul>
                    <?php $plxShow->lastArtList('
				<li class="trendingPost">
					<a href="#art_url" title="#art_title" rel="bookmark">#art_title</a>
				</li>'); ?>
                </ul>
            </div>

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <h1 id="logo" class="image-logo" itemprop="headline">
					<a href="./"><img src="<?php $plxShow->template(); ?>/images/logo.png" alt="Point"></a>
				</h1>
                    <a href="#" id="pull" class="toggle-mobile-menu">Menu</a>
                    <div class="primary-navigation">
                        <nav id="navigation" class="mobile-menu-wrapper" role="navigation">
                            <ul id="menu-menu" class="menu clearfix">
                                <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="menu-item  #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
                                    <?php $plxShow->pageBlog('<li class="menu-item  #static_status" id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="./">
												<?php $plxShow->lang('CATEGORIES'); ?>
											</a>
                                            <ul class="sub-menu">
                                                <?php $plxShow->catList('','
									<li class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="#cat_url">
											#cat_name
											<!--br /><span class="sub">Color, Layout more</span-->
										</a>
									</li>'); ?>
                                            </ul>
                                        </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <div class="header-bottom-second">
                <div id="header-widget-container">
                    <div class="widget-header">
                        <img src="http://demo.mythemeshop.com/point/wp-content/themes/point/images/728x90.gif" width="728" height="90"> </div>
                    <div class="widget-header-bottom-right">
                        <div class="textwidget">
                            <div class="topad">
                                <a href="" class="header-button">Téléchargez!</a>Le machin de votre choix...
                            </div>
                        </div>
                    </div>
                </div>
            </div>