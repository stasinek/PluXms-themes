<?php if(!defined('PLX_ROOT')) exit; ?>

		<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-6">
			<div id="search-3" class="mh-widget mh-home-6 widget_search">
				
				
				<h4 class="mh-widget-title">
					<span class="mh-widget-title-inner">
						Recherche
					</span>
				</h4>
				<?php	
				$placeholder = '';
				# récupération d'une instance de plxMotor
				$plxMotor = plxMotor::getInstance();
				$plxPlugin = $plxMotor->plxPlugins->getInstance('plxMySearch');
				$searchword = '';
				if(!empty($_POST['searchfield'])) {
					$searchword = plxUtils::strCheck(plxUtils::unSlash($_POST['searchfield']));
				}
				if($plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang)!='') {
					$placeholder=' placeholder="'.$plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang).'"';
				}
				?>

				
				<form  class="search-form"  action="<?php echo $plxMotor->urlRewrite('?'.$plxPlugin->getParam('url')) ?>" method="post">
					<div class="searchfields">
						<?php
						if($plxPlugin->getParam('checkboxes_'.$plxPlugin->default_lang)!='') {
							if($chk = explode(';', $plxPlugin->getParam('checkboxes_'.$plxPlugin->default_lang))) {
								echo '<ul>';
								foreach($chk as $k => $v) {
									$c = plxUtils::title2url(trim($v));
									$sel = "";
									if(isset($_POST['searchcheckboxes'])) {
										foreach($_POST['searchcheckboxes'] as $s) {
											if($s==$c) {
												$sel = ' checked="checked"';
											}
										}
									}
									echo '<li><input'.$sel.' class="searchcheckboxes" type="checkbox" name="searchcheckboxes[]" id="id_searchcheckboxes[]" value="'.$c.'" />&nbsp;'.plxUtils::strCheck($v).'</li>';
								}
								echo '</ul>';
							}
						}
						?>
						<input type="text" <?php echo $placeholder ?> class="search-field" name="searchfield" value="<?php echo $searchword ?>" />
						<input type="submit" class="search-submit" name="searchbutton" value="<?php echo $plxPlugin->getParam('frmLibButton_'.$plxPlugin->default_lang) ?>" />
					</div>
				</form>

				</div>
			
			
			
			
			<div id="text-6" class="mh-widget mh-home-6 widget_text">
				<h4 class="mh-widget-title"><span class="mh-widget-title-inner">De la pub!</span></h4>
				<div class="textwidget">
					<div class="mh-ad-spot">
						<img alt="MH Themes" src="<?php $plxShow->template(); ?>/preview.jpg">
					</div>
				</div>
			</div>
			<div id="mh_custom_posts-9" class="mh-widget mh-home-6 mh_custom_posts">
				<h4 class="mh-widget-title">
					<span class="mh-widget-title-inner">
						<?php $plxShow->lang('LATEST_ARTICLES'); ?>
					</span>
				</h4>
				<ul class="mh-custom-posts-widget clearfix">
					<?php $plxShow->lastArtList('
					<li class="post-70 mh-custom-posts-item mh-custom-posts-small clearfix">
						<figure class="mh-custom-posts-thumb">
							<a href="#art_url" title="Indulge yourself">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small size-mh-magazine-lite-small wp-post-image" alt="Wellness Temple" /> 
							</a>
						</figure>
						<div class="mh-custom-posts-header">
							<p class="mh-custom-posts-small-title"> <a href="#art_url" title="#art_title"> #art_title </a></p>
							<div class="mh-meta mh-custom-posts-meta"> 
								<span class="mh-meta-date updated">
									<i class="fa fa-clock-o"></i>#art_date
								</span> 
								<span class="mh-meta-comments">
									<i class="fa fa-comment-o"></i>
									<a class="mh-comment-count-link" href="#art_url">
										#art_nbcoms
									</a>
								</span>
							</div>
						</div>
					</li>',5); ?>
				</ul>
			</div>
			<div id="text-4" class="mh-widget mh-home-6 widget_text">
				<div class="textwidget">
					<div class="mh-ad-spot">
						<a title="Themes by MH Themes" href="http://www.mhthemes.com/themes/" target="_blank"> 
							<img alt="MH Themes" src="http://www.mhthemes.com/ads/dummy_ad_300x250.png">
						</a>
					</div>
				</div>
			</div>
			<div id="tag_cloud-2" class="mh-widget mh-home-6 widget_tag_cloud">
				<h4 class="mh-widget-title">
					<span class="mh-widget-title-inner">
						<?php $plxShow->lang('TAGS'); ?>
					</span>
				</h4>
				<div class="tagcloud">
					<?php $plxShow->tagList('<a style="font-size: 12px;" href="#tag_url" title="#tag_name">#tag_name</a>'); ?>
				</div>
			</div>
			
			
			<div class="mh-widget mh-home-6 ">
				<h4 class="mh-widget-title">
					<span class="mh-widget-title-inner">
						<?php $plxShow->lang('ARCHIVES'); ?>
					</span>
				</h4>
				<div>
					<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
				</div>
			</div>
		
		</div>