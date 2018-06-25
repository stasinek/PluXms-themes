<?php if (!defined('PLX_ROOT')) exit; ?>

    <html lang="<?php $plxShow->defaultLang() ?>">

    <head>
        <meta charset="<?php $plxShow->charset('min'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php $plxShow->pageTitle(); ?>
        </title>
        <?php $plxShow->meta('description') ?>
            <?php $plxShow->meta('keywords') ?>
                <?php $plxShow->meta('author') ?>
                    <link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
                    <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen" />
                    <?php $plxShow->templateCss() ?>
                        <?php $plxShow->pluginsCss() ?>
                            <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
                            <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
                            <link rel='stylesheet' id='contact-form-7-css' href='<?php $plxShow->template(); ?>/css/styles.css?ver=4.7' type='text/css' media='all' />
                            <link rel='stylesheet' id='masonic-style-css' href='<?php $plxShow->template(); ?>/css/style.css' type='text/css' media='all' />
                            <link rel='stylesheet' id='masonic-google-fonts-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300italic%2C700&#038;ver=62507ce4675b9502c672a5fa12610b86' type='text/css' media='all' />
                            <link rel='stylesheet' id='masonic-font-awesome-css' href='<?php $plxShow->template(); ?>/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
                            <link rel='stylesheet' id='jetpack_css-css' href='<?php $plxShow->template(); ?>/css/jetpack.css?ver=4.8.2' type='text/css' media='all' />
                             <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/frontend.js?ver=6.1.7'></script>
                            <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.js?ver=1.12.4'></script>
                            <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery-migrate.min.js?ver=1.4.1'></script>
                            <!--[if lte IE 8]>
	<script type='text/javascript' src='https://demo.themegrill.com/masonic/wp-content/themes/masonic/js/html5shiv.js?ver=3.7.3'></script>
	<![endif]-->
                            <link rel='https://api.w.org/' href='https://demo.themegrill.com/masonic/wp-json/' />
                            <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.themegrill.com/masonic/xmlrpc.php?rsd" />
                            <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.themegrill.com/masonic/wp-includes/wlwmanifest.xml" />

                            <link rel='shortlink' href='https://wp.me/5SZ4W' />

                            <link rel='dns-prefetch' href='//v0.wordpress.com'>
                            <style type='text/css'>
                                img#wpstats {
                                    display: none
                                }
                            </style>
                            <style type="text/css"></style>
                            <style type="text/css">
                                .recentcomments a {
                                    display: inline !important;
                                    padding: 0 !important;
                                    margin: 0 !important;
                                }
                            </style>

                            <!-- Jetpack Open Graph Tags -->
                            <meta property="og:type" content="website" />
                            <meta property="og:title" content="Masonic" />
                            <meta property="og:description" content="Just another ThemeGrill Demo site" />
                            <meta property="og:url" content="https://demo.themegrill.com/masonic/" />
                            <meta property="og:site_name" content="Masonic" />
                            <meta property="og:image" content="https://s0.wp.com/i/blank.jpg" />
                            <meta property="og:locale" content="en_US" />
    </head>

    <body data-rsssl=1 class="home blog group-blog">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <header id="masthead" class="site-header clear">

                <div class="header-image">
                    <figure><img src="https://demo.themegrill.com/masonic/wp-content/themes/masonic/img/header.jpg" width="1350" height="500" alt="">
                        <div class="angled-background"></div>
                    </figure>
                </div>
                <!-- .header-image -->

                <div class="site-branding clear">
                    <div class="wrapper site-header-text clear">

                        <div class="logo-img-holder ">

                        </div>

                        <div class="main-header">
                            <h1 class="site-title"><a href="https://demo.themegrill.com/masonic/" rel="home"><?php $plxShow->mainTitle('link'); ?></a></h1>
                            <p class="site-description">
                                <?php $plxShow->subTitle(); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- .site-branding -->

                <nav class="navigation clear">
                    <input type="checkbox" id="masonic-toggle" name="masonic-toggle" />
                    <label for="masonic-toggle" id="masonic-toggle-label" class="fa fa-navicon fa-2x"></label>
                    <div class="wrapper clear" id="masonic">
                        <ul id="menu-primary-menu" class="menu wrapper clear">
							<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
							<?php $plxShow->pageBlog('<li class="#page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                        </ul>
                        <!--div id="sb-search" class="sb-search">
                            <span class="sb-icon-search"><i class="fa fa-search"></i></span>
                        </div-->
                    </div>
                    <!--div id="sb-search-res" class="sb-search-res">
                        <span class="sb-icon-search"><i class="fa fa-search"></i></span>
                    </div-->
                </nav>
                <!--div class="inner-wrap masonic-search-toggle">
                    <form role="search" method="get" class="searchform clear" action="https://demo.themegrill.com/masonic/">
                        <div class="masonic-search">
                            <label class="screen-reader-text">Search for:</label>
                            <input type="text" value="" name="s" placeholder="Type and hit enter..." />
                        </div>
                    </form>
                </div-->

