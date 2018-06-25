<div id="page">
<?php include('header.php'); # On insere le header ?>
<div id="main">
	<div id="content">
		<h2 class="title"><?php $plxShow->staticTitle(); ?></h2>
		<?php $plxShow->staticContent(); ?>
	</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
</div>
<?php include('footer.php'); # On insere le footer ?>