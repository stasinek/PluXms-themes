<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="right">
	<div>
		<h2>Cat&eacute;gories</h2>
		<ul class="cat">
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>
	</div>
	<div>
		<h2>Derniers articles</h2>
		<ul>
			<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>
	</div>
	<div>
		<h2>Derniers commentaires</h2>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit : #com_content(34)</a></li>'); ?>
		</ul>
	</div>
	<div>
		<h2>Mots cl&eacute;s</h2>
		<ul class="info_bottom">
			<?php $plxShow->tagList('<li class="#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>
	</div>
    <div>
        <h2>Archives</h2>
        <ul>
            <?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
        </ul>
    </div>	

	<div>
		<h2>Syndication</h2>
		<ul class="rss">
			<li><a href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" title="Fil Atom des commentaires">Commentaires</a></li>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" title="Fil Atom des articles">Articles</a></li>
		</ul>
	</div>
</div>
<div class="clear"></div>