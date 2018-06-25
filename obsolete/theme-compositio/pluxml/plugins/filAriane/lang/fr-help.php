<?php if(!defined('PLX_ROOT')) exit; ?>
<h1>Aide du plugin filAriane</h1>
<div id="filAriane">

<p>
Pour afficher sur votre site le fil d'Ariane:
<blockquote><?php echo htmlentities("<?php eval(\$plxShow->callHook('filAriane', 'separateur')); ?>"); ?></blockquote>
le s&eacute;parateur &eacute;tant ce que vous voulez.
</p>

</div>