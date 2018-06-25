<div class="sidenav">

		<h2>Pages</h2>
		<ul>
		<?php $plxShow->staticList('Accueil'); ?>
		</ul>
		
		<h2>Cat&eacute;gories</h2>
		<ul>
			<?php $plxShow->catList(); ?>
			
		</ul>
		
		<h2>Syndication</h2>
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	
</div>
<div class="clearer"></div>

</div>