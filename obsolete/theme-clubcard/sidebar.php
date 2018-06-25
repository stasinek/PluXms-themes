<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="sidebar">
	<div id="categories">
		<h2>Cat&eacute;gories</h2>
		<ul>
			<?php $plxShow->catList('Accueil','#cat_name'); ?>
		</ul>
	</div>
	<div id="syndication">
		<h2>Syndication</h2>
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</div>
	<div id="skin">
	<ul>
	</ul>
</div>	
</div>
<div class="clearer"></div>