<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="top-footer footer-column4">
			<div class="apmag-container">
				<div class="footer-block-wrapper clearfix">
					<div class="footer-block-1 footer-block wow fadeInLeft" data-wow-delay="0.5s">
						<aside id="text-15" class="widget widget_text">
							<h1 class="widget-title"><span>À propos</span></h1>
							<?php $plxShow->lastArtList('
							<div class="textwidget">
								#art_chapo
							</div>',1,'1'); ?>
						</aside>
					</div>

					<div class="footer-block-2 footer-block wow fadeInLeft" data-wow-delay="0.8s" style="display: block;">
						<aside id="accesspress_mag_register_random_posts-3" class="widget widget_accesspress_mag_register_random_posts">
							<div class="random-posts clearfix">
								<h1 class="widget-title"><span>Articles variés</span></h1>
								<div class="random-posts-wrapper">
									<?php $plxShow->lastArtList('
									<div class="rand-single-post clearfix">
										<div class="post-img">
											<a href="#art_url">
												<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=177&h=118&crop-to-fit" alt="#img_alt" />
											</a>
										</div>
										<!-- .post-img -->
										<div class="post-desc-wrapper">
											<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
											<div class="block-poston"><span class="posted-on"><a href="#art_url" rel="bookmark">
											<time class="entry-date published updated" datetime="#art_date">#day, #num_day #month</time></a></span>
											<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
										</div>
										<!-- .post-desc-wrapper -->
									</div>',3,'',$sort='random'); ?>
								</div>
								<!-- .random-posts-wrapper -->
							</div>
							<!-- .random-posts -->
						</aside>
					</div>

					<div class="footer-block-3 footer-block wow fadeInLeft" data-wow-delay="1.2s" style="display: block;">
						<aside id="aptf_widget-3" class="widget widget_aptf_widget">
							<h1 class="widget-title"><span>Twitter Feed</span></h1>
							<div class="aptf-tweets-wrapper aptf-template-2">
								<div class="aptf-single-tweet-wrapper">
									<div class="aptf-tweet-content">
										<a href="http://twitter.com/@apthemes" class="aptf-tweet-name" target="_blank">AccessPress Themes</a> <span class="aptf-tweet-username">@apthemes</span>
										<div class="clear"></div>
										The BEST free WordPress Photography theme! &gt; Multiple homepage layout &gt; Multiple gallery layout &gt; Multiple blog... <a href="https://t.co/AsFewBuyQT" target="_blank">https://t.co/AsFewBuyQT</a> </div>
									<!--tweet content-->
									<div class="aptf-tweet-date">
										<p class="aptf-timestamp">
											<a href="https://twitter.com/@apthemes/status/712626069002711041" target="_blank"> -
												2 days ago                            
											</a>
										</p>
									</div>
									<!--tweet_date-->

									<!--Tweet Action -->
									<div class="aptf-tweet-actions-wrapper aptf-tweet-actions">
										<a href="https://twitter.com/intent/tweet?in_reply_to=712626069002711041" class="aptf-tweet-reply aptf-tweet-action-reply" target="_blank">h</a>
										<a href="https://twitter.com/intent/retweet?tweet_id=712626069002711041" class="aptf-tweet-retweet aptf-tweet-action-retweet" target="_blank">J</a>
										<a href="https://twitter.com/intent/favorite?tweet_id=712626069002711041" class="aptf-tweet-fav aptf-tweet-action-favourite" target="_blank">R</a>
									</div>
									<!--Tweet Action -->
								</div>
								<!-- single_tweet_wrap-->

								<div class="aptf-single-tweet-wrapper">
									<div class="aptf-tweet-content">
										<a href="http://twitter.com/@apthemes" class="aptf-tweet-name" target="_blank">AccessPress Themes</a> <span class="aptf-tweet-username">@apthemes</span>
										<div class="clear"></div>
										AccessPress Themes LEAK smile emoticon ------------------------------------ We want to try something new,... <a href="https://t.co/f5g7Zviyts" target="_blank">https://t.co/f5g7Zviyts</a> </div>
									<!--tweet content-->
									<div class="aptf-tweet-date">
										<p class="aptf-timestamp">
											<a href="https://twitter.com/@apthemes/status/711847784064770049" target="_blank"> -
												4 days ago                            
											</a>
										</p>
									</div>
									<!--tweet_date-->

									<!--Tweet Action -->
									<div class="aptf-tweet-actions-wrapper aptf-tweet-actions">
										<a href="https://twitter.com/intent/tweet?in_reply_to=711847784064770049" class="aptf-tweet-reply aptf-tweet-action-reply" target="_blank">h</a>
										<a href="https://twitter.com/intent/retweet?tweet_id=711847784064770049" class="aptf-tweet-retweet aptf-tweet-action-retweet" target="_blank">J</a>
										<a href="https://twitter.com/intent/favorite?tweet_id=711847784064770049" class="aptf-tweet-fav aptf-tweet-action-favourite" target="_blank">R</a>
									</div>
									<!--Tweet Action -->
								</div>
								<!-- single_tweet_wrap-->
							</div>

						</aside>
					</div>
					<div class="footer-block-4 footer-block wow fadeInLeft" data-wow-delay="1.2s" style="display: block;">
						<aside id="accesspress_mag_register_latest_posts-7" class="widget widget_accesspress_mag_register_latest_posts">
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
											<h3 class="post-title"><a href="#art_url">#art_title</a></h3>
											<div class="block-poston"><span class="posted-on">
											<a href="#art_url" rel="bookmark">
											<time class="entry-date published" datetime="#art_date">#art_date</time>
											</a>
											</span>
											<span class="comment_count"><i class="fa fa-comments"></i>#art_nbcoms</span></div>
										</div>
										<!-- .post-desc-wrapper -->
									</div>',3); ?>
								</div>
								<!-- .latest-posts-wrapper -->
							</div>
							<!-- .latest-posts -->
						</aside>
					</div>
				</div>
				<!-- footer-block-wrapper -->
			</div>
			<!--apmag-container-->
		</div>
		<!--top-footer-->

		<div class="bottom-footer clearfix">
			<div class="apmag-container">
				<div class="site-info">
					<span class="copyright-symbol">&copy; <?php echo date("Y"); ?> <?php $plxShow->mainTitle('link'); ?></span>
				</div>
				<!-- .site-info -->
				<div class="ak-info">
					Design par <a title="AccessPress Themes" href="http://demo.accesspressthemes.com/accesspress-mag/" target="_blank">AccessPress</a>
				</div>
				<div class="ak-info">
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				</div>
				
				<div class="ak-info">
					<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
				</div>
				
				<div class="subfooter-menu">
					<nav id="footer-navigation" class="footer-main-navigation" role="navigation">
						<button class="menu-toggle hide" aria-controls="menu" aria-expanded="false">Footer Menu</button>
						<div class="footer_menu">
							<ul id="menu-footer-menu" class="menu">
										<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="menu-item #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
										<?php $plxShow->pageBlog('<li class="menu-item" id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
							</ul>
						</div>
					</nav>
					<!-- #site-navigation -->
				</div>
				<!-- .subfooter-menu -->
			</div>
			<!-- .apmag-container -->
		</div>
		<!-- .bottom-footer -->
	</footer>
	<!-- #colophon -->
	<div id="back-top">
		<a href="#top"><i class="fa fa-arrow-up"></i> <span> Top </span></a>
	</div>
</div>
<!-- #page -->
<!-- / Scroll Triggered Box -->
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/frontend.js?ver=2.5.2'></script>

<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/frontend.js?ver=4.0.7'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/scripts.js?ver=4.4'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/custom-demo.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.ticker.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/nivo-lightbox.js?ver=1.2.0'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/lightbox-settings.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.bxslider.min.js?ver=4.1.2'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/navigation.js?ver=20120206'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/comment-reply.min.js?ver=4.4.2'></script>

<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/script.min.js?ver=2.2.1'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/wp-embed.min.js?ver=4.4.2'></script>
</body>

</html>