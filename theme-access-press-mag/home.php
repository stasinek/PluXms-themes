<?php include(dirname(__FILE__).'/header.php'); ?>

<div id="content" class="site-content">
	<section class="slider-wrapper">
		<div class="apmag-container">
			<div class="slider-highlight-section">
				<div class="apmag-slider-area">
					<div id="homeslider-mobile">
						<?php while($plxShow->plxMotor->plxRecord_arts->loop()):?>

							<div class="slider">
								<a href="<?php $plxShow->artUrl(); ?>">
									<div class="big_slide wow fadeInLeft">
										<div class="big-cat-box">
											<!--span class="cat-name">
												<?php //$plxShow->artTags('#tag_name',',') ?>
											</span-->
											<span class="comment_count">
												<i class="fa fa-comments"></i>
												<?php echo intval($plxMotor->plxRecord_arts->f('nb_com')) ?>
											</span>
										</div>
										<!-- .big-cat-box -->
										<div class="slide-image">
											<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=765&h=496&crop-to-fit" alt="" />
										</div>

										<div class="mag-slider-caption">
											<h3 class="slide-title">
												<?php $plxShow->artTitle(); ?>
											</h3>
										</div>
									</div>
								</a>
							</div>
							<?php endwhile; ?>

					</div>
				</div>
				<!-- .apmag-slider-area -->
				<div class="beside-highlight-area">
					<div class="highlighted_posts_area">
						<?php $plxShow->lastArtList('
						<div class="signle-highlight-post">
							<figure class="highlighted-post-image">
								<a href="#art_url" title="#art_title">
									<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=326&h=235&crop-to-fit" alt="#img_alt" />
								</a>
							</figure>
							<div class="post-desc-wrapper">
								<h3 class="post-title">
									<a href="#art_url">#art_title</a>
								</h3>
								<div class="block-poston">
									<span class="posted-on">
										<a href="#art_url" rel="bookmark">
											<time class="entry-date published" datetime="#art_date">#art_date</time>
										</a>
									</span>
									<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
							</div>
						</div>',4); ?>
					</div>
				</div>
				<!-- .beside-highlight-area -->
			</div>
			<!-- .slider-highlight-section -->
		</div>
		<!-- .apmag-container -->
	</section>
	<!-- .slider-wrapper -->
	<div class="apmag-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<section class="first-block wow fadeInUp clearfix" data-wow-delay="0.5s">
					<div class="first-block-wrapper">
						<h3 class="block-cat-name"> 
			<span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span>
		</h3>
						<div class="block-post-wrapper clearfix">
							<div class="toppost-wrapper">
								<?php $plxShow->lastArtList('
								<div class="single_post clearfix top-post non-zoomin">

									<div class="post-image">
									<a href="#art_url">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=554&h=305&crop-to-fit" alt="" />
									</a>
										<a class="big-image-overlay" href="#art_url">
											<i class="fa fa-external-link"></i>
										</a>
									</div>
									<!--. post-image-->
									<div class="post-desc-wrapper">
										<h3 class="post-title">
										<a href="#art_url">#art_title</a></h3>
										<div class="block-poston">
											<span class="posted-on">
											<a href="#art_url" rel="bookmark">
												<time class="entry-date published" datetime="#art_date">#art_date</time>
											</a>
											</span>
											<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span>
										</div>
									</div>
									<!-- .post-desc-wrapper -->
									<div class="post-content">
										<p>#art_chapo</p>
									</div>
								</div>',2); ?>
								<div class="clearfix"></div>
							</div>
							<div class="bottompost-wrapper">
								<?php $plxShow->lastArtList('
								<div class="single_post clearfix ">
									<div class="post-image">
										<a href="#art_url">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" /></a>
									</div>
									<!--. post-image-->
									<div class="post-desc-wrapper">
										<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
										<div class="block-poston">
										<span class="posted-on">
										<a href="#art_url" rel="bookmark">
										<time class="entry-date published" datetime="#art_date">#art_time</time>
										</a>
										</span><span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
									</div>
									<!-- .post-desc-wrapper -->
								</div>',4,'','',$sort='random'); ?>
								<div class="clearfix"></div>
							</div>
							<!-- .block-post-wrapper -->
						</div>
						<!-- .first-block-wrapper -->
				</section>
				<!-- .first-block -->

				<section class="second-block clearfix wow fadeInLeft" data-wow-delay="0.5s">
					<div class="second-block-wrapper">
						<h3 class="block-cat-name"> 
							<span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span>
						</h3>
						<div class="block-post-wrapper clearfix">
							<?php $plxShow->lastArtList('
							<div class="leftposts-wrapper">
								<div class="single_post clearfix first-post non-zoomin">
									<div class="post-image">
										<a href="#art_url">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" /></a>
										<a class="big-image-overlay" href="#art_url">
										<i class="fa fa-external-link"></i></a>
										</div>
									<!--. post-image-->
									<div class="post-desc-wrapper">
										<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
										<div class="block-poston"><span class="posted-on">
										<a href="#art_url" rel="bookmark">
											<time class="entry-date published" datetime="#art_date">#art_date</time>
										</a>
									</span>
									<span class="comment_count">
										<i class="fa fa-comments"></i>#art_nbcoms
									</span>
									</div>
									</div>
									<!-- .post-desc-wrapper -->
									<div class="post-content">
										<p>#art_chapo</p>
									</div>
								</div>
								<!-- .single_post -->
							</div>',1); ?>
							
							<div class="rightposts-wrapper">
								<?php $plxShow->lastArtList('
								<div class="single_post clearfix ">
									<div class="post-image">
										<a href="#art_url">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" /></a>
									</div>
									<!--. post-image-->
									<div class="post-desc-wrapper">
										<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
										<div class="block-poston">
											<span class="posted-on">
											<a href="#art_url" rel="bookmark">
												<time class="entry-date published" datetime="#art_date">#art_date</time>
											</a>
											</span>
											<span class="comment_count">
												<i class="fa fa-comments"></i>#art_nbcoms
											</span>
										</div>
									</div>
									<!-- .post-desc-wrapper -->
								</div>',4); ?>

							</div>
						</div>
						<!-- .block-post-wrapper -->
					</div>
					<!-- .second-block-wrapper -->
				</section>
				<!-- .second-block -->

				<div class="homepage-middle-ad wow flipInX" data-wow-delay="1s">
					<aside id="text-12" class="widget widget_text widget-ads">
						<div class="textwidget">
							<a href="javascript:void(0)">
								<img src="http://demo.accesspressthemes.com/accesspress-mag/wp-content/uploads/2015/08/sport-banner.png" alt="Banner ad" />
							</a>
						</div>
					</aside>
				</div>

				<section class="third-block clearfix wow fadeInUp" data-wow-delay="0.5s">
					<div class="first-block-wrapper">
						<h3 class="block-cat-name">
							<span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span>
						</h3>
						<div class="block-post-wrapper clearfix">
							<div class="toppost-wrapper">
								<?php $plxShow->lastArtList('
								<div class="single_post clearfix top-post non-zoomin">
									<div class="post-image">
										<a href="#art_url">
											<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=554&h=305&crop-to-fit" alt="" />
										</a>
										<a class="big-image-overlay" href="#art_url">
											<i class="fa fa-external-link"></i>
										</a>
									</div>
									<!--. post-image-->
									<div class="post-desc-wrapper">
										<h3 class="post-title">
										<a href="#art_url">#art_title</a></h3>
										<div class="block-poston">
											<span class="posted-on">
											<a href="#art_url" rel="bookmark">
												<time class="entry-date published" datetime="#art_date">#art_date</time>
											</a>
											</span>
											<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span>
										</div>
									</div>
									<!-- .post-desc-wrapper -->
									<div class="post-content">
										<p>#art_chapo</p>
									</div>
								</div>',2); ?>
								<div class="clearfix"></div>
							</div>
							<div class="bottompost-wrapper">
								<?php $plxShow->lastArtList($format='
								<div class="single_post clearfix ">
									<div class="post-image">
										<a href="#art_url">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" /></a>
									</div>
									<!--. post-image-->
									<div class="post-desc-wrapper">
										<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
										<div class="block-poston">
										<span class="posted-on">
										<a href="#art_url" rel="bookmark">
										<time class="entry-date published" datetime="#art_date">#art_time</time>
										</a>
										</span><span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
									</div>
									<!-- .post-desc-wrapper -->
								</div>',$max=4,$cat_id='',$ending='',$sort='random'); ?>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- .block-post-wrapper -->
					</div>
					<!-- .first-block-wrapper -->
				</section>
				<!-- .third-block -->

				<section class="forth-block clearfix wow fadeInRight" data-wow-delay="0.5s">
					<div class="second-block-wrapper">
						<h3 class="block-cat-name">
							<span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span>
						</h3>
						<div class="block-post-wrapper clearfix">
							<?php $plxShow->lastArtList('
							<div class="single_post non-zoomin clearfix">
								<div class="post-image">
									<a href="#art_url">
										<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=554&h=305&crop-to-fit" alt="" />
									</a>
									<a class="big-image-overlay" href="#art_url">
										<i class="fa fa-external-link"></i></a>
								</div>
								<!--. post-image-->
								<h3 class="post-title">
									<a href="#art_url">#art_title</a></h3>
								<div class="block-poston">
									<span class="posted-on">
										<a href="#art_url" rel="bookmark">
											<time class="entry-date published" datetime="#art_date">#art_date</time>
										</a>
									</span>
									<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
							</div>'); ?>
							<div class="clearfix"></div>
						</div>
						<!-- .block-post-wrapper -->
					</div>
					<!-- .forth-block-wrapper -->
				</section>
				<!-- .forth-block -->
			</main>
			<!-- #main -->
			</div>
			<!-- #primary -->

			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
			
		</div>

	</div>
	<!-- #content -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
