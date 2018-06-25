<div class="SR">

<!-- Start Search -->
<div class="search">
	<?php eval($plxShow->callHook('MySearchForm')) ?>
	
<div class="syn">
<ul>
	<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?php $plxShow->lang('ARTICLES') ?></a></li>
	<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS') ?></a></li>
</ul>
</div>
</div>
<!-- End Search -->

<!-- Start About This Blog -->
<div class="about">
<h3><?php eval($plxShow->callHook('aboutTitle')) ?></h3>
	<?php eval($plxShow->callHook('about')) ?>
</div>
<!-- End About This Blog -->


<div class="photostream">
<h3>Th&egrave;mes</h3>
	<div id="themes">
	<?php eval($plxShow->callHook('MySkinSelect')) ?>

	</div>
<h3>A voir</h3>
	<?php eval($plxShow->callHook('see')) ?>
</div>


<div class="categs">
  <div> 
	<h3><?php $plxShow->lang('CATEGORIES') ?></h3>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>
	</div>
	<div style="margin-left: 10px;">
	<h3><?php $plxShow->lang('ARCHIVES') ?></h3>
		<ul>
			<?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>
	</div>
</div>


<!-- Start Recent Comments/Articles -->
<div class="recent">
	<ul class="tabs">
		<li><a class="active" href="#tab-posts"><?php echo plxUtils::strCut($plxShow->getLang('LAST_ARTICLES'),13,'','.') ?></a></li>
		<li><a href="#tab-comments"><?php echo plxUtils::strCut($plxShow->getLang('LAST_COMMENTS'),13,'','.') ?></a></li>
		<li><a style="margin-right:0px;" href="#tab-tags"><?php $plxShow->lang('TAGS') ?></a></li>
	</ul>
	<ul id="tab-comments">
		<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>

	</ul> 
	<div id="tab-tags">
		<?php $plxShow->tagList('<a href="#tag_url" class="#tag_link" title="#tag_name">#tag_name</a>'."\n", 20); ?>
	</div>
	<ul id="tab-posts">
		<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		
	</ul>
</div>
<!-- End Recent Comments/Articles -->

</div>
<!-- End SideBar1 -->
