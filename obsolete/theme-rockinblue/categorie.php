<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
    <div id="content">
        <?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<!-- On affiche le titre, l'auteur, la date et le contenu -->
			<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
			<p><b>Par <?php $plxShow->artAuthor(); ?> </b> | <?php $plxShow->artDate("#day #num_day #month #num_year(4)"); ?><br>
			Tags: <?php $plxShow->artTags($format='<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name  </a>'); ?></p>
			<div class="post"><?php $plxShow->artChapo(); ?></div>
			<br>
			<!-- On affiche le nombre de commentaires -->
			<p><?php $plxShow->artNbCom(); ?></p>
			<hr> <!-- On affiche une ligne entre chaque article -->
        <?php endwhile; # Fin de la boucle sur les articles ?>
        <?php # On affiche la pagination ?>
        <p><?php $plxShow->pagination(); ?></p>
    </div>
    <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
