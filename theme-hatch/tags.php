<?php include(dirname(__FILE__).'/header.php'); ?>
	<div id="main"class="archive">
        <div id="content">
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
            <div class="hfeed" style="max-width: 640px;">
				<h1><?php $plxShow->lang('TAGS'); ?></h1>
				<h2><?php $plxShow->tagName(); ?></h2>
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







	<main class="main grid" role="main">

		<section class="col sml-12 med-8">

			<ul class="repertory menu breadcrumb">
				<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
				<li><?php $plxShow->tagName(); ?></li>	
			</ul>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<small>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?>
					</small>
				</header>

				<section>
					<?php $plxShow->artThumbnail(); ?>				
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<small>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</small>
				</footer>

			</article>

			<?php endwhile; ?>

			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>

			<span>
				<?php $plxShow->tagFeed() ?>
			</span>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
