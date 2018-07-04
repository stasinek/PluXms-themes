<?php include(dirname(__FILE__).'/header.php'); ?>

      <!-- MAIN SECTION -->                  
      <section id="home-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
				<?php $cote='gauche';
				while($plxShow->plxMotor->plxRecord_arts->loop()): ?>							
					<article class="post-<?php echo array_rand(array_flip(array(1,2,3,4,5)),1);?> <?php if ($cote=='gauche') { echo ' right-align '; $cote='droite';} else {$cote='gauche';} ?> line">
					  <!-- image -->                 
					  <div class="s-12 l-6 post-image">                   
						 <a href="<?php $plxShow->artUrl(); ?>">
							<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=600&h=529&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>">
						 </a>                
					  </div>
					  <!-- text -->                 
					  <div class="s-12 l-5 post-text">
						<a href="<?php $plxShow->artUrl(); ?>">
							<h2><?php $plxShow->artTitle(); ?></h2>
						</a>
						<p><?php $plxShow->artChapo(''); ?> </p>
					  </div>
					  <div class="s-12 l-1 post-date">
						 <p class="date"><?php $plxShow->artDate('#num_day'); ?></p>
						 <p class="month"><?php $plxShow->artDate('#month'); ?></p>
					  </div>
				   </article>
				<?php endwhile; ?>               
            </div>
			
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
			
         </div>
      </section>
<?php include(dirname(__FILE__).'/footer.php'); ?>
