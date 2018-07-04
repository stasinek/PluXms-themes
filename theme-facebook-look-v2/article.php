<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

	<div id="content">
    
    	<div id="leftcolumn" class="singlepost">

			<div class="post" id="post-<?php echo $plxShow->plxMotor->plxRecord_arts->f('url') ?>">
            
                <div class="postdata">
                	<div class="title"><?php $plxShow->artTitle(); ?></div>Le <?php $plxShow->artDate('#day #num_day #month #num_year(4) &agrave; #hour:#minute'); ?> &nbsp;|&nbsp; Par <?php $plxShow->artAuthor(); ?> &nbsp;|&nbsp; Dans <?php $plxShow->artCat(); ?></div>
            
            	<div class="entry">
		<?php $plxShow->artContent(); ?>
		</div>
                                
                <div class="tags"></div>
                                        
		</div>
<!-- Template commentaires -->

<div id="commentscontainer">

<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>

</div>

          
    <?php include(dirname(__FILE__).'/commentside.php'); # On insere les pub sur les comms ?>

		</div>
    
    	<div id="centercolumn" class="singlepost">
			<div id="sidebar"><?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar de droite ?></div>
	</div>

		<div id="rightcolumn" class="singlepost">
			<?php include(dirname(__FILE__).'/adside.php'); # On insere les pubs ?>
		</div>

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>