<?php include(dirname(__FILE__).'/header.php'); ?>
<body id="top" class="blog fl-builder has-featured-posts home is-not-singular">
    <div id="page" class="hfeed site">
        <div class="site-inner">
            <header id="masthead" class="site-header" role="banner"  itemscope >
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
			<div id="site-banner" class="site-banner enable-slider">
				<div class="site-banner-inner">
					<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<article  class=" post type-post status-publish format-standard has-post-thumbnail hentry" role="article" id="post-<?php echo $plxShow->artId(); ?>">
							<div class="site-banner-media">
								<figure class="site-banner-thumbnail" title="A very delicious blog">
									<img width="1920" height="640" src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=1920&h=640&crop-to-fit" class="attachment-receptar-banner size-receptar-banner wp-post-image" alt="fruits-562357_1920" />
								</figure>
							</div>
							<div class="site-banner-header">
								<h1 class="entry-title">
									<a href="<?php $plxShow->artUrl(); ?>" class="highlight"><?php $plxShow->artTitle(); ?></a>
								</h1>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
		   </div>
			<div id="content" class="site-content">
				<div id="primary" class="content-area">
						<div id="posts" class="posts posts-list clearfix">
							<?php $plxShow->lastArtList('
							<article id="post-375" class=" post type-post format-standard  hentry">
								<div class="entry-media">
									<figure class="post-thumbnail">
										<a href="#art_url" title="Beaver Builder post">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=480&h=640&crop-to-fit" class="attachment-thumbnail size-thumbnail" alt="#img_alt" /></a>
									</figure>
								</div>
								<div class="entry-inner">
									<div class="entry-inner-content">
										<header class="entry-header">
											<h1 class="entry-title">
											<a href="#art_url">#art_title</a></h1></header>
										<div class="entry-content">
											<p class="post-excerpt">#art_chapo</p>
											<div class="link-more">
											<a href="#art_url">Lire la suite<span class="screen-reader-text">#art_title</span>&hellip;</a></div>
										</div>
									</div>
								</div>
							</article>'); ?>
						</div>
						<!--div class="pagination">
							<span class='page-numbers current'>1</span>
							<a class='page-numbers' href='http://themedemos.webmandesign.eu/receptar/page/2/'>2</a>
							<a class="next page-numbers" href="http://themedemos.webmandesign.eu/receptar/page/2/">&raquo;</a>
						</div-->
					<!-- /#main -->
				</div>
			</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
