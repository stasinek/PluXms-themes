<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
  <div id="middle-contents" class="clearfix">
   <div id="left-col">
    <div class="post" id="single">   
     <h2>Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
     <div class="post-content">
	<p style="margin:auto !important;"><?php $plxShow->erreurMessage(); ?><br />
	<a href="./" title="Accueil du site">Retour page d'accueil</a></p>
     </div>
    </div>

   </div><!-- #left-col end -->
   <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
  </div><!-- #middle-contents end -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>