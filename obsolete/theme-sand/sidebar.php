<?php if(!defined('PLX_ROOT')) exit; ?>
<section id="sidebar">

        <a href="index.php" title="Contactez moi">
            <div class="contact">
            </div>
	</a>
	<div class="categorie">
		<h2 class="titleside">Cat&eacute;gories</h2>
		<ul><?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?></ul>
	</div>
	<div class="blogoliste">
		<h2 class="titleside">Derniers articles</h2>
		<ul><?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?></ul>
	</div>
	<div class="commentslast">
            <h2 class="titlesidecom">Commentaires R&#233;cents</h2>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?>
		</ul>
	</div>
</section>