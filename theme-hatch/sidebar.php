<?php if(!defined('PLX_ROOT')) exit; ?>

    <div id="sidebar-primary" class="sidebar">

        <!--section id="hybrid-search-2" class="widget search widget-search">
            <h3 class="widget-title">Search</h3>
            <div class="search">

                <form method="get" class="search-form" action="http://demo.alienwp.com/hatch/">
                    <div>
                        <input class="search-text" type="text" name="s" value="Search this site..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="search-submit button" name="submit" type="submit" value="Search">
                    </div>
                </form>

            </div>
		</section-->
		
        <section id="recent-comments-2" class="widget widget_recent_comments widget-widget_recent_comments">
            <h3 class="widget-title"><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
            <ul id="recentcomments">
			<?php $plxShow->lastComList('<li class="recentcomments"><span class="comment-author-link">#com_author</span> '.$plxShow->getLang('SAID').' : <a href="#com_url">#com_content(34)</a></li>'); ?>
            </ul>
        </section>

        <section id="meta-2" class="widget widget_meta widget-widget_meta">
            <h3 class="widget-title"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
            <ul>
				<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>',4,'',$sort='random'); ?>
            </ul>
        </section>

        <section id="meta-2" class="widget widget_meta widget-widget_meta">
            <h3 class="widget-title"><?php $plxShow->lang('CATEGORIES'); ?></h3>
            <ul>
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
            </ul>
        </section>

        <section id="meta-2" class="widget widget_meta widget-widget_meta">
            <h3 class="widget-title"><?php $plxShow->lang('ARCHIVES'); ?></h3>
            <ul>
			<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
            </ul>
        </section>

        <section id="meta-2" class="widget widget_meta widget-widget_meta">
            <h3 class="widget-title">RSS</h3>
            <ul>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
            </ul>
        </section>

    </div>
