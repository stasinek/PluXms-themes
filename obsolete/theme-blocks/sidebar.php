<?php if(!defined('PLX_ROOT')) exit; ?>
<!-- sidebar START -->
<div id="sidebar">

	<!-- sidebar right -->
	<div id="sidebar_right">

		<!-- search box -->
		<div class="widget s">
				<form action="" id="search" method="get">
					<div id="searchbox">
						<input class="textfield" type="text" name="s" value="" />
						<input class="button" type="submit" value="Rechercher" />
						<div class="tip">Rechercher sur mon Blog</div>
						<div class="fixed"></div>
					</div>
				</form>
		</div>

		<!-- recent posts -->
		<div class="widget widget_pages">
			<h3>Derniers articles</h3>
			<ul>
			    <?php $plxShow->lastArtList('<li><a href="#art_url" class="#art_status" title="#art_title">#art_title</a></li>'); ?>
			</ul>
		</div>

		<!-- recent comments -->
			<div class="widget">
				<h3>Derniers commentaires</h3>
				<ul>
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a> #com_content(34)</li>'); ?>
				</ul>
			</div>

		<!-- categories -->
		<div class="widget widget_categories">
			<h3>Cat&eacute;gories</h3>
			<ul>
				<?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?>
			</ul>
		</div>

	</div>
</div>
<!-- sidebar END -->
