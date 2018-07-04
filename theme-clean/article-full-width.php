<?php include(dirname(__FILE__).'/header.php'); ?>

	<article class="article" role="article" id="fh5co-main  post-<?php echo $plxShow->artId(); ?>">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php $plxShow->artTitle(); ?></h1>
								<small>
									<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
									<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
								</small>
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
								<?php $plxShow->artThumbnail(); ?>				
								<br><br>
								<?php $plxShow->artContent('false'); ?>
								<br>
								<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
								<br>
								<?php include(dirname(__FILE__).'/commentaires.php'); ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
