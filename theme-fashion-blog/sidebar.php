<?php if(!defined('PLX_ROOT')) exit; ?>

	<!-- SIDEBAR -->             
	<div class="s-12 l-3">
	   <aside>
		  
		  
			<div class="aside-block margin-bottom">
				<h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
				<?php $plxShow->catList('','
				<a class="latest-posts" href="#cat_url">
					<h5>#cat_name</h5>
				</a>'); ?>
			</div>

			<!-- NEWS 1 -->           
			<?php $plxShow->lastArtList('
			<img src="#img_url" alt="#img_alt">          
			<div class="aside-block margin-bottom">
				<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li></h3>
				<p>#art_chapo</p>
			</div>',1,'','','random'); ?>
						
		  
			<div class="aside-block margin-bottom">
				<h3><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
				<?php $plxShow->lastComList('
				 <a class="latest-posts" href="#com_url">
					<h5>#com_author '.$plxShow->getLang('SAID').'</h5>
					<p>
					   #com_content(34)...
					</p>
				 </a>'); ?>
			</div>
			
		  <!-- NEWS 2 -->           
			<?php $plxShow->lastArtList('
			<img src="#img_url" alt="#img_alt">          
			<div class="aside-block margin-bottom">
				<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li></h3>
				<p>#art_chapo</p>
			</div>',1,'','','random'); ?>

		  
			<div class="aside-block margin-bottom">
			<h3><?php $plxShow->lang('TAGS'); ?></h3>
			<?php $plxShow->tagList('
			<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>'); ?>
			</div>
			
		  
			<div class="aside-block margin-bottom">
			<h3><?php $plxShow->lang('ARCHIVES'); ?></h3>
			<?php $plxShow->archList('<a class="latest-posts" href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a>'); ?>
			</div>
			

			<!-- AD REGION -->         
		  <div class="advertising margin-bottom">
			 <img src="<?php $plxShow->template(); ?>/img/banner.jpg" alt="ad banner">         
		  </div>
           <div class="aside-block margin-bottom">
				 <h3>RSS</h3>
				 <a class="latest-posts" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a>
				<a class="latest-posts" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a>
			</div>

	   </aside>
	</div>
