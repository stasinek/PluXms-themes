<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="container">
	<div id="main">
			<div class="post">
				<div class="date"><?php $plxPlugin->staticDate('#num_day.#num_month<br />#num_year(4)'); ?></div>
				<div class="title">
					<h2><?php $plxShow->staticTitle(); ?></h2>
				</div><!-- end title -->
				<div class="clear"></div>
				
				<div class="entry">
					<?php $plxShow->staticContent(); ?>
					<div class="clear"></div>
				</div><!-- end entry -->
			</div><!-- end post -->
	</div><!-- end main --> 
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<div class="clear"></div>
</div><!-- end container -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>