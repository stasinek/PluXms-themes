<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

<div id="content">

		<div class="post" id="post-<?php $plxShow->artId(); ?>">
			<h1><?php $plxShow->artTitle(); ?></h1>

			<?php $plxShow->artContent(); ?>
			
			<div class="post-info">
				Post&eacute; le <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> dans
				<?php $plxShow->artCat(); ?> | 
                                <span class="info_bottom">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></span> | 
				<a href="#form" title="Poster un commentaire" >Poster un commentaire</a>
			</div>
		</div>

		<?php $plxShow->artAuthorInfos('<div class="infos">#art_authorinfos</div>'); ?>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>

</div>

<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>