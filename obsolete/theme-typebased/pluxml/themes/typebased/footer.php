<?php if(!defined('PLX_ROOT')) exit; ?>

<div id="footer" class="wrap">

	<div class="left-col">
		<div class="popular wrap">
			<h2><?php $plxShow->lang('LAST_ARTICLES') ?></h2>
			<ul>
				<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>                    
			
			</ul>
		</div>
	</div>
	
	<div id="subscribe" class="right-col">
		<h2><?php $plxShow->lang('SUBSCRIBE_RSS');?></h2>
		<p class="rss"><?php $plxShow->lang('ENJOY_POST');?></p>
		<p>
		<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?php $plxShow->lang('ARTICLES') ?></a>
		<br/>
		<a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS') ?></a>
		</p>
	</div>
	
<div id="copyright" class="wrap">

	<div class="left-col">
		<p>&copy; <?php $plxShow->mainTitle('link'); ?> - <a class="admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>" onclick="window.open(this.href);return false;"><img src="<?php $plxShow->template();?>/styles/images/option-icon-general.png" alt="<?php $plxShow->lang('ADMINISTRATION') ?>" /></a></p>
	</div>
	
	<div class="right-col">
		<p>
			<?php $plxShow->lang('POWERED_BY') ?> 
			<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>. 
			Design by <a href="http://woothemes.com"><img src="<?php $plxShow->template(); ?>/styles/default/logo-footer.jpg" width="87" height="21" alt="woo themes" /></a>
		</p>
	</div>

</div>

</div>

</body>
</html>