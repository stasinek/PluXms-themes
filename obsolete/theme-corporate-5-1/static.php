<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="main">
	<div id="content">
		<h2 class="title"><?php $plxShow->staticTitle(); ?></h2>
		<div class="post"><?php $plxShow->staticContent(); ?></div>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>