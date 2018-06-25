<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<span class="gris"><?php $plxShow->artDate(); ?></span>
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<div class="clear">&nbsp;</div>
				<?php $plxShow->artChapo(); ?>
				<p class="comment_nb"><?php $plxShow->artNbCom(); ?></p>
				<div class="clear"></div>
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