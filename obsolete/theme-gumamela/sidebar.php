<div id="colTwo">
		<ul>
			<li id="menu">
				<h2>Menu principal</h2>
					<ul>
						<?php $plxShow->staticList('Accueil'); ?>
					</ul>
			</li>

			<li>
				<h2>Catégories</h2>
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
			</li>
			
		</ul>
</div>

<div style="clear: both;">&nbsp;</div>