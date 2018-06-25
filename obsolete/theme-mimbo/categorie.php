<?php include('header.php');?>
<div id="content">
	<div id="rightcol">
	
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
	
                <div class="clearfloat2">
                                <h3><?php $plxShow->artCat(); ?></h3>
                                <div class="title"><?php $plxShow->artTitle('link'); ?></div>
                                <p class="post-info">le <?php $plxShow->artDate(); ?></p>
                                <p><?php $plxShow->artChapo(); ?><p>
                </div>
	<?php endwhile; # Fin de la boucle sur les articles ?>

			<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
		
	</div><!--END RIGHTCOL-->
</div><!--END CONTENT-->

<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php');?>
