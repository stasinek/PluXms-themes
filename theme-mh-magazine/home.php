<?php include(dirname(__FILE__).'/header.php'); ?>


        <div class="mh-wrapper mh-home clearfix">
            <div id="main-content" class="mh-content mh-home-content">
                <div id="mh_slider_hp-2" class="mh-widget mh-home-2 mh-widget-col-2 mh_slider_hp">
                    <div id="mh-slider-8019" class="flexslider mh-slider-widget mh-slider-normal">
                        <ul class="slides">
							<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
								<li class="mh-slider-item"  role="article" id="post-<?php echo $plxShow->artId(); ?>">
									<article class="post-<?php echo $plxShow->artId(); ?>">
										<a href="http://demo.mh-themes.com/magazine-lite/annual-festival-of-lights/" title="Annual festival of lights">
										<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=678&h=381&crop-to-fit" class="attachment-mh-magazine-lite-content size-mh-magazine-lite-content wp-post-image" alt="Lights" /> </a>
										<div class="mh-slider-caption">
											<div class="mh-slider-content"> 
											<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>">
											<h2 class="mh-slider-title"><?php $plxShow->artTitle(); ?></h2> </a>
												<div class="mh-slider-excerpt">
													<div class="mh-excerpt">
														<p><?php $plxShow->artChapo(''); ?></p>
													</div>
												</div>
											</div>
										</div>
									</article>
								</li>
							<?php endwhile; ?>
                        </ul>
                    </div>
                </div>
		<div class="mh-home-columns clearfix">
			<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-3">
				<div id="mh_custom_posts-3" class="mh-widget mh-home-3 mh_custom_posts">
					<h4 class="mh-widget-title">
						<span class="mh-widget-title-inner">
							<a href="index.php?categorie1/" class="mh-widget-title-link">
								Catégorie1
							</a>
						</span>
					</h4>
					<ul class="mh-custom-posts-widget clearfix">
						<?php $plxShow->lastArtList('
						<li class="post-56 mh-custom-posts-item mh-custom-posts-small clearfix">
							<figure class="mh-custom-posts-thumb">
								<a href="#art_url" title="#art_title">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small" alt="#img_alt"  /> </a>
							</figure>
							<div class="mh-custom-posts-header">
								<p class="mh-custom-posts-small-title"> 
									<a href="#art_url" title="#art_title"> 
										#art_title
									</a>
									</p>
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
						</li>',3); ?>
					</ul>
				</div>
				

				
				
				
				
				
				<div id="mh_custom_posts-4" class="mh-widget mh-home-3 mh_custom_posts">
					<h4 class="mh-widget-title">
						<span class="mh-widget-title-inner">
							<a href="index.php?categorie1/" class="mh-widget-title-link">
								Catégorie1
							</a>
					</span>
					</h4>
					<ul class="mh-custom-posts-widget clearfix">
						<?php $plxShow->lastArtList('
						<li class="post-56 mh-custom-posts-item mh-custom-posts-small clearfix">
							<figure class="mh-custom-posts-thumb">
								<a href="#art_url" title="#art_title">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small" alt="#img_alt"  /> </a>
							</figure>
							<div class="mh-custom-posts-header">
								<p class="mh-custom-posts-small-title"> 
									<a href="#art_url" title="#art_title"> 
										#art_title
									</a>
									</p>
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
						</li>',3); ?>
					</ul>
				</div>
				<div id="mh_custom_posts-6" class="mh-widget mh-home-3 mh_custom_posts">
					<h4 class="mh-widget-title">
						<span class="mh-widget-title-inner">
							<a href="index.php?categorie1/" class="mh-widget-title-link">
								Catégorie1
							</a>
					</span>
					</h4>
					<ul class="mh-custom-posts-widget clearfix">
						<?php $plxShow->lastArtList('
						<li class="post-56 mh-custom-posts-item mh-custom-posts-small clearfix">
							<figure class="mh-custom-posts-thumb">
								<a href="#art_url" title="#art_title">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small" alt="#img_alt"  /> </a>
							</figure>
							<div class="mh-custom-posts-header">
								<p class="mh-custom-posts-small-title"> 
									<a href="#art_url" title="#art_title"> 
										#art_title
									</a>
									</p>
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
						</li>',3); ?>
					</ul>
				</div>
			</div>
			<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-margin-left mh-home-area-4">
				<div id="mh_custom_posts-2" class="mh-widget mh-home-4 mh_custom_posts">
					<h4 class="mh-widget-title">
						<span class="mh-widget-title-inner">
							<a href="index.php?categorie1/" class="mh-widget-title-link">
								Catégorie1
							</a>
					</span>
					</h4>
					<ul class="mh-custom-posts-widget clearfix">
						<?php $plxShow->lastArtList('
						<li class="post-56 mh-custom-posts-item mh-custom-posts-small clearfix">
							<figure class="mh-custom-posts-thumb">
								<a href="#art_url" title="#art_title">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small" alt="#img_alt"  /> </a>
							</figure>
							<div class="mh-custom-posts-header">
								<p class="mh-custom-posts-small-title"> 
									<a href="#art_url" title="#art_title"> 
										#art_title
									</a>
									</p>
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
						</li>',3); ?>
					</ul>
				</div>
				<div id="mh_custom_posts-5" class="mh-widget mh-home-4 mh_custom_posts">
					<h4 class="mh-widget-title">
						<span class="mh-widget-title-inner">
							<a href="index.php?categorie1/" class="mh-widget-title-link">
								Catégorie1
							</a>
					</span>
					</h4>
					<ul class="mh-custom-posts-widget clearfix">
						<?php $plxShow->lastArtList('
						<li class="post-56 mh-custom-posts-item mh-custom-posts-small clearfix">
							<figure class="mh-custom-posts-thumb">
								<a href="#art_url" title="#art_title">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small" alt="#img_alt"  /> </a>
							</figure>
							<div class="mh-custom-posts-header">
								<p class="mh-custom-posts-small-title"> 
									<a href="#art_url" title="#art_title"> 
										#art_title
									</a>
									</p>
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
						</li>',3); ?>
					</ul>
				</div>
				<div id="mh_custom_posts-7" class="mh-widget mh-home-4 mh_custom_posts">
					<h4 class="mh-widget-title">
						<span class="mh-widget-title-inner">
							<a href="index.php?categorie1/" class="mh-widget-title-link">
								Catégorie1
							</a>
					</span>
					</h4>
					<ul class="mh-custom-posts-widget clearfix">
						<?php $plxShow->lastArtList('
						<li class="post-56 mh-custom-posts-item mh-custom-posts-small clearfix">
							<figure class="mh-custom-posts-thumb">
								<a href="#art_url" title="#art_title">
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=80&h=60&crop-to-fit" class="attachment-mh-magazine-lite-small" alt="#img_alt"  /> </a>
							</figure>
							<div class="mh-custom-posts-header">
								<p class="mh-custom-posts-small-title"> 
									<a href="#art_url" title="#art_title"> 
										#art_title
									</a>
									</p>
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
						</li>',3); ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="text-2" class="mh-widget mh-home-5 mh-widget-col-2 widget_text">
			<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Section de texte horizontal</span></h4>
			<div class="textwidget">
				<div style="font-size: 13px; background: #f6f6f6; padding: 20px; margin-bottom: 20px;">
					Couvre deux colonnes et peut avoir la longueur nécessaire pour dire tout ce qu'il y a à dire. 
				</div>
				<a title="MH Magazine WordPress Theme" href="http://www.mhthemes.com/themes/" target="_blank"><img src="http://www.mhthemes.com/ads/mh_magazine_teaser.png" alt="MH Magazine WordPress Theme"></a>
			</div>
		</div>
	</div>
	
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>