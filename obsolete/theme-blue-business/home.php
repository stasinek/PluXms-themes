<?php include('header.php'); ?>
<div id="page">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			<div class="post">
				<div class="date">
					<div class="jour"><?php $plxShow->artDate(); ?></div>
				</div>
				<div class="titre_art">
					<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
					Cat&eacute;gorie <em><?php $plxShow->artCat(); ?></em>
				</div>	
				<div class="clear">&nbsp;</div>
				<?php $plxShow->artChapo(); ?>
				<p class="comment_nb"><?php $plxShow->artNbCom(); ?></p>
			</div>
		<?php endwhile; ?>
		<?php ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include('sidebar.php'); ?>
</div>
<?php include('footer.php'); ?>
