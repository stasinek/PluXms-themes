<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div class="abs header_upper chrome_light">
	<!--	<span class="float_left button" id="button_navigation">
			Navigation
		</span>
		<a href="#" class="float_left button">
			Back
		</a>
		<a href="#" class="float_right button">
			Sign out
		</a>-->
		<?php 
			$titre = explode('/',$plxShow->plxMotor->get); 
			echo "Archive ".plxDate::getCalendar('month', $titre[2])." ".$titre[1];
		?>
	</div>
<!--	<div class="abs header_lower chrome_dark">
		<a href="#" class="icon icon_refresh"></a>
		<a href="#" class="icon icon_redo"></a>
		<a href="#" class="icon icon_loopback"></a>
		<a href="#" class="icon icon_squiggle"></a>
		<a href="#" class="icon icon_shuffle"></a>
		<a href="#" class="icon icon_magnifying_glass"></a>
		<a href="#" class="icon icon_map_marker"></a>
		<a href="#" class="icon icon_chat"></a>
		<a href="#" class="icon icon_chat2"></a>
		<a href="#" class="icon icon_medical"></a>
		<a href="#" class="icon icon_clock"></a>
		<a href="#" class="icon icon_eye"></a>
		<a href="#" class="icon icon_target"></a>
		<a href="#" class="icon icon_tag"></a>
		<a href="#" class="icon icon_tags"></a>
	</div>-->
	<div id="main_content" class="abs">
		<div id="main_content_inner">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<h2><?php $plxShow->artTitle('link'); ?></h2>
			<p class="info_top">R&eacute;dig&eacute; par <?php $plxShow->artAuthor() ?> | Class&eacute; dans : <?php $plxShow->artCat(); ?></p>
			<p class="date"><?php $plxShow->artDate('<span>#num_day</span><br />#num_month | #num_year(2)'); ?></p>
			<div class="post"><?php $plxShow->artChapo(); ?></div>
			<p class="info_bottom">Mots cl&eacute;s : <?php $plxShow->artTags(); ?> <span><?php $plxShow->artNbCom(); ?></span></p>
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche le fil Atom des articles de cette categorie ?>
		<div class="feed_categorie"><?php $plxShow->artFeed('atom',$plxShow->catId()); ?></div>
		<?php # On affiche la pagination ?>
		<p id="pagination"><?php $plxShow->pagination(); ?></p>
		</div>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
