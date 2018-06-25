<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post-info">Cat&eacute;gorie : <?php $plxShow->artCat(); ?> <br />
				Ecrit le <?php $plxShow->artDate('#day #num_day #month #num_year(4)'); ?> <br />
				Vous avez laissez <?php $plxShow->artNbCom(); ?></p>
				<?php $plxShow->artChapo(); ?>
			</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche le fil Atom de cet article ?>
		<div class="feed_categorie"><?php $plxShow->artFeed('atom',$plxShow->catId()); ?></div>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>