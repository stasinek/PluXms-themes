<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
			
			<p class="cat"><span><?php $plxShow->artNbCom(); ?> | <?php $plxShow->artDate('#num_day.#num_month.#num_year(2)'); ?></span></p>

<p class="date">
<a href="http://twitter.com/home?status=<?php $plxShow->artTitle(); ?> <?php $plxShow->artUrl('absolu'); ?>"><img src="<?php $plxShow->template(); ?>/img/social/twitter.png" style="border:0;" alt="Twitter" /></a> 
<a href="http://digg.com/submit?url=<?php $plxShow->artUrl('absolu'); ?>&amp;title=<?php $plxShow->artTitle(); ?>"><img src="<?php $plxShow->template(); ?>/img/social/digg.png" style="border:0;" alt="Digg" /></a> 
<a href="http://www.stumbleupon.com/submit?url=<?php $plxShow->artUrl('absolu'); ?>&amp;title=<?php $plxShow->artTitle(); ?>"><img src="<?php $plxShow->template(); ?>/img/social/stumble.png" style="border:0;" alt="Stumble" /></a> <br />
<a href="http://del.icio.us/post?url=<?php $plxShow->artUrl('absolu'); ?>&amp;title=<?php $plxShow->artTitle(); ?>"><img src="<?php $plxShow->template(); ?>/img/social/delicious.png" style="border:0;" alt="Delicious" /></a> 
<a href="http://technorati.com/faves?add=<?php $plxShow->artUrl('absolu'); ?>"><img src="<?php $plxShow->template(); ?>/img/social/technorati.png" style="border:0;" alt="Technorati" /></a> 
<a href="http://www.facebook.com/sharer.php?u=<?php $plxShow->artUrl('absolu'); ?>&amp;t=<?php $plxShow->artTitle(); ?>"><img src="<?php $plxShow->template(); ?>/img/social/facebook.png" style="border:0;" alt="Facebook" /></a>
</p>
			<div class="post"><?php $plxShow->artChapo(); ?></div>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>