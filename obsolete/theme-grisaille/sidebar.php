<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="sidebar">
	<div class="item-1">
		<h2>Derniers articles</h2>
		<ul><?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?></ul>
	</div>
	<div class="item-2">
		<h2>Derniers commentaires</h2>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?>
		</ul>
	</div>
<div class="clearer"></div>