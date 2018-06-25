<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

	<div id="content">
		<div class="post">
		
			<h1>Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e</h1>
			<p><?php $plxShow->erreurMessage(); ?></p>
			<p><a href="./" title="Accueil du site">Retour page d'accueil</a></p>

		</div>
	</div>

<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>