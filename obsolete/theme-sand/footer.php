<?php if(!defined('PLX_ROOT')) exit; ?>
<footer id="footer">
	<div class="foot">
	<p>&copy; <?php $plxShow->mainTitle('link'); ?> - G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">Pluxml</a> <?php $plxShow->version(); ?> en <?php $plxShow->chrono(); ?></p>
        <p><ul><li><a href="core/admin/">Administration</a></li> | <li><a href="#header" title="">Haut de page</a></li> <?php $plxShow->staticList('Accueil',' | <li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li> '); ?></ul></p>
	</div>

</footer>
</body>
</html>
