<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<!-- On affiche le titre, l'auteur, la date et le contenu -->
        <h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
		<p><b>Par <?php $plxShow->artAuthor(); ?> </b> | <?php $plxShow->artDate("#day #num_day #month #num_year(4)"); ?><br>
		<div class="post"><?php $plxShow->artContent(); ?></div>
		<br>
		<hr> <!-- On affiche une ligne entre chaque article -->
		<br>
        <!-- On affiche le nombre de commentaires -->
		<p><b>Tags: <?php $plxShow->artTags($format='<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name  </a>'); ?></b><br>
        <b>Catégorie :</b> <?php $plxShow->artCat(); ?> | <?php $plxShow->artNbCom(); ?></p>
        <?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
	</div>
    <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>

