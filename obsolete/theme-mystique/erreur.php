<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
            <!-- primary content -->
            <div id="primary-content">
              <div class="blocks">

                <!-- page statique -->
                <div class="post clearfix">
			      <h2 class="title"><?php $plxShow->lang('ERROR') ?></h2>

                  <div class="post-content clearfix">
			        <p style="text-align:center;"><?php $plxShow->erreurMessage(); ?></p>
			        <p style="text-align:center;"><a href="./" title="<?php $plxShow->Lang('HOME') ?>"> => <?php $plxShow->Lang('HOME') ?></a></p>
                  </div>

                </div>
                <!-- /page statique -->

              </div>
            </div>
            <!-- /primary content -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>