<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
	<div id="content">
			<div class="post" id="post-<?php $plxShow->staticId(); ?>">
				<h1><?php $plxShow->staticTitle(); ?></h1>
				<?php $plxShow->staticContent(); ?>
			</div>
	</div>
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>