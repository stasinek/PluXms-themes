<?php include(dirname(__FILE__).'/header.php'); ?>

<!--- Post Starts -->
	<div class="post wrap">
				<?php
				ob_start();
				$plxShow->artDate('#month');
				$month = ob_get_clean();
				?>
				
				<div class="post-meta left-col">
					<h3 class="wrap"><span class="month"><?php echo utf8_encode(substr(utf8_decode($month),0,3));?><?php $plxShow->artDate('<span class="year">#num_year(4)</span></span><span class="day">#num_day</span>'); ?></h3>
					<h4 class="author"><?php $plxShow->artAuthor();?></h4>
					<h4 class="comments"><?php $plxShow->artNbCom();?></h4>
				</div>
				
				<div class="post-content right-col">
					<h2><?php $plxShow->artTitle('link'); ?></h2>

					<?php $plxShow->artContent(); ?>

					<?php include(dirname(__FILE__).'/commentaires.php'); ?>

				</div>
			
	</div>
<!--- Post Ends -->

<div class="more_posts">
	<h2><?php $plxShow->pagination(); ?></h2>
</div>


<!--- End Content -->
</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>

<?php include(dirname(__FILE__).'/footer.php'); ?>