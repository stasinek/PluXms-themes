<?php include(dirname(__FILE__).'/header.php'); ?>

      <section id="article-section" class="line" >
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
               <!-- ARTICLE 1 -->               
               <article class="margin-bottom">
                  <div class="post-<?php echo array_rand(array_flip(array(1,2,3,4,5)),1);?> line">
                     <!-- image -->                 
                     <div class="s-12 l-11 post-image">                   
                        <?php $plxShow->artThumbnail(); ?>              
                     </div>
                     <!-- date -->                 
                     <div class="s-12 l-1 post-date">
						 <p class="date"><?php $plxShow->artDate('#num_day'); ?></p>
						 <p class="month"><?php $plxShow->artDate('#month'); ?></p>
                     </div>
                  </div>
                  <!-- text -->                 
                  <div class="post-text">
                     <h1><?php $plxShow->artTitle(); ?></h1>
					<small>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
					</small>

						<?php $plxShow->artContent(); ?>
						<?php $plxShow->artAuthorInfos('<p class="author">#art_authorinfos</p>'); ?>
						<footer>
							<small>
								<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
								<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
							</small>
						</footer>


						<?php include(dirname(__FILE__).'/commentaires.php'); ?>
                  </div>
               </article>
               <!-- AD REGION -->
               <div class="line">
                  <div class="advertising horizontal">
                     <img src="img/banner-horizontal.jpg" alt="ad banner">         
                  </div>
               </div>
            </div>

            <!-- SIDEBAR -->             
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>

		</div>
      </section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
