<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
		<h2 class="title-post"><?php $plxShow->artTitle(); ?></h2>
		<p class="cat"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <span><?php $plxShow->artNbCom(); ?> - <?php $plxShow->artDate(); ?></span></p>
		<div class="post"><?php $plxShow->artContent(); ?></div>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
