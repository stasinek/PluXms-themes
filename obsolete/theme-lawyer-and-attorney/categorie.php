<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
			<?php $plxShow->plxMotor->plxRecord_arts->loop(); ?>
			<div class="col">
				<h2><?php $plxShow->artTitle(); ?></h2>
				<p><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->lang('CLASSIFIED_IN') ?> <?php $plxShow->artCat(); ?></p>
				<p class="date"><?php $plxShow->artDate('<span>#num_day</span><br />#num_month | #num_year(2)'); ?></p>
				<?php $plxShow->artChapo(); ?>
				<p class="info_bottom"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?><span> - <?php $plxShow->artNbCom(); ?></span></p>
			</div>

			<?php $plxShow->plxMotor->plxRecord_arts->loop(); ?>
			<div class="col">
				<h2><?php $plxShow->artTitle(); ?></h2>
				<p><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->lang('CLASSIFIED_IN') ?> <?php $plxShow->artCat(); ?></p>
				<p class="date"><?php $plxShow->artDate('<span>#num_day</span><br />#num_month | #num_year(2)'); ?></p>
				<?php $plxShow->artChapo(); ?>
				<p class="info_bottom"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?><span> - <?php $plxShow->artNbCom(); ?></span></p>
			</div>
			<div class="clr"></div>
		</div>

		<div id="main">
			<div class="col">
				<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
				<div class="article">
					<h4><?php $plxShow->artTitle('link'); ?></h4>
					<p><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?></p>
					<p class="date"><?php $plxShow->artDate('<span>#num_day</span><br />#num_month | #num_year(2)'); ?></p>
					<?php $plxShow->artChapo($format=""); ?>
					<p class="info_bottom"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?><span> - <?php $plxShow->artNbCom(); ?></span></p>
				</div>
				<div class="separator">&nbsp;</div>
				<?php endwhile; # Fin de la boucle sur les articles ?>
				<?php $plxShow->pagination(); ?>
			</div>
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
		</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
