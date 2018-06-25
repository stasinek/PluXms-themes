<?php include('header.php'); # On insere le header ?>
<div id="wrapper">
	<div id="content">
		<div id="post">
			<h2 class="entry-title">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
			<div class="entry-content">
				<p style="text-align:center"><?php $plxShow->erreurMessage(); ?></p>
				<p style="text-align:center"><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
			</div>
		</div>
		<div class="hentry"></div>
	</div>
</div>
<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
