<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
  <div id="content">
  	<div class="post">
  		<h2><a href=""><?php $plxShow->staticTitle(); ?></a></h2>
  		<div class="entry"><?php $plxShow->staticContent(); ?></div>
  	</div>
  </div>
  <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
