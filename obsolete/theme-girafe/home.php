<?php include('header.php'); ?>
<div id="page"><p align="center" id= "sub" class="sub"><?php $plxShow->subTitle(); ?></p>
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">
				<img class="hier" src="<?php $plxShow->template(); ?>/img/hier.png"/><img class="da" src="<?php $plxShow->template(); ?>/img/da.png"/>
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post-info">Article post&eacute; le <?php $plxShow->artDate(); ?> dans la cat&eacute;gorie <?php $plxShow->artCat(); ?></p>
				<br />
				<?php $plxShow->artChapo(); ?><br />
				<p class="comment_nb">Ecrire un commentaire - <?php $plxShow->artNbCom('link'); ?></p>
		  </div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>

<div class="clearer"></div>
</div>
<?php include('footer.php'); # On insere le footer ?>