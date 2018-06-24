<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-loop mh-content" role="main">
        <header class="page-header">
            <h1 class="page-title"><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?></h1>
		</header>
			
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
					
				<article class="mh-loop-item clearfix post type-post">
					<figure class="mh-loop-thumb">
						<?php $plxShow->artThumbnail(); ?>
					</figure>
					<div class="mh-loop-content clearfix">
						<header class="mh-loop-header">
							<h3 class="entry-title mh-loop-title"><?php $plxShow->artTitle('link'); ?></h3>
							<div class="mh-meta mh-loop-meta"> 
								<span class="mh-meta-date updated">
									<i class="fa fa-clock-o"></i><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
								</span> 
								<span class="mh-meta-author author vcard">
									<i class="fa fa-user"></i>
									<?php $plxShow->artAuthor() ?>
								</span>
								<span class="mh-meta-comments">
									<i class="fa fa-comment-o"></i>
									<?php $plxShow->artNbCom(); ?>
								</span>
							</div>
						</header>
						<div class="mh-loop-excerpt">
							<div class="mh-excerpt">
								<p><?php $plxShow->artChapo(''); ?> 
								<a class="mh-excerpt-more" href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>">[...]</a>
								</p>
							</div>
						</div>
					</div>
				</article>
				
			<?php endwhile; ?>

			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>

			<span>
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</span>

		</div>
		
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
