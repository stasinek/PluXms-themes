<?php if (!defined('PLX_ROOT')) exit; ?>

<footer>
	<div class="carousel">
		<h3 class="frontTitle"><div class="latest">pied de page</div></h3>
		
		<?php $plxShow->lastArtList('
		<div class="excerpt">
			<a href="#art_url" title="#art_title" id="footer-thumbnail">
				<div>
					<div class="hover">
						<i class="point-icon icon-zoom-in"></i>
					</div>
					<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=140&h=130&crop-to-fit" class="attachment-carousel size-carousel wp-post-image" alt="q3" title="#img_title" srcset="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=140&h=130&crop-to-fit" />
				</div>
				<p class="footer-title">
					<span class="featured-title">#art_title</span>
				</p>
			</a>
		</div>'); ?>

	</div>
</footer>

<div class="copyrights">
	<div class="row" id="copyright-note">
		<div class="foot-logo">
			<img src="<?php $plxShow->template(); ?>/images/footerlogo.png" alt="Point" >
		</div>
		<div class="copyright-left-text">
			&copy; 2016  <?php $plxShow->mainTitle('link'); ?>
		</div>
		<div class="copyright-text">
			Design par <a href="http://demo.mythemeshop.com/point" target="_blank" rel="nofollow">MyThemeShop</a>
		</div>
		<div class="footer-navigation">
			<ul id="menu-menu-1" class="menu">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				<li><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
			</ul>
		</div>
		<div class="top"><a href="#top" class="toplink"><i class="point-icon icon-up-dir"></i></a></div>
	</div>
</div>

<style type="text/css">
body {
  width: 10px;
  min-width: 100%;
  *width: 100%;
}
</style>
<link rel='stylesheet' id='wp_review-style-css'  href='<?php $plxShow->template(); ?>/css/wp-review.css?ver=2.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp_review_tab_widget-css'  href='<?php $plxShow->template(); ?>/css/wp-review-tab-widget.css?ver=ad3a20bc0384a0f50a9d7d56c47f7a4e' type='text/css' media='all' />
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/customscripts.js?ver=20120212'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/wp-embed.min.js?ver=ad3a20bc0384a0f50a9d7d56c47f7a4e'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.knob.min.js?ver=1.1'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/circle-output.js?ver=ad3a20bc0384a0f50a9d7d56c47f7a4e'></script>

<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/wp-review-tab-widget.js?ver=ad3a20bc0384a0f50a9d7d56c47f7a4e'></script>
<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery.appear.js?ver=1.1'></script>

<script type='text/javascript' src='<?php $plxShow->template(); ?>/js/main.js?ver=2.1.0'></script>
</div>

</body>
</html>
