<?php if(!defined('PLX_ROOT')) exit; ?>
            <!-- sidebar -->
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
            <!-- sidebar -->

          </div>
        </div>
        <!-- /main content -->

        <!-- footer -->
        <div id="footer">
          <div class="page-content">
           <div id="copyright">
              &copy; <?php $plxShow->mainTitle('link'); ?> - 
              <?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>&nbsp;
		      <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>&nbsp; <?php $plxShow->lang('DESIGN_BY') ?> 
		      <?php $plxShow->httpEncoding() ?>
		      <br />
              <a class="rss-subscribe" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>">RSS Feeds</a> <a class="valid-xhtml" href="http://validator.w3.org/check?uri=referer" title="Valid XHTML">XHTML 1.1</a> 
              <a class="valid-xhtml" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
              <a id="goTop" class="js-link" name="goTop" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
           </div>
          </div>
        </div>
        <!-- /footer -->

      </div>
    </div>
    <!-- /shadow -->

    <!-- page controls -->
    <div id="pageControls"></div>
    <!-- /page controls -->

  </div>
  <!-- /page -->
  
  <!--[if lte IE 6]> <script type="text/javascript"> isIE6 = true; isIE = true; </script> <![endif]-->
  <!--[if gte IE 7]> <script type="text/javascript"> isIE = true; </script> <![endif]-->
  <script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.mystique.js"></script>
  
</body>
</html>