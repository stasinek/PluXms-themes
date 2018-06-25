<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
		<div id="main">
			<div class="col">
				<h4><?php $plxShow->lang('ERROR') ?> :</h4>
				<div class="article">
					<?php $plxShow->erreurMessage(); ?>
					<p class="center"><?php $plxShow->erreurMessage(); ?></p>
					<p class="center"><a href="./" title="<?php $plxShow->lang('BACKTO_HOME') ?>"><?php $plxShow->lang('BACKTO_HOME') ?></a></p>
				</div>
			</div>
		</div>
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
	</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
