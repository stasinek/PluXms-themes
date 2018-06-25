<?php if (!defined('PLX_ROOT')) exit; ?>

      <footer class="footer-background">
            <div class="footer-content wrapper clear">
                <div class="clear">
                    <div class="tg-one-third">
                        <!--aside id="search-2" class="widget widget_search">
                            <div class="widget-title">
                                <h3>Search</h3></div>
                            <form role="search" method="get" class="searchform clear" action="https://demo.themegrill.com/masonic/">
                                <div class="masonic-search">
                                    <label class="screen-reader-text">Search for:</label>
                                    <input type="text" value="" name="s" placeholder="Type and hit enter..." />
                                </div>
                            </form>
                        </aside-->
                        <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                            <div class="widget-title">
                                <h3><?php $plxShow->lang('TAGS'); ?></h3></div>
                            <div class="tagcloud">
								<?php $plxShow->tagList('<a class="#tag_status" href="#tag_url" title="#tag_name" style="font-size: #tag_sizept;">#tag_name</a>'); ?>
							</div>
                        </aside>
                    </div>
                    <div class="tg-one-third">
                        <aside id="categories-3" class="widget widget_categories">
                            <div class="widget-title">
                                <h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
							</div>
                            <ul>
								<?php $plxShow->catList('','<li class="cat-item" id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
                            </ul>
                        </aside>
                    </div>
                    <div class="tg-one-third last">
                        <style>
                            .rpwe-block ul {
                                list-style: none!important;
                                margin-left: 0!important;
                                padding-left: 0!important;
                            }
                            
                            .rpwe-block li {
                                border-bottom: 1px solid #eee;
                                margin-bottom: 10px;
                                padding-bottom: 10px;
                                list-style-type: none;
                            }
                            
                            .rpwe-block a {
                                display: inline!important;
                                text-decoration: none;
                            }
                            
                            .rpwe-block h3 {
                                background: none!important;
                                clear: none;
                                margin-bottom: 0!important;
                                margin-top: 0!important;
                                font-weight: 400;
                                font-size: 12px!important;
                                line-height: 1.5em;
                            }
                            
                            .rpwe-thumb {
                                border: 1px solid #EEE!important;
                                box-shadow: none!important;
                                margin: 2px 10px 2px 0;
                                padding: 3px!important;
                            }
                            
                            .rpwe-summary {
                                font-size: 12px;
                            }
                            
                            .rpwe-time {
                                color: #bbb;
                                font-size: 11px;
                            }
                            
                            .rpwe-comment {
                                color: #bbb;
                                font-size: 11px;
                                padding-left: 5px;
                            }
                            
                            .rpwe-alignleft {
                                display: inline;
                                float: left;
                            }
                            
                            .rpwe-alignright {
                                display: inline;
                                float: right;
                            }
                            
                            .rpwe-aligncenter {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                            }
                            
                            .rpwe-clearfix:before,
                            .rpwe-clearfix:after {
                                content: "";
                                display: table !important;
                            }
                            
                            .rpwe-clearfix:after {
                                clear: both;
                            }
                            
                            .rpwe-clearfix {
                                zoom: 1;
                            }
                        </style>
                        <aside id="rpwe_widget-2" class="widget rpwe_widget recent-posts-extended">
                            <div class="widget-title">
                                <h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
							</div>
                            <div class="rpwe-block ">
                                <ul class="rpwe-ul">
									<?php $plxShow->lastArtList('
									<li class="rpwe-li rpwe-clearfix">
                                        <a class="rpwe-img #art_status" href="#art_url" rel="bookmark">
											<img class="rpwe-alignleft rpwe-thumb" src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=45&h=45&crop-to-fit" alt="#img_alt">
										</a>
                                        <h3 class="rpwe-title">
											<a href="#art_url" title="#art_title" rel="bookmark">#art_title</a>
										</h3>
										<time class="rpwe-time published">
											#num_day #month #num_year(4)
										</time>
                                    </li>',4); ?>
                                </ul>
                            </div>
                            <!-- Generated by http://wordpress.org/plugins/recent-posts-widget-extended/ -->
                        </aside>
                    </div>
                </div>
                <div class="copyright clear">
                    <div class="copyright-header">Masonic</div>
                    <div class="copyright-year">&copy; 2017</div>
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>"><span>PluXml</span></a>
                    <br> Thème par <a href="https://demo.themegrill.com/masonic/" target="_blank" title="ThemeGrill" rel="author"><span>ThemeGrill</span></a> </div>
            </div>
            <div class="angled-background"></div>
        </footer>

        <div style="display:none">
        </div>
 
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/scripts.js?ver=4.7'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/devicepx-jetpack.js?ver=201723'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/wpgroho.js?ver=62507ce4675b9502c672a5fa12610b86'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/imagesloaded.min.js?ver=3.2.0'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/masonry.min.js?ver=3.3.2'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery/jquery.masonry.min.js?ver=3.1.2b'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/masonry-setting.js?ver=20150106'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/search-toggle.js?ver=20150106'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/fitvids/jquery.fitvids.js?ver=20150331'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/fitvids/fitvids-setting.js?ver=20150331'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/skip-link-focus-fix.js?ver=20130115'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.bxslider/jquery.bxslider.min.js?ver=20130115'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/wp-embed.min.js?ver=62507ce4675b9502c672a5fa12610b86'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/e-201723.js' async defer></script>

    </body>

    </html>