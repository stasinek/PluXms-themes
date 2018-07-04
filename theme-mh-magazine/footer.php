<?php if (!defined('PLX_ROOT')) exit; ?>
        <footer class="mh-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
            <div class="mh-container mh-container-inner mh-footer-widgets mh-row clearfix">
                <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-1">
                    <div id="recent-posts-2" class="mh-footer-widget widget_recent_entries">
                        <h6 class="mh-widget-title mh-footer-widget-title">
							<span class="mh-widget-title-inner mh-footer-widget-title-inner">
								<?php $plxShow->lang('LATEST_ARTICLES'); ?>
							</span>
						</h6>
                        <ul>
							<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
                        </ul>
                    </div>
                </div>
                <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-2">
                    <div id="nav_menu-2" class="mh-footer-widget widget_nav_menu">
                        <h6 class="mh-widget-title mh-footer-widget-title">
							<span class="mh-widget-title-inner mh-footer-widget-title-inner">
								<?php $plxShow->lang('LATEST_COMMENTS'); ?>
							</span>
						</h6>
                        <div class="menu-information-container">
                            <ul id="menu-information" class="menu">
								<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-3">
                    <div id="categories-2" class="mh-footer-widget widget_categories">
                        <h6 class="mh-widget-title mh-footer-widget-title">
							<span class="mh-widget-title-inner mh-footer-widget-title-inner">
								<?php $plxShow->lang('CATEGORIES'); ?>
							</span>
						</h6>
                        <ul>
							<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
                        </ul>
                    </div>
                </div>
                <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-4">
                    <div id="text-5" class="mh-footer-widget widget_text">
                        <h6 class="mh-widget-title mh-footer-widget-title"><span class="mh-widget-title-inner mh-footer-widget-title-inner">Questions?</span></h6>
                        <div class="textwidget">If you have any questions regarding this free WordPress theme, don't hesitate to contact us via Facebook, Twitter or our website. We love to get feedback and we will do our best to make you happy.</div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="mh-copyright-wrap">
            <div class="mh-container mh-container-inner clearfix">
                <p class="mh-copyright">Copyright &copy; 2015 <?php $plxShow->mainTitle('link'); ?> | <?php $plxShow->subTitle(); ?> 
					| Thème par <a target="_blank" href="http://demo.mh-themes.com/magazine-lite/" rel="nofollow">MH Themes</a>
					| <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					| <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
				</p>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/scripts.js?ver=4.6.1'></script>
</body>

</html>
