<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="sidebar">

		<h2>Cat&eacute;gories</h2>
		<ul><?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?></ul>
	<br /><br />
		<h2>Derniers articles</h2>
		<ul><?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?></ul>
	<br /><br />
		<h2>Derniers commentaires</h2>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?>
		</ul>
	<br />
</div>
<div class="clearer"></div>