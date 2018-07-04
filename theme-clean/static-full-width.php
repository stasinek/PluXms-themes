<?php include(dirname(__FILE__).'/header.php'); ?>
	
	<div class="article static" role="article" id="fh5co-main static-page-<?php echo $plxShow->staticId(); ?>">

		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php $plxShow->staticTitle(); ?></h1>
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
								<?php $plxShow->staticContent(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
