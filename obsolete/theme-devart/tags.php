<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content">

		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>

			<div class="post" id="post-<?php $plxShow->artId(); ?>">
				<h1><?php $plxShow->artTitle('link'); ?></h1>
				<?php $plxShow->artChapo('<p class="serif">Lire la suite de #art_title &raquo;</p>'); ?>
				<div class="post-info">
					Post&eacute; le <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> dans
					<?php $plxShow->artCat(); ?> | 
					<?php $plxShow->artNbCom(); ?> | 
                                        <span class="info_bottom">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></span>
				</div>
			</div>

		<?php endwhile; ?>

		<div id="p(>

		<div id="p(>

		<div id="p(>

		<div 