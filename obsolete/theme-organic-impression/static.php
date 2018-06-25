<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

<div id="content_outside">
<div id="content_inside">

<div id="left_column">

	<h2 class="title"><?php $plxShow->staticTitle(); ?></h2>
	<div class="post"><?php $plxShow->staticContent(); ?></div>
	
</div> <!-- left_column -->

<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>

<div class="clear"></div>

</div> <!-- content_inside -->
</div> <!-- content_outside -->

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>