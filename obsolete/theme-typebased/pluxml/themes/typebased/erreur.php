<?php include(dirname(__FILE__).'/header.php'); ?>

<!--- Post Starts -->
	<div class="post wrap">
				
				<div class="post-meta left-col">
					
				</div>
				
				<div class="post-content right-col">
					<h2><?php $plxShow->lang('ERROR') ?> :</h2>
					<div class="error-content"><?php $plxShow->erreurMessage(); ?></div>
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