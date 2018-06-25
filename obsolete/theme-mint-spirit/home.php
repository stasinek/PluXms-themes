<?php include('header.php'); ?>
<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

<div id="article">
	<h2><?php $plxShow->artTitle('link'); ?></h2>
	<span class="gris"><?php $plxShow->artDate(); ?> | <?php $plxShow->artCat(); ?></span>
	
	<p><?php $plxShow->artChapo(); ?></p>

	<span class="comment_nb"><?php $plxShow->artNbCom(); ?></span>
</div>
	
<?php endwhile; ?>
<?php ?>

<p id="pagination"><?php $plxShow->pagination(); ?></p>

<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>
