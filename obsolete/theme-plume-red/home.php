<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<h2 class="articletitle"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post-info"><?php $plxShow->artAuthor(); ?> | <?php $plxShow->artDate(); ?> | <?php $plxShow->artCat(); ?> | <?php $plxShow->artNbCom(); ?></p>
				<?php $plxShow->artChapo(); ?>
			</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
	</div>
	<?php # On insere la sidebar ?>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	<?php # On affiche la pagination ?>
	<p id="pagination"><?php $plxShow->pagination(); ?></p>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>