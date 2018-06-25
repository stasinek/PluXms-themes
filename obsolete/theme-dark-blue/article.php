<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

	<div id="content">
		
		<div class="post">
				<span class="gris">R&eacute;dig&eacute; par <em><?php $plxShow->artAuthor() ?></em> le <?php $plxShow->artDate(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;Cat&eacute;gorie <em><?php $plxShow->artCat(); ?></em></span>
			<h2 class="title"><?php $plxShow->artTitle(); ?></h2>
			<?php $plxShow->artContent(); ?>
		<p class="info_bottom">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></p>
		</div>
		<?php $plxShow->artAuthorInfos('<div class="infos">#art_authorinfos</div>'); ?>
		
		<!-- commentaires -->
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>		

	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>