<?php include(dirname(__FILE__).'/header.php'); ?>

<body id="top" class="fl-builder has-post-thumbnail is-singular not-front-page single single-format-standard single-post">
<style id='receptar-stylesheet-inline-css' type='text/css'>
	.entry-media { background-image: url('<?php $plxShow->lastArtList('#img_url',1,'','',$sort='random'); ?>'); }
	body{background-color:#f5f7f9}.site-header {background-color:rgba(0,0,0,0.2);color:#ffffff;}.not-scrolled.is-posts-list .site-header,.not-scrolled.paged .site-header {background-color:#2a2c2e;color:#ffffff;}.secondary {background-color:#1a1c1e;color:#9a9c9e;border-color:#3a3c3e;}.secondary-controls,.secondary h1,.secondary h2,.secondary h3,.secondary h4,.secondary h5,.secondary h6,.current-menu-item > a{color:#ffffff}.hamburger-item{background-color:#ffffff}.main-navigation a:hover,.current-menu-item > a{background-color:#3a3c3e}body,code{color:#6a6c6e}h1, h2, h3, h4, h5, h6,.h1, .h2, .h3, .h4, .h5, .h6{color:#1a1c1e}.site,.home .content-area,.posts .hentry{background-color:#ffffff}.site-content{border-color:#eaecee}hr,code,pre,.entry-meta-bottom{background-color:#eaecee}.site-content .pagination,.site-content .comments-area-wrapper {background-color:#2a2c2e;color:#9a9c9e;border-color:#3a3c3e;}.posts,.posts .entry-inner:after{background-color:#2a2c2e}.comments-area-wrapper h1,.comments-area-wrapper h2,.comments-area-wrapper h3,.comments-area-wrapper h4,.comments-area-wrapper h5,.comments-area-wrapper h6{color:#ffffff}.site-footer {background-color:#f5f7f9;color:#9a9c9e;}a,.accent-color{color:#e53739}mark,ins,.highlight,pre:before,.pagination .current,.button,button,form button,.fl-node-content button,input[type="button"],input[type="reset"],input[type="submit"],.post-navigation .post-title,.bypostauthor > .comment-body .comment-author:before,.comment-navigation a,.widget_calendar tbody a,.widget .tagcloud a:hover,body #infinite-handle span,.site-content div.sharedaddy .sd-content ul li a.sd-button:not(.no-text) {background-color:#e53739;color:#ffffff;}.site-content div.sharedaddy .sd-content ul li a.sd-button:not(.no-text){color:#ffffff !important}.infinite-loader .spinner > div > div{background:#e53739 !important}input:focus,select:focus,textarea:focus,.post-navigation .post-title,.widget .tagcloud a:hover{border-color:#e53739}mark,ins,.highlight {-webkit-box-shadow:.38em 0 0 #e53739, -.38em 0 0 #e53739;  box-shadow:.38em 0 0 #e53739, -.38em 0 0 #e53739;}@media only screen and (max-width:960px) {.site-header{background-color:#2a2c2e}}
</style>

<div id="page" class="hfeed site">
        <div class="site-inner">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <h1 class="site-title logo type-text">
						<a href="." title="<?php $plxShow->mainTitle(); ?> | <?php $plxShow->subTitle(); ?>">
							<span class="text-logo">
								<?php $plxShow->mainTitle(); ?>
							</span>
						</a>
					</h1>
                    <h2 class="site-description">
						<?php $plxShow->subTitle(); ?>
					</h2>
				</div>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				
                <div id="site-header-widgets" class="widget-area site-header-widgets">
					<?php	
					$placeholder = '';
					# récupération d'une instance de plxMotor
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
					<div class="searchform">
						<form class="form-search" action="<?php echo $plxMotor->urlRewrite('?'.$plxPlugin->getParam('url')) ?>" method="post">
								<label for="search-field" class="screen-reader-text">Recherche</label>
								<input type="search"  placeholder="Mot-clé" class="search-field" name="searchfield" value="<?php echo $searchword ?>" />
						</form>
                </div>

            </header>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<article  class=" post type-post  format-standard has-post-thumbnail hentry  static" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">
			<div class="entry-media">
				<figure class="post-thumbnail" itemprop="image">
				<img width="960" height="640" src="<?php $plxShow->lastArtList('#img_url',1,'',$sort='random'); ?>" class="attachment-receptar-featured size-receptar-featured wp-post-image" alt="meals-668482_1920" srcset="<?php $plxShow->lastArtList('#img_url',1,'',$sort='random'); ?>" />
				</figure>
			</div>
			<div class="entry-inner">
				<header class="entry-header">
					<h1 class="entry-title" itemprop="name"><?php $plxShow->staticTitle(); ?></h1>
					<div class="entry-category">
						<span class="cat-links entry-meta-element"></span>
					 </div>
				 </header>
				 
				<div class="entry-content" >
					<div class="fl-rich-text">
						<?php $plxShow->staticContent(); ?>
					</div>
				</div>
			</div>
		</article>
	</div><!-- /#primary -->
</div><!-- /#content -->


<?php include(dirname(__FILE__).'/footer.php'); ?>
