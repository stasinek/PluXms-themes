<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

<div id="content_outside">
<div id="content_inside">

<div id="left_column">

	<div class="post">
		<h2><?php $plxShow->artTitle('link'); ?></h2>
		
		<p><?php $plxShow->artContent(); ?></p>
	</div> <!-- post -->

	<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
	
</div> <!-- left_column -->

<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>

<div class="clear"></div>

</div> <!-- content_inside -->
</div> <!-- content_outside -->

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>