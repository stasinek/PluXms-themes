<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">

		<div id="article">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<h2><?php $plxShow->artTitle('link'); ?></h2>
				<div class="art-infos">
					<p class="art-infos-left"><?php $plxShow->lang('WRITTEN_BY') ?> <span class="art-auth"><?php $plxShow->artAuthor() ?></span> le <span class="art-date"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span> | <?php $plxShow->lang('CLASSIFIED_IN') ?> <span class="art-cate"><?php $plxShow->artCat(); ?></span><br /><?php $plxShow->lang('TAGS') ?> : <span class="art-tags"><?php $plxShow->artTags(); ?></span></p>
					<p class="art-infos-right"><span class="nbcom"><?php $plxShow->artNbCom(); ?></span></p>
				</div>
				<div class="art-chapo"><?php $plxShow->artChapo(); ?></div>
			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
