<?php include('header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<h2 class="title">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
		<p><?php $plxShow->erreurMessage(); ?></p>
		<p><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
	</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
</div>
<?php include('footer.php'); # On insere le footer ?>