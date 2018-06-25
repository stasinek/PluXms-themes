<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="main">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
			<p class="date"><?php $plxShow->artDate('#day #num_day #month, #num_year(4)'); ?> | <span>Auteur : <?php $plxShow->artAuthor(); ?></span></p>
			<div class="post"><?php $plxShow->artChapo(); ?></div>
						<p class="info_bottom"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?> <span><?php $plxShow->artNbCom(); ?></span></p>
<p class="cat">Class&eacute; dans : <?php $plxShow->artCat(); ?> | <span><?php $plxShow->artNbCom(); ?></span></p>
		<?php endwhile; # Fin de la boucle sur les articles ?>
<?php # On affiche le fil Rss de cet article ?>
<div class="feed_categorie"><?php $plxShow->artFeed('rss',$plxShow->catId()); ?></div>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>