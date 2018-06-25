<div id="sidebar">
		<div id="header">
			<h1><?php $plxShow->mainTitle('link'); ?></h1>
		</div>
		<h2>Menu</h2>
			<ul><?php $plxShow->staticList('Accueil'); ?></ul>
		<h2>Cat&eacute;gories</h2>
			<ul><?php $plxShow->catList('','#cat_name (#art_nb)'); ?></ul>
		<h2>Syndication</h2>
			<ul>
				<li><?php $plxShow->artFeed('atom'); ?></li>
				<li><?php $plxShow->comFeed('atom'); ?></li>
			</ul>
		<div id="credits">
			<p>G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">Pluxml</a><br />Basé sur un design de Poozat</p>
		</div>
</div>