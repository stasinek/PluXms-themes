<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
            <!-- primary content -->
            <div id="primary-content">
              <div class="blocks">

                <!-- page statique -->
                <div class="post clearfix">
			<h2 class="title"><?php $plxShow->staticTitle(); ?></h2>

                  <div class="post-content clearfix">
                  <?php $plxShow->staticContent(); ?>
                  </div>

                </div>
                <!-- /page statique -->

              </div>
            </div>
            <!-- /primary content -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>