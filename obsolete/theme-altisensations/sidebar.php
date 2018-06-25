<div id="sidebar">
	<div id="categories">
		<h2>Cat&eacute;gories</h2>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?>
		</ul>
	</div>
	<div id="syndication">
		<h2>Syndication</h2>
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</div>
</div>
<div class="clearer"></div>