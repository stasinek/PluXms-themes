<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">

		<div id="article">

				<h2><?php $plxShow->artTitle(''); ?></h2>
				<div class="art-infos">
					<p class="art-infos-left"><?php $plxShow->lang('WRITTEN_BY') ?> <span class="art-auth"><?php $plxShow->artAuthor() ?></span> le <span class="art-date"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span> | <?php $plxShow->lang('CLASSIFIED_IN') ?> <span class="art-cate"><?php $plxShow->artCat(); ?></span><br /><?php $plxShow->lang('TAGS') ?> : <span class="art-tags"><?php $plxShow->artTags(); ?></span></p>
					<p class="art-infos-right"><span class="nbcom"><?php $plxShow->artNbCom(); ?></span></p>
				</div>
				<div class="art-chapo"><?php $plxShow->artContent(); ?></div>
				<div class="author-infos"><?php $plxShow->artAuthorInfos('#art_authorinfos'); ?></div>
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>

