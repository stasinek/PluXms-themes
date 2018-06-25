<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

	<div id="content">
    
    	<div id="doublecolumn" class="home">
        
        <!-- Announcement -->
        
        	<div class="announcement-middle">
            
        		<div class="announcement-top"></div>
                
                	<div class="announcement-text">
                    
        			<?php include(dirname(__FILE__).'/notifications.php'); # On insere les notifications ?>
                          
                    </div>
                    
            	<div class="announcement-bottom"></div>
                
            </div>
            
        <!-- Left Column -->
    	
		<div id="leftcolumn" class="home">
        
        	<?php include(dirname(__FILE__).'/sidebarleft.php'); # On insere la colonne ?>      
                  
		</div>
        
        <!-- Center Column -->
                    
		<div id="centercolumn" class="home">
        
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
			<div class="post" id="post-<?php echo $plxShow->plxMotor->plxRecord_arts->f('url') ?>">

            	<div class="roundedthumb">
                <a href="#"  rel="bookmark" title="<?php $plxShow->artTitle(); ?>"><img src="<?php $plxShow->template(); ?>/images/noimage.gif" alt="<?php $plxShow->artTitle(); ?>" class="timthumb" style="width:54px;height:54px;" /></a>
                </div>
                
                <div class="entry">
           
				<h2><?php $plxShow->artTitle('link'); ?></h2>

            
                <div class="excerpt"><p><?php $plxShow->artChapo(); ?></p></div>
                
                <div class="details">R&eacute;dig&eacute; par <?php $plxShow->artAuthor() ?> &middot; Le <?php $plxShow->artDate('#day #num_day #month #num_year(4)'); ?> &middot; Class&eacute; dans : <?php $plxShow->artCat(); ?> 
<p class="info_bottom">Mots cl&eacute;s : <?php $plxShow->artTags(); ?> <span><?php $plxShow->artNbCom(); ?></span></p>
                </div>
                
				</div>                             
			</div>
 		<?php endwhile; # Fin de la boucle sur les articles ?> 
		<?php # On affiche la pagination ?> 
		
		<div class="navigation">
			<?php $plxShow->pagination(); ?>
		</div>

		        
		</div>

        </div>
                
		<div id="rightcolumn" class="home">
			<div id="sidebar" class="home"><?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?></div>
		</div>
            
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>