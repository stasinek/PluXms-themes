<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="main">
	<div id="content">
		<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
		<p class="date"><?php $plxShow->artDate('#day #num_day #month, #num_year(4)'); ?> | <span>Auteur : <?php $plxShow->artAuthor(); ?></span></p>
		<div class="post"><?php $plxShow->artContent(); ?></div>
		<p class="cat">Class&eacute; dans : <?php $plxShow->artCat(); ?> | <span><?php $plxShow->artNbCom(); ?></span></p>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
