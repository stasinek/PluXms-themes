<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
            <!-- primary content -->
            <div id="primary-content">
              <div class="blocks">

                <!-- post -->
                <div class="post clearfix">
			<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
                  <div class="post-date">
                    <p class="day"><?php $plxShow->artDate('#day #num_day #month #num_year(4)'); ?></p>
                  </div>

                  <div class="post-info clearfix with-thumbs">
                    <p class="author alignleft"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> | <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></p>
                    <p class="comments alignright"><a href="#" class="comments"></a><?php $plxShow->artNbCom('#nb','#nb','#nb'); ?></p>
                  </div>

                  <div class="post-content clearfix">
                  <?php $plxShow->artContent(); ?>
                  </div>
                  
                  <?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
                  
                  <div class="post-tags">
                    <?php $plxShow->artTags(); ?>
                  </div>
                </div>
                <!-- /post -->
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>

              </div>
            </div>
            <!-- /primary content -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>