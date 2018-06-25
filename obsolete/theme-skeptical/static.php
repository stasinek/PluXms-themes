<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content" class="col-full">
	<div id="main" class="col-left">
		<div class="post page">
			<h2 class="title static"><?php $plxShow->staticTitle(); ?></h2>
			<div class="entry"><?php $plxShow->staticContent(); ?></div>
		</div>
	</div>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
