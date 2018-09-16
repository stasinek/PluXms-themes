<?php include(dirname(__FILE__).'/header.php'); ?>

</header>

	<div class="site-content">
		<div id="container" class="wrapper clear">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article id="post-57" class="post-container post-57 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-sticky category-uncategorized tag-sticky">
				<h2 class="entry-title">
					<?php $plxShow->artTitle('link'); ?>
				</h2>
				<div class="wider-web-top">
					<i class="fa fa-2x fa-caret-down"></i>
				</div>
				<figure>
					<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=570&h=255&crop-to-fit" class="attachment-large-thumb size-large-thumb wp-post-image" alt="" srcset="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=570&h=255&crop-to-fit"> 
				</figure>
				<div class="entry-info">
					<div class="entry-author vcard author fa fa-user">
						<a class="url fn n" href="<?php $plxShow->artUrl() ?>"><?php $plxShow->artCat() ?></a>
					</div>
					<div class="entry-standard fa fa-folder-open">
						<?php $plxShow->artTags() ?>
					</div>
				</div>

				<div class="entry-content">
					<p><?php $plxShow->artChapo(''); ?></p>
					<a class="button" href="<?php $plxShow->artUrl(); ?>">Lire la suite</a>
				</div>
				<!-- .entry-content -->

			</article>
		<?php endwhile; ?>


		</div>
		<div class="wrapper">
			<div class="page-navigation clear">
				<h3 class="screen-reader-text">Posts navigation</h3>
				<div class="nav-previous">
					<?php $plxShow->pagination(); ?>
				</div>
			</div>
		</div>
	</div>

 <?php include(dirname(__FILE__).'/footer.php'); ?>
