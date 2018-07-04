<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>

	<div id="content">
    	
    	<div id="leftcolumn" class="singlepost">
        
            <div id="archives">

			<h2>Nos Archives</h2>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
        
				<div class="results">
            
					<h3 id="post-<?php echo $plxShow->plxMotor->plxRecord_arts->f('url') ?>"><?php $plxShow->artTitle('link'); ?></h3>
                                
                	<div class="details">Le <?php $plxShow->artDate('#day #num_day #month #num_year(4)'); ?> &middot; <?php $plxShow->artCat(); ?> &middot; <?php $plxShow->artNbCom(); ?></div>
                   
				</div>
                
		<?php endwhile; # Fin de la boucle sur les articles ?>

		<?php # On affiche la pagination ?>

		<div class="navigation">
			<?php $plxShow->pagination(); ?>
		</div>
                <?php # On affiche le fil Atom de cet article ?>
			<div class="searchagain">            
								<h2>Plus de messages dans cette catégorie</h2>
               <ul>	
                <li class="cat-item cat-item-1"><?php $plxShow->artFeed('atom',$plxShow->catId()); ?></li>
               </ul>			
            </div>        

        
        </div>
    
    	</div>

    	<div id="centercolumn" class="singlepost">
			<div id="sidebar"><?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar de droite ?></div>
	</div>

		<div id="rightcolumn" class="singlepost">
			<?php include(dirname(__FILE__).'/adside.php'); # On insere les pubs ?>
		</div>

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>