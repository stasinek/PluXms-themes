<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<h2 class="title"><?php $plxShow->staticTitle(); ?></h2>
		<div class="post"><?php $plxShow->staticContent(); ?></div>
	</div>
<div id="sidebar">
	<div class="item-1">
		<h2>Cat&eacute;gories</h2>
		<ul><?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#cat_status" title="#cat_name">#cat_name</a></li>'); ?></ul>
	</div>
	<br />
	
</div>
<div class="clearer"></div>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>