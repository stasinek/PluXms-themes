<?php include(dirname(__FILE__).'/header.php'); ?>
				<div class="featuredBox">

			<?php 
			$i=1;
			while($plxShow->plxMotor->plxRecord_arts->loop()): 
				switch ($i) {
					case 1: ?>
						<div class="firstpost excerpt">
							<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>" rel="nofollow" id="first-thumbnail">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=620&h=315&crop-to-fit" class="attachment-bigthumb size-bigthumb wp-post-image" alt="q3" title="" />																
								<p class="featured-excerpt">
								<span class="featured-title"><?php $plxShow->artTitle(); ?></span>
								<span class="f-excerpt"><?php $plxShow->artChapo(''); ?></span>
								</p>
							</a>
						</div>
						<?php break;
					case 2: ?>
						<div class="secondpost excerpt">
							<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>" rel="nofollow" id="second-thumbnail">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=300&h=200&crop-to-fit" class="attachment-mediumthumb size-mediumthumb wp-post-image" alt="wallpaper-1812167" title="" />																
								<p class="featured-excerpt">
								<span class="featured-title"><?php $plxShow->artTitle(); ?></span>
								</p>
							</a>
						</div>
					<?php break;
					case 3: ?>
						<div class="thirdpost excerpt">
							<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>" rel="nofollow" id="third-thumbnail">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=140&h=100&crop-to-fit" class="attachment-smallthumb size-smallthumb wp-post-image" alt="wallpaper-2386176" title="" />															
								<p class="featured-excerpt">
								<span class="featured-title"><?php $plxShow->artTitle(); ?></span>
								</p>
							</a>
						</div>
					<?php break;
					case 4: ?>

						<div class="thirdpost excerpt">
							<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>" rel="nofollow" id="third-thumbnail">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=140&h=100&crop-to-fit" class="attachment-smallthumb size-smallthumb wp-post-image" alt="wallpaper-2415699" title="" />							
								<p class="featured-excerpt">
								<span class="featured-title"><?php $plxShow->artTitle(); ?></span>
								</p>
							</a>
						</div>
					<?php break; 
				} 
				$i=$i+1;
			endwhile; ?>
		</div>
			
<div id="page" class="home-page">
	<div class="content">
		<div class="article">
			<h3 class="frontTitle">
				<div class="latest"><?php $plxShow->lang('LATEST_ARTICLES'); ?></div>
			</h3>
			<?php $plxShow->lastArtList('
			<article class="pexcerpt0 post excerpt">
				<a href="#art_url" title="#img_title" rel="nofollow" id="featured-thumbnail">
					<div class="featured-thumbnail">
						<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=220&h=162&crop-to-fit" class="attachment-featured size-featured wp-post-image" alt="#img_alt" title="" />
					</div>
					<!--div class="featured-cat">
						General
					</div-->
				</a>
				<header>						
					<h2 class="title">
						<a href="#art_url" title="#art_title" rel="bookmark">#art_title</a>
					</h2>
					<div class="post-info">
						<span class="theauthor">
						<a href="#art_url" title="Posts by MyThemeShop" rel="author">
							#art_author
						</a>
						</span> | 
						<span class="thetime">#num_day #month #num_year(4)</span></div>
				</header>
				<div class="post-content image-caption-format-1">
					#art_chapo
				</div>
				<span class="readMore">
					<a href="#art_url" title="#art_title">
						Lire la suite
					</a>
				</span>
			</article>',4); ?>


			
</div><!-- .article -->
		
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
			</div><!-- .content -->
</div><!-- #page -->
<?php include(dirname(__FILE__).'/footer.php'); ?>
