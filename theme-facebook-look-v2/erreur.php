<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
	<div id="content">
    	
    	<div id="leftcolumn" class="singlepost">

			<h2 class="center">Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e :</h2>
		<p><?php $plxShow->erreurMessage(); ?></p>
		<p><a href="./" title="Accueil du site">Retour page d'accueil</a></p>        
        </div>

    	<div id="centercolumn" class="singlepost">
			<div id="sidebar"><?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?></div>
		</div>

		<div id="rightcolumn" class="singlepost">
			<?php include(dirname(__FILE__).'/adside.php'); # On insere les Pubs ?>
		</div>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>