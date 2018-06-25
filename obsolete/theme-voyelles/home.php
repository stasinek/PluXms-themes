<?php include('sidebar.php'); # On insere la sidebar ?>
<div id="page">
	<div id="top">
		<div id="header">
			<h1><?php $plxShow->mainTitle('link'); ?></h1>
			<cite>"<?php $plxShow->subTitle(); ?>"</cite>
		</div>
	</div>
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post-info"><?php $plxShow->artCat(); ?> | <?php $plxShow->artDate(); ?></p>
				<?php $plxShow->artChapo(); ?>
				<p class="comment_nb"><?php $plxShow->artNbCom('link'); ?></p>
			</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<div id="footer">
		<p>G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">Pluxml</a> - Design by Poozat</p>
	</div>
</div>
</body>
</html>
