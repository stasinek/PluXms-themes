<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
  <div id="content">
  	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
    	<div class="post">
    		<h2><?php $plxShow->artTitle('link'); ?></h2>
        <small class="postmetadata">Publi&eacute; dans : <?php $plxShow->artCat(); ?>, le <?php $plxShow->artDate(); ?> par <?php $plxShow->artAuthor(); ?></small>
    		<div class="entry"><?php $plxShow->artChapo(); ?></div> 
    		<ul class="postmetadata">
    		  <li class="tags">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></li>
           <li class="comments"><?php $plxShow->artNbCom(); ?></li>
    		</ul>
    	</div>
  	<?php endwhile; # Fin de la boucle sur les articles ?>
  	<!-- On affiche le fil Atom des articles de cette categorie -->
  	<div class="feed_categorie"><?php $plxShow->artFeed('atom',$plxShow->catId()); ?></div>
  	<!-- On affiche la pagination -->
  	<div class="navigation"><?php $plxShow->pagination(); ?></div>
  </div>
  <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
