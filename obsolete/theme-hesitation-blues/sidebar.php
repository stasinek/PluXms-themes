<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="aside">

	<h3><?php $plxShow->lang('CATEGORIES') ?></h3>
		<ul id="catlist">
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>

	<h3><?php $plxShow->lang('LAST_COMMENTS') ?></h3>
		<ul class="last_comm">
			<?php $plxShow->lastComList('<li><span class="auth_com">#com_author</span> '.$plxShow->getLang('SAID').'&nbsp;: <a href="#com_url">#com_content(34)</a></li>'); ?>
		</ul>

	<h3><?php $plxShow->lang('LAST_ARTICLES') ?></h3>
		<ul>
			<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>

	<h3>Abonnements RSS</h3>
		<ul>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?php $plxShow->lang('ARTICLES') ?></a></li>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS') ?></a></li>
		</ul>

	<h3><?php $plxShow->lang('ARCHIVES') ?></h3>
		<ul>
			<?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>

        <h3><?php $plxShow->lang('TAGS') ?></h3>
		<p class="tags">
			<?php $plxShow->tagList('<a href="#tag_url" title="#tag_name">#tag_name</a>, ', 20); ?>
		</p>

	</div>
