<?php include(dirname(__FILE__).'/header.php'); ?>

<div id="main"  class="wordpress ltr en_US parent-theme multisite blog-5 y2016 m04 d30 h21 saturday logged-out custom-header home blog">
	<div id="masthead">
		<div id="author-bio">
			<?php $plxShow->lastArtList('#art_content',1,'1'); ?>
		</div>
		<div id="header-banner" role="banner">
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=640&h=360&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" />
				<?php break;
			endwhile; ?>
		</div>
	</div>
	<div id="content">
		<div class="hfeed">
			<?php $plxShow->lastArtList('
			<div class="hentry post">
				<a href="index.php?categorie1" title="#img_alt">
					<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=220&h=150&crop-to-fit" alt="#img_alt" class="Thumbnail thumbnail archive-thumbnail featured" width="220" height="150" />
				</a>
			</div>',1,'1'); ?>
			<?php $plxShow->lastArtList('
			<div class="hentry post">
				<a href="index.php?categorie1" title="#img_alt">
					<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=220&h=150&crop-to-fit" alt="#img_alt" class="Thumbnail thumbnail archive-thumbnail featured" width="220" height="150" />
				</a>
			</div>',1,'1'); ?>
			<?php $plxShow->lastArtList('
			<div class="hentry post">
				<a href="index.php?categorie1" title="#img_alt">
					<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=220&h=150&crop-to-fit" alt="#img_alt" class="Thumbnail thumbnail archive-thumbnail featured" width="220" height="150" />
				</a>
			</div>',1,'1'); ?>
			<?php $plxShow->lastArtList('
			<div class="hentry post last">
				<a href="index.php?categorie1" title="#img_alt">
					<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=220&h=150&crop-to-fit" alt="#img_alt" class="Thumbnail thumbnail archive-thumbnail featured" width="220" height="150" />
				</a>
			</div>',1,'1'); ?>
		</div>		<!-- .hfeed -->
	</div>	<!-- #content -->
</div>	<!-- #main -->

<?php include(dirname(__FILE__).'/footer.php'); ?>