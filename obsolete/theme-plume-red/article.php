<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="articletitle"><?php $plxShow->artTitle(); ?></h2>
			<p class="post-info"><?php $plxShow->artAuthor(); ?> | <?php $plxShow->artDate(); ?> | <?php $plxShow->artCat(); ?> | <?php $plxShow->artNbCom(); ?></p>
			<?php $plxShow->artContent(); ?>
		</div>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
	</div>
	<?php # On insere la sidebar ?>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
