<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="menu">
	<div id="categories">
		<h2><img src="<?php $plxShow->template(); ?>/img/menu_title.png" alt="categorie" title="categorie" /> Catégories</h2>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?>
		</ul>
	</div>
	<div id="derniers_articles">
		<h2><img src="<?php $plxShow->template(); ?>/img/menu_title.png" alt="Derniers articles" title="Derniers articles" /> Derniers articles</h2>
		<ul>
		<?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?>
		</ul>
	</div>
	<div id="derniers_commentaires">
		<h2><img src="<?php $plxShow->template(); ?>/img/menu_title.png" alt="Derniers commentaires" title="Derniers commentaires" /> Derniers commentaires</h2>
		<ul>
		<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?>
		</ul>
	</div>

	
</div>
<hr />