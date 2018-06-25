<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content">

<section id="article">
    <article>
		<h2 class="titlearticle">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
		
			<p class="center"><?php $plxShow->erreurMessage(); ?></p>
			<p class="center"><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
		
    </article>
</section><!--Fin du Content-->
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<hr class="both" />
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>