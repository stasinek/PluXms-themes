<div id="sidebar"><div id="categories">
		<h2>CATEGORIES</h2>
		<br />
		<ul>
			<?php $plxShow->catList('Accueil','#cat_name'); ?>
		</ul><br />
<div id="syndication">
		<h2>SYNDICATION</h2>
		<br /><br />
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</div></div>
	</div>