<?php include('sidebar.php'); # On insere la sidebar ?>
<div id="page">
	<div id="top">
		<div id="header">
			<h1><?php $plxShow->mainTitle('link'); ?></h1>
			<cite>"<?php $plxShow->subTitle(); ?>"</cite>
		</div>
	</div>
	<div id="content">
		<h2 class="title">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
		<p><?php $plxShow->erreurMessage(); ?></p>
		<p><a href="./" title="Accueil du site">Retour page d'accueil</a></p>
	</div>
	<div id="footer">
		<p>G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">Pluxml</a> - Design by Poozat</p>
	</div>
</div>
</body>
</html>