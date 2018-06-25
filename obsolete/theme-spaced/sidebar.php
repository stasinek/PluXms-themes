<div id="sidebar">
	<div id="categories">
		<h4>Cat&eacute;gories</h4>
		<ul>
			<?php $plxShow->catList('Accueil','#cat_name'); ?>
		</ul>
	

		<h4>Syndication</h4>
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</div>
</div>
<div class="clearer"></div>