<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="post-<?php echo $plxShow->artId(); ?> post type-post" style="margin-bottom: 30px;">

<div class="p-head">
	<h1><?php $plxShow->artTitle(''); ?></h1>
	<p class="p-cat"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></p>
</div>

<div class="p-con">
	<?php echo (strlen($plxShow->plxMotor->plxRecord_arts->f('ornament')) > 0 ) ? '<div class="img-article">'.$plxShow->plxMotor->plxRecord_arts->f('ornament').'</div>' : ''; ?>
	<?php  eval($plxShow->callHook('caroufredselHome'));?>
	<?php $plxShow->artContent(); ?>
</div>

<div class="p-det">
<ul>
	<li class="p-det-tag"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></li>
</ul>
</div>

</div>	


<?php include(dirname(__FILE__).'/footer.php'); ?>
