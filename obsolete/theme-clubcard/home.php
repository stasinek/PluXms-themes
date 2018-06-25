<?php include('header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post-info">Cat&eacute;gorie : <?php $plxShow->artCat(); ?> | le <?php $plxShow->artDate(); ?></p>
				<?php $plxShow->artChapo(); ?>
				<p class="comment_nb"><?php $plxShow->artNbCom('link'); ?></p>
			</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
</div>
<?php include('footer.php'); # On insere le footer ?>
