<?php include(dirname(__FILE__).'/header.php'); ?>
	<br>
	<br>
	<section role="article" id="post-<?php echo $plxShow->artId(); ?> hero">
		<div class="row section-head">
			<div class="twelve columns">
				<img src="<?php $plxShow->artThumbnail('#img_url');?>" style="width:280px; float:right;">							
				<h1><?php $plxShow->artTitle(); ?></h1>
				<p><?php $plxShow->artChapo(''); ?></p>
				<hr />
			</div>
		</div>
	</section>
	
	<section id="articleSection">
		<div class="row section-head">
			<div class="twelve columns">
				<?php $plxShow->artContent('false'); ?>
			</div>
		</div>
		<div class="row">
			<div id="contact-form" class="six columns tab-whole left">
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>
			</div>
		</div>
	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
