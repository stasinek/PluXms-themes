<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content">
	<div id="page">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<h2 class="post_title"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post_info">Cat&eacute;gorie : <?php $plxShow->artCat(); ?> | le <?php $plxShow->artDate(); ?></p>
				<?php $plxShow->artChapo(); ?>
				<p class="comment_nb">>> <?php $plxShow->artNbCom(); ?></p>
			</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
