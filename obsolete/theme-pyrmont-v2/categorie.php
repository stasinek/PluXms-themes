<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="container">
	<div id="main">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post<?php echo $plxShow->artId; ?>">
				<div class="date">
					<?php $plxShow->artDate('#num_day.#num_month<br />#num_year(4)'); ?>
				</div>
				<div class="title">
					<h2><?php $plxShow->artTitle('link'); ?></h2>
					
					<div class="postmeta">
						Cat&eacute;gorie : <span class="category"><?php $plxShow->artCat(); ?></span>&nbsp;/ 
						<span class="comments"><?php $plxShow->artNbCom(); ?></span>
					</div><!-- end postmeta -->
				</div><!-- end title -->
				<div class="clear"></div>

				<div class="entry">
					<?php $plxShow->artChapo(); ?>
					<div class="clear"></div>
				</div><!-- end entry -->

			</div><!-- end post -->
		<?php endwhile; ?>
		
    	<div class="navigation">
    		<?php $plxShow->pagination(); ?>
    	</div><!-- end navigation -->
	</div><!-- end main -->
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<div class="clear"></div>
</div><!-- end container -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>