<?php include(dirname(__FILE__).'/header.php'); ?>
<div id="main">
	<div id="content">
		<div class="hfeed">
			<div class="hentry page publish post-1 odd author-admin">
				<div class="entry-content">
					<?php include(dirname(__FILE__).'/sidebar.php'); ?>	
					<div  style="max-width: 640px;">
						<h1 class='page-title'><?php $plxShow->staticTitle(); ?></h1>
						<?php $plxShow->staticContent(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
