<?php if (!defined('PLX_ROOT')) exit; ?>

    <!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>"><head>

	<title><?php $plxShow->pageTitle(); ?></title>
	<meta charset="<?php $plxShow->charset('min'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>

    <link rel='stylesheet' id='wpex-font-awesome-css' href='<?php $plxShow->template(); ?>/css/font-awesome.min.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='wpex-responsive-css' href='<?php $plxShow->template(); ?>/css/responsive.css?ver=2.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='wpex-google-font-noto-serif-css' href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700%2C400italic%2C700italic&#038;ver=4.8' type='text/css' media='all' />
    <link rel='stylesheet' id='wpex-google-font-source-sans-pro-css' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700%2C400italic%2C600italic%2C700italic&#038;subset=latin%2Cvietnamese%2Clatin-ext&#038;ver=4.8' type='text/css' media='all' />
    
	<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.js'></script>
    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery-migrate.min.js'></script>

</head><body class="home blog symple-shortcodes  symple-shortcodes-responsive">

        <div id="site-navigation-wrap">

            <div id="sidr-close">
                <a href="#sidr-close" class="toggle-sidr-close"></a>
            </div>

            <nav id="site-navigation" class="navigation main-navigation clr container" role="navigation">

                <a href="#sidr-main" id="navigation-toggle"><span class="fa fa-bars"></span>MENU</a>

                <div class="menu-main-container">
                    <ul id="menu-main" class="dropdown-menu sf-menu">
    					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="menu-item #static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
                    </ul>
                </div>
            </nav>

		<!-- #site-navigation -->
        </div>

        <!-- #site-navigation-wrap -->
        <div id="header-wrap" class="clr">

            <header id="header" class="site-header container clr" role="banner">

                <div class="site-branding clr">

                    <div id="logo" class="clr">

                        <div class="site-text-logo clr">
                            <?php $plxShow->mainTitle('link'); ?>
                            <div class="site-description"><?php $plxShow->subTitle(); ?></div>
                       </div>
 
                    </div>
                </div>
                <aside id="header-aside" class="clr">

                    <a href="" title="Twitter"><span class="fa fa-twitter"></span></a>

                    <a href="" title="Facebook"><span class="fa fa-facebook"></span></a>

                    <a href="" title="Googleplus"><span class="fa fa-google-plus"></span></a>

                    <a href="" title="Linkedin"><span class="fa fa-linkedin"></span></a>

                    <a href="" title="Pinterest"><span class="fa fa-pinterest"></span></a>

                    <a href="" title="Vk"><span class="fa fa-vk"></span></a>

                    <a href="" title="Instagram"><span class="fa fa-instagram"></span></a>

                    <a href="" title="Rss"><span class="fa fa-rss"></span></a>

                </aside>
                <!-- .header-aside -->
            
			</header>
			<!-- #header -->
        
		</div>
        <!-- #site-navigation-wrap -->
 