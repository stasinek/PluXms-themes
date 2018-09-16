<?php include(dirname(__FILE__).'/header.php'); ?>
            <div class="mh-wrapper clearfix">
                <div id="main-content" class="mh-content" role="main" >
                    <article class="post type-post format-standard">
                        <header class="entry-header clearfix">
                            <h1 class="entry-title"><?php $plxShow->lang('ERROR'); ?></h1>
                        </header>
                        <div class="entry-content clearfix">
							
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
			
			</div>
			
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>

		</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>

