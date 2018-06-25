<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

	<div id="content">
        
    	<div id="leftcolumn" class="singlepost">

		
			<div class="post" id="post-<?php echo $plxShow->plxMotor->aStats[ $plxShow->staticId ]['url'] ?>">
            
                <div class="postdata">
                	<div class="title"><?php $plxShow->staticTitle(); ?></div>
                </div>
            
            	<div class="entry">
			<?php $plxShow->staticContent(); ?>
		</div>
                                
                <div class="tags"></div>
                                        
			</div>
		        
       	</div>

    	<div id="centercolumn" class="singlepost">
			<div id="sidebar"><?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?></div>
	</div>

		<div id="rightcolumn" class="singlepost">
			<?php include(dirname(__FILE__).'/adside.php'); # On insere les pubs ?>
		</div>

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>