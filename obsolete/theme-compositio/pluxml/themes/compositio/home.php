<?php include(dirname(__FILE__).'/header.php'); ?>

<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

<!--Start Post-->
<div class="post-10 post type-post status-publish format-standard hentry category-uncategorized tag-delenit tag-mentitum tag-things" style="margin-bottom: 40px;">
      			
<div class="p-head">
<h2><?php $plxShow->artTitle('link'); ?></h2>
<p class="p-cat"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></p>
<small class="p-time">
<strong class="day"><?php $plxShow->artDate('#num_day'); ?></strong>
<strong class="month"><?php $plxShow->artDate('#num_month'); ?></strong>
<strong class="year"><?php $plxShow->artDate('#num_year(4)'); ?></strong>
</small>
</div>

<div class="p-con">
	<?php $plxShow->artChapo(); ?>
<div class="clear"></div>
</div>


<div class="p-det">
<ul>
	<li class="p-det-com"><?php ob_start();$plxShow->artNbCom();$artNbCom = ob_get_clean(); echo $artNbCom == '' ? 'Fermés' : $artNbCom; ?></li>
	<li class="p-det-tag"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></li>
</ul>
</div>

</div>
<!--End Post-->
<?php endwhile; ?>

			<p class="pagination"><?php $plxShow->pagination(); ?></p>

<?php include(dirname(__FILE__).'/footer.php'); ?>
