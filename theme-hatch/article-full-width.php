<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="main" class=" ltr en_US  singular singular-post ">
<div id="content">
	<div class="hfeed">
		<div id="post-57" class="hentry post">
			<div class="post-content">
				<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=640&h=360&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" class="single-thumbnail featured">
				<div class="post-aside">
					<h1 class="post-title entry-title"><?php $plxShow->artTitle(); ?></h1>
					<div class="byline byline-date">Date:
						<time class="published" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>" title="<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
					</div>
					<div class="byline byline-author">
						<?php $plxShow->lang('WRITTEN_BY'); ?>: 
						<span class="author vcard">
							<?php $plxShow->artAuthor() ?>
						</span>
					</div>
					<div class="byline byline-ategory">
						<?php $plxShow->lang('CLASSIFIED_IN') ?>: <span class="category"><?php $plxShow->artCat() ?></span>
					</div>
					<div class="entry-meta">
						<span class="post_tag">
							<span class="before"><?php $plxShow->lang('TAGS') ?>: </span>
							<?php $plxShow->artTags() ?>
						</span>
					</div>
					<?php $plxShow->artChapo(''); ?>
			
				</div>
				<hr>
				
				<div class="entry-content">
						<?php $plxShow->artContent('false'); ?>
						<?php include(dirname(__FILE__).'/commentaires.php'); ?>
						<div class="gallery">
							<div class="gallery-row gallery-col-6 gallery-clear">
								<?php $plxShow->lastArtList('
								<figure class="gallery-item col-6">
									<div class="gallery-icon ">
										<a href="#art_url">
											<img width="150" height="150" src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=150&h=150&crop-to-fit" class="attachment-thumbnail" alt="Depositphotos_4292694_XL">
										</a>
									</div>
								</figure>',8,ltrim($plxShow->plxMotor->plxRecord_arts->f('categorie'),'home,')); ?>
							</div>
					</div>
				</div>
			</div>
		</div><!-- .hentry -->
	</div><!-- .hfeed -->

	<?php include(dirname(__FILE__).'/footer.php'); ?>
