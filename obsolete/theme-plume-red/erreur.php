<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<div class="post">
			<h2 class="erreurtitle">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
			<p class="center"><?php $plxShow->erreurMessage(); ?></p>
			<p class="center"><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
		</div>
	</div>
	<?php # On insere la sidebar ?>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>