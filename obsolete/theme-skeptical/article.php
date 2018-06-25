<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content" class="col-full">
	<div id="main">
			<div class="post">
				<div class="post-meta col-left">
					<span class="post-date"><?php echo $plxShow->artDate('#num_day #month #num_year(4)'); ?><span class="bg">&nbsp;</span></span>
					<ul>
						<li class="post-author">Par <?php $plxShow->artAuthor() ?></li>
						<li class="post-category">Dans <?php $plxShow->artCat(); ?></li>
						<li class="comments"><?php $plxShow->artNbCom(); ?></li>
						<li class="comments">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></li>
					</ul>
				</div>
				<div class="middle col-left">
					<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
					<div class="entry">
						<?php $plxShow->artContent(); ?>
						
					</div>
				</div>
				
				<div class="related col-left">
					<h3>Dans la même catégorie</h3>
					<ul>
						<?php 
						$id = $plxShow->artCatId();
						$plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title"><span class="related-title">#art_title</span><span>#art_date #art_hour</span></a></li>',5,$id); 
						?>
					</ul>
				</div>
				<div class="fix"></div>
			</div>
			<div class="nav-entries">
			<h3><?php $plxShow->artAuthor(); ?></h3>
			<?php $plxShow->artAuthorInfos('<p class="infos">#art_authorinfos</p>'); ?>
			</div>
		<?php 
		# On affiche la pagination 
		# En attendant une solution plus propre aux problème de pagination
		?>
		<div style="display: none; visibility: hidden"><?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?></div>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
	</div>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
