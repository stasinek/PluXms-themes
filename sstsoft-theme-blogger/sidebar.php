<aside id="secondary" class="sidebar-container" role="complementary">
    <div class="sidebar-inner">
        <div class="widget-area">
            <!--div class="sidebar-widget widget_search clr">
                <form method="get" id="searchform" class="searchform" action="http://wpexplorer-demos.com/blogger/" role="search">
                    <input type="search" class="field" name="s" value="" id="s" placeholder="To search type and hit enter" />
                </form>
            </div-->
            <div class="sidebar-widget widget_wpex_get_total clr">
                <a href="https://sstsoft.pl" title="HOME" target="_blank">
					<img src="https://sstsoft.pl/common/images/menu/IMG_1262.jpg" alt="Banner" />
				</a>
            </div>
            <div class="sidebar-widget widget_recent_entries clr">
                <h5 class="widget-title"  style="text-transform: uppercase;"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h5>
                <ul>
					<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
               </ul>
            </div>
            <div class="sidebar-widget widget_archive clr">
                <h5 class="widget-title"  style="text-transform: uppercase;"><?php $plxShow->lang('ARCHIVES'); ?></h5>
                <ul>
					<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
                </ul>
            </div>
            <div class="sidebar-widget widget_categories clr">
                <h5 class="widget-title"  style="text-transform: uppercase;"><?php $plxShow->lang('CATEGORIES'); ?></h5>
                <ul>
					<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
                </ul>
            </div>
            <div class="sidebar-widget widget_tag_cloud clr">
                <h5 class="widget-title"  style="text-transform: uppercase;"><?php $plxShow->lang('TAGS'); ?></h5>
                <div class="tagcloud">
					<?php $plxShow->tagList('<a class="#tag_status" href="#tag_url" title="#tag_name"> #tag_name </a>'); ?>
				</div>
            </div>
        </div>
    </div>
</aside>
