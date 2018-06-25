<?php include('header.php'); # On insere le header ?>
<div id="wrapper">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div id="post">
				<h2 class="entry-title"><?php $plxShow->artTitle('link'); ?></h2>
				<div class="entry-meta">
					Rubrique : <?php $plxShow->artCat(); ?> | 
					le <?php $plxShow->artDate(); ?><br/>
					Mots cl&eacute;s : <?php $plxShow->artTags(); ?>
				</div>
				<div class="entry-content"><?php $plxShow->artChapo(); ?></div>
				<div class="entry-comment_nb"><?php $plxShow->artNbCom(); ?></div>
			</div>
			<div class="hentry"></div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<div id="pagination"><?php $plxShow->pagination(); ?></div>
	</div>
</div>
<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>