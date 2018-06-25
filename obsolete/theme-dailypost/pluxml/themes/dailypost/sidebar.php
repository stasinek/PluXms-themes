<?php if(!defined('PLX_ROOT')) exit; ?>

  </div><!-- #content -->
<div class="clear"></div></div>
<!--/contentcolumn-->
</div>
<!--/primary-->
<div id="secondary">
<div id="secondary-margins">
  <header id="branding">
    <hgroup id="desktop-version">
    	<h1 class="site-title"><?php $plxShow->mainTitle('link'); ?></h1>
        <h2 class="site-description"><?php $plxShow->subTitle(); ?></h2>
    </hgroup>
  </header>
  <nav>
    <div class="menu">
    	<ul>
			<?php $plxShow->catList($plxShow->getLang('HOME'),array('<li class="#cat_status page_item"><a href="#cat_url" title="#cat_name"><span>#cat_name</span></a></li>'."\n\t\t",15),'','001|002|003|004|005|006'); ?>
			<?php $plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
			
		</ul>
    </div>
  </nav>
  <div class="widget-area">
  	<aside class="widget">
  	<h3>Th&egrave;mes</h3>
	<div id="themes">
		<?php eval($plxShow->callHook('MySkinSelect')) ?>

	</div>
	</aside>
    <aside id="search-2" class="widget widget_search">
    	<h3>Rechercher</h3>
    	<?php eval($plxShow->callHook('MySearchForm')) ?>

	</aside>
	<aside class="widget adverts"><h3>A voir</h3>
		<ul>
		<?php eval($plxShow->callHook('see')) ?>
		
		</ul>
		<div class="clear">&nbsp;</div>
	</aside>
	<aside id="calendar-3" class="widget widget_calendar"><h3>Calendar</h3>
		<div id="calendar_wrap">
			<?php eval($plxShow->callHook('CalInSidebar')); ?>

		</div>
	</aside>
	<aside id="linkcat-2" class="widget widget_links"><h3>Blogroll</h3>
		<ul class='xoxo blogroll'>
			<?php eval($plxShow->callHook('showBlogroll')); ?>

		</ul>
	</aside>
	<aside id="recent-post" class="widget widget_recent_entries">		
			<h3><?php $plxShow->lang('LAST_ARTICLES') ?></h3>
		<ul>
			<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>

		</ul>
	</aside>
	<aside id="tag_cloud-3" class="widget widget_tag_cloud"><h3>Tag cloud</h3>
		<div class="tagcloud">
			<?php $plxShow->tagList('<a href="#tag_url" title="#tag_name" class="#tag_link">#tag_name</a>'."\n", 20); ?>
		
		</div>
	</aside>
	<aside class="widget"><h3><?php $plxShow->lang('CATEGORIES') ?></h3>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		
		</ul>
	</aside>
	<aside class="widget"><h3><?php $plxShow->lang('LAST_COMMENTS') ?></h3>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		
		</ul>
	</aside>
	</div>
</div>
</div><!--/secondary-->
