<?php if (!defined('PLX_ROOT')) exit; ?>

        <div id="footer-wrap" class="site-footer clr">

            <div id="footer" class="clr container">

                <div id="footer-widgets" class="wpex-row clr">

                    <div class="footer-box span_1_of_3 col col-1">
                        <div class="footer-widget widget_text clr">
                            <h6 class="widget-title">Stan.</h6>
                            <div class="textwidget">Suspendisse ipsum leo, rhoncus sed nunc vel, accumsan cursus erat. Nulla gravida congue purus ultrices commodo. Quisque viverra lacinia leo et iaculis.</div>
                        </div>
                    </div>

                    <div class="footer-box span_1_of_3 col col-2">
                        <div class="footer-widget widget_categories clr">
                            <h6 class="widget-title" style="text-transform: uppercase;"><?php $plxShow->lang('CATEGORIES'); ?></h6>
                            <ul>
								<?php $plxShow->catList('','<li  class="cat-item" id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
                                <li class="cat-item cat-item-4"><a href="https://sstsoft.pl">Wróć na portal</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-box span_1_of_3 col col-3">
                        <div class="footer-widget widget_recent_entries clr">
                            <h6 class="widget-title"  style="text-transform: uppercase;"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h6>
                            <ul>
								<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="copyright-wrap" class="clr">

            <div id="copyright" role="contentinfo" class="clr">
				<?php $plxShow->httpEncoding() ?><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
				&nbsp;-&nbsp;<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				Thème être base&nbsp;<a href="http://themeforest.net/user/WPExplorer?ref=WPExplorer" target="_blank" title="WPExplorer">WPExplorer / themeforest.net</a>
			</div>
            <!-- #copyright -->

        </footer>
        <!-- #footer-wrap -->
        </div>
        <!-- #wrap -->

        <!--div id="mobile-search">
            <form method="get" action="http://wpexplorer-demos.com/blogger/" role="search" id="mobile-search-form">
                <input type="search" class="field" name="s" value="" placeholder="To search type and hit enter" />
            </form>
        </div-->
 
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/scripts.js?ver=4.8'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/plugins.js?ver=2.0.0'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/global.js?ver=2.0.0'></script>
    </body>

    </html>