<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="sidebar">
	<div id="sidebar-inner">
		<ul>
			<li id="about-me">
				<div class="photo">
					<img src="<?php $plxShow->template(); ?>/img/sidephoto.jpg" alt="" />
					<span></span>
				</div>
			</li>
			<li id="categories">
				<h3 class="sidebar-title">Rubriques</h3>
				<ul>
					<?php $plxShow->catList(); ?>
				</ul>
			</li>
			<li id="commentaires">
				<h3 class="sidebar-title">Commentaires</h3>
				<ul>
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit :</a><br/>#com_content(50)</li>',5); ?>
				</ul>
			</li>
			<li id="archives">
				<h3 class="sidebar-title">Archives</h3>
				<ul>
					<?php $plxShow->archList('<li><a href="#archives_url">#archives_name</li>',20); ?>
				</ul>
			</li>
		</ul>
	</div>
</div><!-- #sidebar -->