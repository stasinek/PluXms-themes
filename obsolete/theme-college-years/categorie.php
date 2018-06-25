<?php include('header.php'); # On insere le header ?>
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post">		
			<div id="date">
			  <?php $plxShow->artDate(''); ?></div>
			<div>
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $plxShow->artTitle('link'); ?></h2>
			  </div><div class="posttop">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cat&eacute;gorie : <?php $plxShow->artCat(); ?> | <?php $plxShow->artNbCom('link'); ?>
			</div>				
				<div class="entry"><?php $plxShow->artChapo(); ?></div>
		</div>
		<?php endwhile; # Fin de la boucle sur les articles ?>		<?php # On affiche la pagination ?>
		<p id="pagination"><h2 style="text-align:center;"><?php $plxShow->pagination(); ?></h2></p></div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
