<?php include('header.php'); # On insere le header ?>
<div id="wrapper">
	<div id="content">
		<div id="post">
			<h2 class="entry-title"><?php $plxShow->staticTitle(); ?></h2>
			<div class="entry-content"><?php $plxShow->staticContent(); ?></div>
		</div>
		<div class="hentry"></div>
	</div>
</div>
<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
