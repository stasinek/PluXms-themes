<div style="float:right">
<div id="sidebar"><ul>
	<li>
		<h2>Cat&eacute;gories</h2>
		<ul>
			<?php $plxShow->catList('Accueil','#cat_name'); ?>
		</ul>
	</li>
	<li>
		<h2>Syndication</h2>
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</li></ul>
	</div>