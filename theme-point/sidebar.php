<?php if(!defined('PLX_ROOT')) exit; ?>

<aside class="sidebar c-4-12">
	<div id="sidebars" class="sidebar">
		<div class="sidebar_list">
			<aside id="social-profile-icons-2" class="widget social-profile-icons">
				<div class="social-profile-icons">
					<ul class=""><li class="social-facebook"><a title="Facebook" href="#"><i class="point-icon icon-facebook"></i></a></li><li class="social-flickr"><a title="Flickr" href="#"><i class="point-icon icon-flickr"></i></a></li><li class="social-gplus"><a title="Google+" href="#"><i class="point-icon icon-gplus"></i></a></li><li class="social-pinterest"><a title="Pinterest" href="#"><i class="point-icon icon-pinterest-circled"></i></a></li><li class="social-dribbble"><a title="Dribbble" href="#"><i class="point-icon icon-dribbble"></i></a></li><li class="social-linkedin"><a title="LinkedIn" href="#"><i class="point-icon icon-linkedin"></i></a></li><li class="social-twitter"><a title="Twitter" href="#"><i class="point-icon icon-twitter"></i></a></li><li class="social-vimeo"><a title="Vimeo" href="#"><i class="point-icon icon-vimeo-squared"></i></a></li><li class="social-stumbleupon"><a title="StumbleUpon" href="#"><i class="point-icon icon-stumbleupon"></i></a></li><li class="social-tumblr"><a title="Tumblr" href="#"><i class="point-icon icon-tumblr"></i></a></li><li class="social-youtube"><a title="YouTube" href="#"><i class="point-icon icon-youtube"></i></a></li><li class="social-email"><a title="Email" href="#"><i class="point-icon icon-mail"></i></a></li><li class="social-rss"><a title="RSS" href="#"><i class="point-icon icon-rss"></i></a></li></ul>
				</div>
			</aside>

			<aside id="search-2" class="widget widget_search">
					<?php	
					$placeholder = '';
					# récupération d'une instance de plxMotor
					$plxMotor = plxMotor::getInstance();
					$plxPlugin = $plxMotor->plxPlugins->getInstance('plxMySearch');
					$searchword = '';
					?>
						<form  id="searchform" class="search-form" action="<?php echo $plxMotor->urlRewrite('?'.$plxPlugin->getParam('url')) ?>" method="post">
							<fieldset>
								<input type="text"  id="s"  name="searchfield" value="<?php echo $searchword ?>" />
								<button id="search-image" class="sbutton" type="submit" value="">
								<i class="point-icon icon-search"></i>
								</button>
							</fieldset>
						</form>
			</aside>	

			<aside id="wp_review_tab_widget-2" class="widget widget_wp_review_tab">	
				<h3 class="widget-title"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
				<div class="wp_review_tab_widget_content" id="wp_review_tab_widget-2_content">		
					<div class="inside">        
						<div id="toprated-tab-content" class="tab-content" style="display: block;">      
							<ul>
								<?php $plxShow->lastArtList('
								<li  style="list-style: none;">
									<a title="#art_title" rel="nofollow" href="#art_url">		
										<div class="wp_review_tab_thumbnail wp_review_tab_thumb_small">	
											<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=65&h=65&crop-to-fit" class="attachment-wp_review_small size-wp_review_small wp-post-image" alt="wallpaper-2386176" title="" srcset="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=65&h=65&crop-to-fit">		
										</div>
										<div class="title-right">
											<div class="entry-title">
												#art_title
											</div>
											<div class="wp-review-tab-postmeta">								
												#art_date		
											</div>
										</div>
										<div class="clear"></div>			
									</a>
								</li>
								',3); ?>
							</ul>
							<div class="clear"></div>
						</div>       
					</div> 	
					<div class="clear"></div>
				</div>    
			</aside>	

			<aside id="mts_ad_widget-2" class="widget mts_ad_widget">
				<h3 class="widget-title">Nos commanditaires</h3>
				<div class="ad-125">
				<ul><li class="oddad"><a href="http://mythemeshop.com/">
				<img src="http://demo.mythemeshop.com/point/wp-content/themes/point/images/125x125.png" width="125" height="125" alt="">
				</a></li><li class="evenad">
				<a href="http://mythemeshop.com/">
				<img src="http://demo.mythemeshop.com/point/wp-content/themes/point/images/125x125.png" width="125" height="125" alt="">
				</a></li></ul></div>
				</aside>
				<aside id="mts_ad_300_widget-2" class="widget mts_ad_300_widget"><div class="ad-300"><a href="http://mythemeshop.com/">
				<img src="http://demo.mythemeshop.com/point/wp-content/themes/point/images/300x250.png" width="300" height="250" alt="">
				</a></div>
			</aside>

			<aside id="recent-posts-2" class="widget widget_recent_entries">
				<h3 class="widget-title"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
				<ul>
					<?php $plxShow->lastArtList('
					<li>
					<a href="#art_url">#art_title</a>
					</li>'); ?>
				</ul>
			</aside>

			<aside id="tag_cloud-2" class="widget widget_tag_cloud">
				<h3 class="widget-title"><?php $plxShow->lang('TAGS'); ?></h3>
				<div class="tagcloud">
					<?php $plxShow->tagList('
					<a href="#tag_url"  style="font-size: 8pt;">#tag_name</a>'); ?>
				</div>
			</aside>
		</div>    
	</div>
</aside>

