<?php include('header.php'); ?>
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			<div class="post">
				<span class="gris">R&eacute;dig&eacute; par <em><?php $plxShow->artAuthor() ?></em> le <?php $plxShow->artDate(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;Cat&eacute;gorie <em><?php $plxShow->artCat(); ?></em></span>
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<div class="clear">&nbsp;</div>
				<?php $plxShow->artChapo(); ?>
				<p class="info_bottom">Mots cl&eacute;s : <?php $plxShow->artTags(); ?> <span class="comment_nb"><?php $plxShow->artNbCom(); ?></span></p>
				<div class="clear"></div>
			</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>