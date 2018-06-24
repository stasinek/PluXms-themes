<?php if(!defined('PLX_ROOT')) exit; ?>
							<div id="secondary-right-sidebar" class="widget-area" role="complementary">
								<div id="secondary" class="secondary-wrapper">
									<div id="home-top-sidebar" class="widget-area wow fadeInUp" data-wow-delay="0.5s" role="complementary">
										<aside id="apsc_widget-2" class="widget widget_apsc_widget">
											<h1 class="widget-title"><span>Social</span></h1>
											<div class="apsc-icons-wrapper clearfix apsc-theme-2">
												<div class="apsc-each-profile">
													<a class="apsc-facebook-icon clearfix" href="http://facebook.com/AccessPressThemes" target="_blank">
														<div class="apsc-inner-block">
															<span class="social-icon"><i class="fa fa-facebook apsc-facebook"></i><span class="media-name">Facebook</span></span>
															<span class="apsc-count">6,016</span><span class="apsc-media-type">Fans</span>
														</div>
													</a>
												</div>
												<div class="apsc-each-profile">
													<a class="apsc-twitter-icon clearfix" href="http://twitter.com/@apthemes" target="_blank">
														<div class="apsc-inner-block">
															<span class="social-icon"><i class="fa fa-twitter apsc-twitter"></i><span class="media-name">Twitter</span></span>
															<span class="apsc-count">537</span><span class="apsc-media-type">Followers</span>
														</div>
													</a>
												</div>
												<div class="apsc-each-profile">
													<a class="apsc-google-plus-icon clearfix" href="https://plus.google.com/+BBCNews" target="_blank">
														<div class="apsc-inner-block">
															<span class="social-icon"><i class="apsc-googlePlus fa fa-google-plus"></i><span class="media-name">google+</span></span>
															<span class="apsc-count">9,442,254</span><span class="apsc-media-type">Followers</span>
														</div>
													</a>
												</div>
												<div class="apsc-each-profile">
													<a class="apsc-youtube-icon clearfix" href="https://www.youtube.com/user/accesspressthemes" target="_blank">
														<div class="apsc-inner-block">
															<span class="social-icon"><i class="apsc-youtube fa fa-youtube"></i><span class="media-name">Youtube</span></span>
															<span class="apsc-count">600</span><span class="apsc-media-type">Subscriber</span>
														</div>
													</a>
												</div>
												<div class="apsc-each-profile">
													<a class="apsc-soundcloud-icon clearfix" href="https://soundcloud.com/bchettri" target="_blank">
														<div class="apsc-inner-block">
															<span class="social-icon"><i class="apsc-soundcloud fa fa-soundcloud"></i><span class="media-name">Soundcloud</span></span>
															<span class="apsc-count">0</span><span class="apsc-media-type">Followers</span>
														</div>
													</a>
												</div>
												<div class="apsc-each-profile">
													<a class="apsc-comment-icon clearfix" href="javascript:void(0);">
														<div class="apsc-inner-block">
															<span class="social-icon">
																<i class="apsc-comments fa fa-comments"></i>
																<span class="media-name">Comment</span>
															</span>
															<span class="apsc-count">10</span>
															<span class="apsc-media-type">Comments</span>
														</div>
													</a>
												</div>
											</div>

										</aside>
									</div>
									<!-- #secondary -->

									<aside id="categories-3" class="widget widget_categories">
										<h1 class="widget-title">
											<span><?php $plxShow->lang('CATEGORIES'); ?></span>
										</h1>		
										<ul>
											<?php $plxShow->catList('','<li cat-item id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
										</ul>
									</aside>
									
									<div class="sidebar-top-ad widget-area wow fadeInUp" data-wow-delay="0.5s">
										<h1 class="sidebar-title"><span>Publicité</span></h1>
										<div class="ad_content">
											<aside id="text-9" class="widget widget_text">
												<div class="textwidget">
													<a href="javascript:void(0)"><img src="http://demo.accesspressthemes.com/accesspress-mag/wp-content/uploads/2015/08/ads-banner-news-300-250.png" alt="Banner ad" /></a>
												</div>
											</aside>
										</div>
									</div>
									<!--header ad-->

									<div id="home-middle-sidebar" class="widget-area wow fadeInRight" data-wow-delay="0.5s" role="complementary">
										<aside id="accesspress_mag_register_latest_posts-6" class="widget widget_accesspress_mag_register_latest_posts">
											<div class="latest-posts clearfix">
												<h1 class="widget-title"><span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span></h1>
												<div class="latest-posts-wrapper">
													<?php $plxShow->lastArtList('
													<div class="latest-single-post clearfix">
														<div class="post-img">
															<a href="#art_url">
																<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" />
															</a>
														</div>
														<!-- .post-img -->
														<div class="post-desc-wrapper">
															<h3 class="post-title">
																<a href="#art_url">#art_title</a></h3>
															<div class="block-poston">
																<span class="posted-on">
																	<a href="#art_url" rel="bookmark">
																		<time class="entry-date published" datetime="#art_date">#art_date</time>
																	</a>
																</span>
																<span class="comment_count">
																	<i class="fa fa-comments"></i>#art_nbcoms</span></div>
														</div>
														<!-- .post-desc-wrapper -->
													</div>'); ?>
												
												</div>
												<!-- .latest-posts-wrapper -->
											</div>
											<!-- .latest-posts -->
										</aside>
									</div>
									<!-- #secondary -->

									<div class="sidebar-editor-pick widget-area wow fadeInUp" data-wow-delay="0.5s">
										<div class="content-wrapper">
											<h1 class="sidebar-title"><span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span></h1>
											<div class="sidebar-posts-wrapper">
												<?php $plxShow->lastArtList('
												<div class="single_post clearfix first-post non-zoomin">
													<div class="post-image">
														<a href="#art_url">
															<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=554&h=305&crop-to-fit" alt="heli-skiing" /></a>
														<span class="big-image-overlay">
															<a href="#art_url">
																<i class="fa fa-external-link"></i>
															</a>
														</span>
													</div>
													<!-- .post-image -->
													<h3 class="post-title">
													<a href="#art_url">#art_title</a></h3>
													<div class="block-poston"><span class="posted-on">
													<a href="#art_url" rel="bookmark">
														<time class="entry-date published" datetime="#art_date">#art_date</time>
													</a>
													</span>
													<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
													<div class="post-content">
														<p>#art_chapo</p>
													</div>
												</div>',1); ?>
												<!-- .single_post -->


												<?php $plxShow->lastArtList('
												<div class="single_post clearfix ">
													<div class="post-image">
														<a href="#art_url">
																<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" />
														</a>
													</div>
													<!-- .post-image -->
													<div class="post-desc-wrapper">
														<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
														<div class="block-poston">
														<span class="posted-on">
															<a href="#art_url" rel="bookmark">
																<time class="entry-date published" datetime="#art_time">#art_time</time>
															</a>
														</span>
														<span class="comment_count">
															<i class="fa fa-comments"></i>#art_nbcoms
														</span>
														</div>
													</div>
												</div>',4); ?>
											</div>
										</div>
										<!-- .content-wrapper -->
									</div>
									<!-- .sidebar-editor-pick -->

									<div class="sidebar-top-ad widget-area wow fadeInUp" data-wow-delay="0.5s">
										<h1 class="sidebar-title"><span>Publicité</span></h1>
										<div class="ad_content">
											<aside id="text-10" class="widget widget_text">
												<div class="textwidget">
													<a href="javascript:void(0)"><img src="http://demo.accesspressthemes.com/accesspress-mag/wp-content/uploads/2015/08/ads-banner-fashion-300-250.png" alt="Banner ad" /></a>
												</div>
											</aside>
										</div>
									</div>
									<!--header ad-->

									<div id="home-bottom-sidebar" class="widget-area wow fadeInUp" data-wow-delay="0.5s" role="complementary">
										<aside id="accesspress_mag_register_random_posts-2" class="widget widget_accesspress_mag_register_random_posts">
											<div class="random-posts clearfix">
												<h1 class="widget-title"><span><?php $plxShow->lang('LATEST_ARTICLES'); ?></span></h1>
												<div class="random-posts-wrapper">
													<?php $plxShow->lastArtList('
													<div class="rand-single-post clearfix">
														<div class="post-img">
															<a href="http://demo.accesspressthemes.com/accesspress-mag/best-work-space-design-of-2015/">
																<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" />
															</a>
														</div>
														<!-- .post-img -->
														<div class="post-desc-wrapper">
															<h3 class="post-title">
																<a href="#art_url">#art_title</a></h3>
															<div class="block-poston">
															<span class="posted-on">
																<a href="#art_url" rel="bookmark">
																	<time class="entry-date published" datetime="#art_date">#art_date</time>
																</a>
																</span>
																<span class="comment_count">
																	<i class="fa fa-comments"></i>#art_nbcoms</span></div>
														</div>
														<!-- .post-desc-wrapper -->
													</div>',3,'',$sort='random'); ?>
												</div>
												<!-- .random-posts-wrapper -->
											</div>
											<!-- .random-posts -->
										</aside>
										<aside id="accesspress_mag_article_contributors-3" class="widget widget_accesspress_mag_article_contributors">
											<div class="contributors-wrapper clearfix">
												<h1 class="widget-title"><span><?php $plxShow->lang('WRITTEN_BY'); ?></span></h1>
												<div class="single-user-wrapper">
													<?php $plxShow->lastArtList('
													<div class="single-user">
														<a href="#art_url">
															<div class="user-image">
															<img alt="#img_alt" src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=82&h=82&crop-to-fit" class="avatar photo"/></div>
															<h3 class="user-name">#art_title</h3>
														</a>
													</div>'); ?>
												</div>
												<!-- .single-user-wrapper -->
											</div>
											<!-- .contributors-wrapper-->
										</aside>
										<aside id="newsletterwidget-2" class="widget widget_newsletterwidget">
											
											<style>
											    .widget_newsletterwidget .newsletter-submit {
													background: url("<?php $plxShow->template(); ?>/css/images/btn-gradient.png") repeat-x scroll 0 0;
												}
											</style>

											
											
											<h1 class="widget-title"><span>Abonnez-vous!</span></h1>Notre infolettre vous informe sur l'actualité.

											<script type="text/javascript">
												//<![CDATA[
												if (typeof newsletter_check !== "function") {
													window.newsletter_check = function(f) {
														var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
														if (!re.test(f.elements["ne"].value)) {
															alert("Vérifiez votre courriel");
															return false;
														}
														for (var i = 1; i < 20; i++) {
															if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
																alert("");
																return false;
															}
														}
														if (f.elements["ny"] && !f.elements["ny"].checked) {
															alert("Vous devez accepter les termes");
															return false;
														}
														return true;
													}
												}
												//]]>
											</script>

											<div class="newsletter newsletter-widget">

												<script type="text/javascript">
													//<![CDATA[
													if (typeof newsletter_check !== "function") {
														window.newsletter_check = function(f) {
															var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
															if (!re.test(f.elements["ne"].value)) {
																alert("The email is not correct");
																return false;
															}
															for (var i = 1; i < 20; i++) {
																if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
																	alert("");
																	return false;
																}
															}
															if (f.elements["ny"] && !f.elements["ny"].checked) {
																alert("You must accept the privacy statement");
																return false;
															}
															return true;
														}
													}
													//]]>
												</script>

												<form action="http://demo.accesspressthemes.com/accesspress-mag/?na=s" onsubmit="return newsletter_check(this)" method="post">
													<input type="hidden" name="nr" value="widget" />
													<p>
														<input class="newsletter-email" type="email" required name="ne" value="Courriel" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" />
													</p>
													<p>
														<input class="newsletter-submit" type="submit" value="Envoyer" />
													</p>
												</form>
											</div>
										</aside>
									</div>
									<!-- #secondary -->

								</div>
								<!-- .secondary-wrapper -->
							</div>
							<!--Secondary-right-sidebar-->
