<?php include('header.php'); ?>
<div id="page">
	<div id="content">
		<h2 class="title">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
		<p><?php $plxShow->erreurMessage(); ?></p>
		<p><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
	</div>
	<?php include('sidebar.php'); ?>
</div>
<?php include('footer.php'); ?>