<div id="sidebar">
	<ul id="sidelist">
		<li><h2>Cat&eacute;gories</h2>
			<ul class="subnav">
				<?php $plxShow->catList(); ?>
			</ul>
		</li>
		<li><h2>Syndication</h2>
			<ul class="bullets">
				<li><?php $plxShow->artFeed('atom'); ?></li>
				<li><?php $plxShow->comFeed('atom'); ?></li>
			</ul>
		</li>
	</ul>
</div>

