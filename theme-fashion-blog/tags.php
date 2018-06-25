<?php include(dirname(__FILE__).'/header.php'); ?>

      <section id="article-section" class="line archive">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
                <h1   style="color: #fff;"><?php $plxShow->tagName(); ?></h1>
          		<?php $cote='gauche';
				while($plxShow->plxMotor->plxRecord_arts->loop()): ?>							
				   <article class="margin-bottom ">
					  <div class="post-<?php echo array_rand(array_flip(array(1,2,3,4,5)),1);?> <?php if ($cote=='gauche') { echo ' right-align '; $cote='droite';} else {$cote='gauche';} ?>  line ">
						 <!-- image -->                 
						 <div class="s-12 l-11 post-image">                   
							 <a href="<?php $plxShow->artUrl(); ?>">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=600&h=200&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>">
							 </a>                
						 </div>
						 <!-- date -->                 
						 <div class="s-12 l-1 post-date">
							 <p class="date"><?php $plxShow->artDate('#num_day'); ?></p>
							 <p class="month"><?php $plxShow->artDate('#month'); ?></p>
						 </div>
					  </div>
					  <!-- text -->                 
					  <div class="post-text">
						 <a href="post-1.html">
							<h2><?php $plxShow->artTitle(); ?></h2>
						 </a>
						 <p>
							<?php $plxShow->artChapo(''); ?>
						 </p>
						 <a class="continue-reading" href="<?php $plxShow->artUrl(); ?>">Lire la suite</a>
					  </div>
				   </article>
  				<?php endwhile; ?>               
				<nav class="text-center">
					<?php $plxShow->pagination(); ?>
				</nav>
				<span>
					<?php $plxShow->tagFeed() ?>
				</span>
            </div>
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
         </div>
      </section>
<?php include(dirname(__FILE__).'/footer.php'); ?>

