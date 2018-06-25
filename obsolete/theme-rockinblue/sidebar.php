<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="sidebar">
	<h2>Cat&eacute;gories</h2>
	<ul><?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?></ul>

	<h2>Mots cl&eacute;s</h2>
	<ul><?php $plxShow->tagList('<a href="#tag_url" title="#tag_name">#tag_name  </a>', 20, true); ?></ul>

	<h2>Derniers articles</h2>
	<ul><?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?></ul>

	<h2>Syndication</h2>
	<ul>
	    <li><?php $plxShow->artFeed($type='atom',$categorie='') ?></li>
	</ul>

	<h2>Archives</h2>
	<ul><?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?></ul>

	<h2>Derniers commentaires</h2>
	<ul> <?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?></ul>

</div>

