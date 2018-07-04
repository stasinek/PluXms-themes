<?php include(dirname(__FILE__).'/header.php'); ?>
	
	<div class="article static" role="article" id="fh5co-main static-page-<?php echo $plxShow->staticId(); ?>">

		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="intro-lead"><?php $plxShow->lang('TAGS'); ?> : <?php $plxShow->tagName(); ?></h2>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-content">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							
							<?php include(dirname(__FILE__).'/sidebar.php'); ?>
							
							<div class="col-md-9 col-md-pull-3">
								<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
									<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">
										<header>
											<h1>
												<?php $plxShow->artTitle('link'); ?>
											</h1>
											<small>
												<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
												<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
											</small>
										</header>
										<br>
										<img src="<?php $plxShow->artThumbnail('#img_url'); ?>" height="100">
										<br>
										<small>
											<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
											<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
											<?php $plxShow->artNbCom(); ?>
										</small>
										<section>
											<br>
											<?php $plxShow->artChapo(); ?>
										</section>
									</article>
									<hr />
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>

