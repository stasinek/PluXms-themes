<?php if (!defined('PLX_ROOT')) exit; ?>

            <footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">

                <div class="site-footer-area footer-area-site-info">
                    <div class="site-info-container">
                        <div class="site-info" role="contentinfo">
							&copy; 2015 <?php $plxShow->mainTitle('link'); ?> - 
							<?php $plxShow->subTitle(); ?> <br/> 
							<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
							<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
							 - 
							<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
							 <br/>Theme par <a rel="nofollow" target= "_blank" href="http://themedemos.webmandesign.eu/receptar/">WebMan Design</a>.
						</div>
                    </div>
                </div>

            </footer>

        </div>
        <!-- /.site-inner -->
    </div>
    <!-- /#page -->

    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jetpack.js'></script>
    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/sharing.js'></script>
    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/slick.min.js'></script>
    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/scripts-global.js'></script>
    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/skip-link-focus-fix.js'></script>
	<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/tiled-gallery.js'></script>

</body>

</html>