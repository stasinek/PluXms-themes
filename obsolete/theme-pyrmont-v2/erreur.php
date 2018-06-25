<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="container">
	<div id="main">
    	<div class="post">
			<div class="title">
				<h2>Une erreur a &eacute;t&eacute; d&eacute;tect&eacute;e</h2>
			</div><!-- end title -->
			<div class="clear"></div>
			
			<div class="entry">
				<p><?php $plxShow->erreurMessage(); ?></p>
			</div><!-- end entry -->
		</div><!-- end post -->
		
	</div><!-- end main --> 
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<div class="clear"></div>
</div><!-- end container -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>