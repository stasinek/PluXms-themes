<?php include(dirname(__FILE__).'/header.php'); ?>

<body id="top" class="fl-builder has-post-thumbnail is-singular not-front-page single single-format-standard single-post">
<style id='receptar-stylesheet-inline-css' type='text/css'>
	.entry-media { background-image: url('<?php $plxShow->artThumbnail('#img_url'); ?>'); }
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


<article  class=" post type-post  format-standard has-post-thumbnail hentry "  role="article" id="post-<?php echo $plxShow->artId(); ?>">

	
<div class="entry-media">

<figure class="post-thumbnail" itemprop="image">
<img width="960" height="640" src="<?php $plxShow->artThumbnail('#img_url'); ?>" class="attachment-receptar-featured size-receptar-featured wp-post-image" alt="meals-668482_1920" />
</figure>

</div>

<div class="entry-inner">
	<header class="entry-header">
	<h1 class="entry-title" itemprop="name"><?php $plxShow->artTitle(); ?></h1>
	<div class="entry-category">
	<span class="cat-links entry-meta-element">
	<?php $plxShow->artCat(); ?>
	</span>
	 </div>
	 </header>
	 
	 
	 
<div class="fl-module-content fl-node-content">
	<div class="fl-rich-text">
	<?php $plxShow->artContent(); ?>
	</div>
	</div>
	</div>

		
	</div>

	<div class="sharedaddy sd-sharing-enabled">
		<div class="sd-content"><ul><li class="share-facebook">
		<a rel="nofollow" data-shared="sharing-facebook-375" class="share-facebook sd-button share-icon" href="http://themedemos.webmandesign.eu/receptar/beaver-builder-post/?share=facebook" target="_blank" title="Click to share on Facebook">
		<span>Facebook</span></a></li><li class="share-twitter">
		<a rel="nofollow" data-shared="sharing-twitter-375" class="share-twitter sd-button share-icon" href="http://themedemos.webmandesign.eu/receptar/beaver-builder-post/?share=twitter" target="_blank" title="Click to share on Twitter">
		<span>Twitter</span></a></li><li class="share-google-plus-1">
		<a rel="nofollow" data-shared="sharing-google-375" class="share-google-plus-1 sd-button share-icon" href="http://themedemos.webmandesign.eu/receptar/beaver-builder-post/?share=google-plus-1" target="_blank" title="Click to share on Google+">
		<span>Google</span></a></li>
		<li class="share-pinterest"><a rel="nofollow" data-shared="sharing-pinterest-375" class="share-pinterest sd-button share-icon" href="http://themedemos.webmandesign.eu/receptar/beaver-builder-post/?share=pinterest" target="_blank" title="Click to share on Pinterest">
		<span>Pinterest</span></a></li><li class="share-press-this">
		<a rel="nofollow" data-shared="" class="share-press-this sd-button share-icon" href="http://themedemos.webmandesign.eu/receptar/beaver-builder-post/?share=press-this" target="_blank" title="Click to Press This!">
		<span>Press This</span></a></li><li class="share-end"></li></ul></div>
	</div>


<div class="entry-meta entry-meta-bottom">
	<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>" class="entry-date entry-meta-element published" title="<?php $plxShow->artDate(); ?>" itemprop="datePublished">
		<?php $plxShow->artDate('#num_day #num_month #num_year(4)'); ?>
	</time> 

	<span class="author vcard entry-meta-element">
		<?php $plxShow->artAuthor(); ?>
	</span> 
	<span class="tags-links entry-meta-element" itemprop="keywords">
		<?php $plxShow->artTags(); ?>
	</span>
</div>


<?php include(dirname(__FILE__).'/commentaires.php'); ?>

</div>

</article>
</div>
</div>


<?php include(dirname(__FILE__).'/footer.php'); ?>
