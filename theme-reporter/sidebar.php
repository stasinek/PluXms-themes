<div id="sidebar">
	<div id="leftbar">
		<h2>Cat&eacute;gories</h2>
		<ul>
			<?php $plxShow->catList('','#cat_name'); ?>
		</ul>
		<h2>Liens</h2>
		<ul>
			<li><a href="http://pluxml.org/" title="PluXml">PluXml</a></li>
		</ul>
	</div>
	<div id="rightbar">
		<h2>A Propos</h2>
		<p> Modifiez le fichier sidebar.php pour indiquer içi une présentation de votre site.</p>
		<h2>Syndication</h2>
		<ul>
			<li><?php $plxShow->artFeed('atom'); ?></li>
			<li><?php $plxShow->comFeed('atom'); ?></li>
		</ul>
	</div>
</div>
