<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

<div id="content_outside">
<div id="content_inside">

<div id="left_column">

	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>

	<div class="post">
		<h2><?php $plxShow->artTitle('link'); ?></h2>
		<p><?php $plxShow->artChapo(); ?></p>
	</div> <!-- post -->

	<?php endwhile; # Fin de la boucle sur les articles ?>

	<p id="pagination"><?php $plxShow->pagination(); ?></p>
	
</div> <!-- left_column -->

<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>

<div class="clear"></div>

</div> <!-- content_inside -->
</div> <!-- content_outside -->

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>