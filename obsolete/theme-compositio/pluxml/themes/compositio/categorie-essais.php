<?php include(dirname(__FILE__).'/header.php'); ?>

<h2 class="title"><?php $plxShow->catName(); ?></h2>

<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>


<!--Start Post-->
<div class="post-<?php echo $plxShow->artId(); ?> post type-post" style="margin-bottom: 40px;">

<div class="p-head">
	<h3>
		<?php $plxShow->artTitle('link'); ?>
	</h3>
	<p class="p-cat"><?php $plxShow->lang('CLASSIFIED_IN'); ?> : <?php $plxShow->artCat(); ?></p>
	<small class="p-time"><acronym title="Mise à jour">MAJ LE</acronym>
		<strong class="day"><?php $plxShow->artDate('#num_day'); ?></strong>
		<strong class="month"><?php $plxShow->artDate('#num_month'); ?></strong>
		<strong class="year"><?php $plxShow->artDate('#num_year(4)'); ?></strong>
	</small>
</div>

<div class="p-con">
	<?php $plxShow->artChapo(); ?>
</div>

<div class="p-det">
	<ul>
		<li class="p-det-com"><?php ob_start();$plxShow->artNbCom();$artNbCom = ob_get_clean(); echo $artNbCom == '' ? 'Fermés' : $artNbCom; ?></li>
		<li class="p-det-tag"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></li>
	</ul>
</div>

</div>

<?php endwhile; ?>
<p class="pagination"><?php $plxShow->pagination(); ?></p>
<?php include(dirname(__FILE__).'/footer.php'); ?>