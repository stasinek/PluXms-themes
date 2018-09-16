<?php if(!defined('PLX_ROOT')) exit; ?>
	<div class="col-md-3 col-md-push-9 animate-box">

		<h3>
			<?php $plxShow->lang('CATEGORIES'); ?>
		</h3>
		<ul class="cat-list unstyled-list fh5co-list-check">
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('LATEST_ARTICLES'); ?>
		</h3>
		<ul class="lastart-list unstyled-list fh5co-list-check">
			<?php $plxShow->lastArtList('
			<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a>
				<p>#art_chapo</p>
			</li>',3); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('TAGS'); ?>
		</h3>
		<ul class="tag-list fh5co-list-check" >
			<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('LATEST_COMMENTS'); ?>
		</h3>
		<ul class="lastcom-list unstyled-list fh5co-list-check">
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('ARCHIVES'); ?>
		</h3>
		<ul class="arch-list unstyled-list fh5co-list-check">
			<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>

		<h3>
			RSS
		</h3>
			<ul class="rss-list unstyled-list fh5co-list-check">
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
			</ul>

	</div>
