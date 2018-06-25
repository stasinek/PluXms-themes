<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="statictitle"><?php $plxShow->staticTitle(); ?></h2>
			<?php $plxShow->staticContent(); ?>
		</div>
	</div>
	<?php # On insere la sidebar ?>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>