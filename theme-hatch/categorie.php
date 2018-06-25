<?php include(dirname(__FILE__).'/header.php'); ?>
	<div id="main"class="archive">
        <div id="content">
					<?php include(dirname(__FILE__).'/sidebar.php'); ?>
            <div class="hfeed" style="max-width: 640px;">
				<h1><?php $plxShow->catName(); ?></h1>
				<h2><?php $plxShow->catDescription('#cat_description'); ?></h2>
				<hr>
				<?php $i=1;
				while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
					<div id="post-146" class="hentry post post_tag-gallery post_tag-jquery post_tag-photography post_tag-portfolio <?php if($i %4 == 0)echo 'last';?>">
						<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>">
							<img src="<?php $plxShow->artThumbnail('#img_url'); ?>" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" class="archive-thumbnail featured" width="220" height="150" />
						</a>
						<h2 class='post-title entry-title'>
							<?php $plxShow->artTitle('link'); ?>
						</h2>
					</div>
					<?php $i=$i+1;
				endwhile; ?>
            </div>
        </div>
    </div>
<?php include(dirname(__FILE__).'/footer.php'); ?>