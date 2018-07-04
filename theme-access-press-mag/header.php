<?php if (!defined('PLX_ROOT')) exit; ?>
	<!DOCTYPE html>
	<html lang="<?php $plxShow->defaultLang() ?>">
		<head>
			<meta charset="<?php $plxShow->charset('min'); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="profile" href="http://gmpg.org/xfn/11" />
			<title><?php $plxShow->pageTitle(); ?></title>
			<?php $plxShow->meta('description') ?>
			<?php $plxShow->meta('keywords') ?>
			<?php $plxShow->meta('author') ?>
			<link rel="icon" href="<?php $plxShow->template(); ?>/css/images/favicon.png" />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/font-awesome.min.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/frontend.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/animate.css' type='text/css' media='all' />
			<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.0.7' type='text/css' media='all' />
			<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans&#038;ver=4.4.2' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/jquery.bxslider.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/fonts.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/styles.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/ticker-style.css' type='text/css' media='all' />
			<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%2C300%7COswald%3A400%2C700%2C300%7CDosis%3A400%2C300%2C500%2C600%2C700&#038;ver=4.4.2' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/style.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/responsive.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/nivo-lightbox.css' type='text/css' media='all' />
			<link rel='stylesheet' href='<?php $plxShow->template(); ?>/css/styles.min.css' type='text/css' media='all' />

			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.js?ver=1.11.3'></script>
			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery-migrate.min.js?ver=1.2.1'></script>
			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/frontend.js?ver=1.5.0'></script>
			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.bxslider.min.js?ver=1.4.2'></script>
			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/frontend.js?ver=1.4.2'></script>
			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/wow.min.js?ver=1.0.1'></script>
			<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/custom-scripts.js?ver=1.0.1'></script>

			<script type="text/javascript">
				jQuery(function($) {
					if ($('body').hasClass('rtl')) {
						var directionClass = 'rtl';
					} else {
						var directionClass = 'ltr';
					}

					/*--------------For Home page slider-------------------*/

					$("#homeslider").bxSlider({
						mode: 'horizontal',
						controls: true,
						pager: false,
						pause: 5000,
						speed: 1500,
						auto: true
					});

					$("#homeslider-mobile").bxSlider({
						mode: 'horizontal',
						controls: true,
						pager: false,
						pause: 5000,
						speed: 1000,
						auto: false
					});

					/*--------------For news ticker----------------*/

					$('#apmag-news').ticker({
						speed: 0.10,
						feedType: 'xml',
						displayType: 'reveal',
						htmlFeed: true,
						debugMode: true,
						fadeInSpeed: 600,
						//displayType: 'fade',
						pauseOnItems: 4000,
						direction: directionClass,
						titleText: '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $plxShow->lang('LATEST_ARTICLES'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
					});

				});
			</script>
			<style type="text/css">
				.recentcomments a {
					display: inline !important;
					padding: 0 !important;
					margin: 0 !important;
				}
			</style>
			<style type="text/css">
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
				}
			</style>
			<style type="text/css">
				/* Custom Styles for Box 379 */
				
				.stb-379 {
					background: #edf9ff !important;
					border-color: #dd7575 !important;
					border-width: 1px !important;
					max-width: 401px;
					@media ( max-width: 401px) {
						#stb-379 {
							display: none !important;
						}
					}
				}
				
				.stb {
					padding: 0px;
				}
			</style>

		</head>

		<body class="home page page-id-10 page-template page-template-home-page page-template-home-page-php page-right-sidebar fullwidth-layout group-blog">
			<div id="page" class="hfeed site">

				<header id="masthead" class="site-header">

					<div class="top-menu-wrapper has_menu clearfix">
						<div class="apmag-container">
							<div class="current-date">
								<?php setlocale(LC_ALL, 'fr_FR').': '; 
								echo iconv('ISO-8859-1', 'UTF-8', strftime('%A, %e  %B  %Y', time()));
								?></div>

							<nav id="top-navigation" class="top-main-navigation">
								<button class="menu-toggle hide" aria-controls="menu" aria-expanded="false">Top Menu</button>
								<div class="top_menu_left">
									<ul id="menu-top-menu" class="menu">
										<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="menu-item #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
											<?php $plxShow->pageBlog('<li class="menu-item" id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
									</ul>
								</div>
							</nav>
							<!-- #site-navigation -->

							<nav id="top-right-navigation" class="top-right-main-navigation">
								<button class="menu-toggle hide" aria-controls="top-right-menu" aria-expanded="false">Top Menu Right</button>
								<div class="top_menu_right">
									<ul id="menu-top-menu-right" class="menu">
										<li id="menu-item-68" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-68">
										<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
									</ul>
								</div>
							</nav>
							<!-- #site-navigation -->
						</div>
						<!-- .apmag-container -->
					</div>
					<!-- .top-menu-wrapper -->

					<div class="apmag-news-ticker">
						<div class="apmag-container">
							<ul id="apmag-news" class="js-hidden">
								<?php $plxShow->lastArtList('
								<li class="news-item"><a href="#art_url">#art_title</a></li>',3); ?>
							</ul>
						</div>
						<!-- .apmag-container -->
					</div>
					<!-- .apmag-news-ticker -->

					<div class="logo-ad-wrapper clearfix">
						<div class="apmag-container">
							<div class="site-branding">
								<div class="sitelogo-wrap">
									<a href=".">
										<img src="<?php $plxShow->template(); ?>/css/images/mag-logo.png" alt="Accesspress Mag" title="Accesspress Mag" />
									</a>
									<meta itemprop="name" content="Accesspress Mag Demo" />
								</div>
								<!-- .sitetext-wrap -->
							</div>
							<!-- .site-branding -->

							<div class="header-ad">
								<aside id="text-14" class="widget widget_text">
									<div class="textwidget">
										<a href="javascript:void(0)">
										<img src="http://demo.accesspressthemes.com/accesspress-mag/wp-content/uploads/2015/08/fashion-banner.png" alt="Banner ad" /></a>
									</div>
								</aside>
							</div>
							<!--header ad-->

						</div>
						<!-- .apmag-container -->
					</div>
					<!-- .logo-ad-wrapper -->

					
					
					<nav id="site-navigation" class="main-navigation">
						<div class="apmag-container">
							<div class="nav-wrapper">
								<div class="nav-toggle hide">
									<span> </span>
									<span> </span>
									<span> </span>
								</div>
								<div class="menu">
									<ul id="menu-primary-menu" class="menu">
										<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
										<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
									</ul>
								</div>
							</div>
							
							<div class="search-icon">
								<i class="fa fa-search"></i>
								<div class="ak-search">
									<div class="close">×</div>
									<?php	
									$placeholder = '';
									$plxMotor = plxMotor::getInstance();
									$plxPlugin = $plxMotor->plxPlugins->getInstance('plxMySearch');
									$searchword = '';
									if(!empty($_POST['searchfield'])) {
										$searchword = plxUtils::strCheck(plxUtils::unSlash($_POST['searchfield']));
									}
									if($plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang)!='') {
										$placeholder=' placeholder="'.$plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang).'"';
									}
									?>
									
									<form action="<?php echo $plxMotor->urlRewrite('?'.$plxPlugin->getParam('url')) ?>" method="post" class="search-form">
											<label>
												<span class="screen-reader-text">Rechercher:</span>
												<input type="text" title="Rechercher" name="searchfield"  value="" placeholder="Rechercher..." class="search-field">
											</label>
											<input type="submit" value="<?php echo $plxPlugin->getParam('frmLibButton_'.$plxPlugin->default_lang) ?>" class="search-submit">
										 </form>							 
									 
									 <div class="overlay-search"> </div> 
								</div>
							</div>
							
							<div class="random-post">
								<?php $plxShow->lastArtList('<a class="#art_status" href="#art_url" title="#art_title"><i class="fa fa-random"></i></a></li>',1,$cat_id='',$ending='',$sort='random'); ?>
							 </div><!-- .random-post -->
						</div><!-- .apmag-container -->
					</nav>
				
				</header>
