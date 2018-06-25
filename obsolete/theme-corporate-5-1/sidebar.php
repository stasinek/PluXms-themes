<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="sidebar">
	<div class="item-1">
		<ul><?php $plxShow->staticList('Accueil','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?></ul>
	</div>
	<h2>Cat&eacute;gories</h2>
	<div class="item-2">
	<ul><?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?></ul>
	</div>	
	<div class="item-2">
		<h2>Derniers articles</h2>
		<ul><?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?></ul>
	</div>
	<div class="item-3">
		<h2>Commentaires</h2>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?>
		</ul>
	</div>
	<div class="item-4">
		<h2><?php $plxShow->lang('TAGS') ?></h2>
		<ul>
			<?php $plxShow->tagList('<li class="#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>

		</ul>
	</div>
	<div id="rss">
	<h2>Syndication</h2>
	<ul>
	<li><a href="./feed.php?rss" title="Fil RSS des articles">Fil des articles</a></li>
	<li><a href="./feed.php?rss/commentaires" title="Fil RSS des commentaires">Fil des commentaires</a></li>
	</ul>
</div>
<div class="clearer"></div>