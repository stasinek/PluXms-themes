<?php include('header.php'); # On insere le header ?>
	<div id="content">
		<div class="post">
			<h2><?php $plxShow->staticTitle(); ?></h2>
			<div class="entry">
				<?php $plxShow->staticContent(); ?>
			</div>
		</div>
	</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
