<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="right">
	<div>
		<h2>Cat&eacute;gories</h2>
		<ul class="cat">
			<?php $plxShow->catList('Accueil','#cat_name'); ?>
		</ul>
	</div>
	<div>
		<h2>Syndication</h2>
		<ul class="rss">
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</div>
</div>
<div class="clear"></div>