<?php if (!defined('PLX_ROOT')) exit; ?>

                <div id="sidebar-subsidiary" class="sidebar">
                <hr>

                    <section class="widget">
						<?php $plxShow->lastArtList('
							<a href="index.php?categorie1" title="#img_alt">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=380" alt="#img_alt" />
							</a>',1,'1'); ?>
                    </section>
					
                    <section id="hybrid-tags-2" class="widget tags widget-tags">
                        <h3 class="widget-title"><?php $plxShow->lang('TAGS'); ?></h3>
                        <p class="term-cloud">
							<?php $plxShow->tagList('<a class="tag-link-#tag_size" style="font-size: #tag_size pt;" href="#tag_url" title="#tag_name">#tag_name</a>'); ?>
						</p>
                    </section>

                    <section id="text-2" class="widget widget_text widget-widget_text">
						<?php $plxShow->lastArtList('
                        <h3 class="widget-title">#art_title</h3>
                        <div class="textwidget">
							#art_content
                        </div>',1,'1'); ?>
                    </section>

                </div>
                <!-- #sidebar-subsidiary .aside -->

                <div id="footer">

                    <div class="footer-content">

                        <p class="copyright">Copyright &#169; 2016 <?php $plxShow->mainTitle('link'); ?> - 
					<?php $plxShow->subTitle(); ?> - 
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					Design <a class="site-link" href="http://demo.alienwp.com/hatch" title="Joanna Doe" target="_blank"><span>AlienWP</span></a> 
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
					<?php $plxShow->httpEncoding() ?>
					<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
                   </p>
						
					</div>

                </div>
                <!-- #footer -->

      </div>
        <!-- #container -->

        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js?ver=1.0'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.fitvids.js?ver=1.0'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/footer-scripts.js?ver=1.0'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/drop-downs.min.js?ver=20130805'></script>

    </body>

</html>
