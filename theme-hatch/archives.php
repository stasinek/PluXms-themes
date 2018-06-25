<?php include(dirname(__FILE__).'/header.php'); ?>
	<div id="main"class="archive">
        <div id="content">
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
            <div class="hfeed" style="max-width: 640px;">
			<h1><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES')) ?></h1>
			<h2><?php echo plxDate::formatDate($plxShow->plxMotor->cible, ' #month #num_year(4)') ?></h2>
			<hr>
				<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<h2>
							<?php $plxShow->artTitle('link'); ?>
						</h2>
						<small>
							<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
							<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
							<?php $plxShow->artNbCom(); ?>
						</small>

					<section>
						<?php $plxShow->artChapo(); ?>
					</section>

					<small>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</small>

				<?php endwhile; ?>

			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>

			<span>
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</span>
            </div>
        </div>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?> 