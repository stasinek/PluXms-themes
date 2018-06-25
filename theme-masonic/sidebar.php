<?php if(!defined('PLX_ROOT')) exit; ?>

    <div class="secondary">
        <aside id="recent-posts-2" class="blog-post widget widget_recent_entries">
            <div class="widget-title">
                <h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
			</div>
            <ul>
				<?php $plxShow->lastArtList('<li><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
           </ul>
        </aside>
        <aside id="recent-comments-2" class="blog-post widget widget_recent_comments">
            <div class="widget-title">
                <h3><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
			</div>
			<ul id="recentcomments">
				<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
			</ul>
        </aside>
        <aside id="archives-2" class="blog-post widget widget_archive">
            <div class="widget-title">
                <h3><?php $plxShow->lang('ARCHIVES'); ?></h3>
			</div>
            <ul>
				<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
            </ul>
        </aside>
        <aside id="meta-2" class="blog-post widget widget_meta">
            <div class="widget-title">
                <h3>Meta</h3></div>
            <ul>
                <li><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
                <li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
                <li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
            </ul>
        </aside>
    </div>
    </div>
    <!-- #container -->