<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
  <div id="content">
    <div class="post">
      <h2><?php $plxShow->artTitle('link'); ?></h2>
  		<small class="postmetadata">Publi&eacute; dans : <?php $plxShow->artCat(); ?>, le <?php $plxShow->artDate(); ?> par <?php $plxShow->artAuthor(); ?></small>
  		<div class="entry"><?php $plxShow->artContent(); ?></div>
  		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
    </div>
  </div>
  <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
