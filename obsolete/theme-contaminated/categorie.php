<?php include('header.php'); # On insere le header ?>

		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			
				<h2><?php $plxShow->artTitle('link'); ?></h2>
				<p class="descr">Cat&eacute;gorie : <?php $plxShow->artCat(); ?> | le <?php $plxShow->artDate(); ?> | <?php $plxShow->artNbCom(); ?></p>
				<?php $plxShow->artChapo(); ?>
				
			
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<div class="descr"><?php $plxShow->pagination(); ?></div>
	</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
</div>
<?php include('footer.php'); # On insere le footer ?>
