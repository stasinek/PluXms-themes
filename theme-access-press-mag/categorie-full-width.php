<?php include(dirname(__FILE__).'/header.php'); ?>

<div id="content" class="site-content">

	<div class="apmag-container">
		<div id="accesspres-mag-breadcrumbs" class="clearfix"><span class="bread-you">Vous êtes ici</span>
			<div class="ak-container">
				<a href=".">
					<?php echo $plxShow->getLang('HOME'); ?>
				</a>
				<span class="bread_arrow"> > </span> 
				<span class="current">
					<?php $plxShow->catName(); ?>
				</span>
			</div>
		</div>
		<div id="primary" class="content-area">
			<header class="page-header">
				<h1 class="page-title"><span><?php $plxShow->catName(); ?></span></h1>			
			</header><!-- .page-header -->

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<article class="post">
					<header class="entry-header">
						<h1 class="entry-title">
							<?php $plxShow->artTitle('link'); ?>
						</h1>
						<div class="entry-meta">
							<ul class="post-categories">
								<?php $plxShow->artCat() ?>
							</ul>
							<span class="byline">
								<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
							</span> - 
							<span class="posted-on">
								<time class="entry-date published" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
									<?php $plxShow->artDate('#num #num_month #num_year(4)'); ?>
								</time>
							</span>
							<span class="comment_count">
								<i class="fa fa-comments"></i><?php $plxShow->artNbCom(); ?>
							</span>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<div class="post-image non-zoomin">
							<a href="<?php $plxShow->artThumbnail('#art_url'); ?>">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=1132&h=509&crop-to-fit" alt="" />
							</a>
							<a class="big-image-overlay" href="<?php $plxShow->artThumbnail('#img_url'); ?>">
							<i class="fa fa-external-link"></i></a>
						</div>
						<p><?php $plxShow->artChapo(); ?></p>

					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php endwhile; ?>

				<nav class="pagination text-center">
					<?php $plxShow->pagination(); ?>
				</nav>

				<span>
					<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
				</span>

		</div><!-- #primary -->

			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		</div><!-- #primary -->
	</div><!-- #primary -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
