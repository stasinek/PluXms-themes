<?php if(!defined('PLX_ROOT')) exit; ?>

<!--- Sidebar Starts -->
		
		<div id="sidebar" class="right-col">
			
			<div id="search">
				<?php eval($plxShow->callHook('MySearchForm')) ?>
			</div>
			<div class="block widget widget_links"><h2>Th&egrave;mes</h2>
				<div id="themes">
				<?php eval($plxShow->callHook('MySkinSelect')) ?>

				</div>
			</div>
	
			<div id="sidebar_in">
			
				<div id="text-2" class="block widget widget_text"><h2><?php eval($plxShow->callHook('aboutTitle')) ?></h2>			
					<div class="textwidget">
						<?php eval($plxShow->callHook('about')) ?>

					</div>
				</div>
				<div id="calendar-2" class="block widget widget_calendar"><h2>&nbsp;</h2>
					<div id="calendar_wrap">
						<?php eval($plxShow->callHook('CalInSidebar')); ?>

					</div>
				</div>
				<div id="linkcat-2" class="block widget widget_links"><h2><?php eval($plxShow->callHook('showBlogHead')); ?></h2>
					<ul class='xoxo blogroll'>
						<?php eval($plxShow->callHook('showBlogroll')); ?>

					</ul>
				</div>
				<div id="categories-2" class="block widget widget_categories"><h2><?php $plxShow->lang('CATEGORIES') ?></h2>		
					<ul>
						<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
					
					</ul>
				</div>
				<div id="tag_cloud-2" class="block widget widget_tag_cloud"><h2><?php $plxShow->lang('TAGS') ?></h2>
					<div class="tagcloud">
						<?php $plxShow->tagList('<a href="#tag_url" class="#tag_link" title="#tag_name">#tag_name</a>'."\n", 20);?>
					
					</div>
				</div>
				<div class="wrap adverts">
					<ul>
						<?php eval($plxShow->callHook('see')) ;?>
						
	    			</ul>
				</div>
				
			</div>
				
		</div>
		
		<!--- Sidebar Ends -->		
	</div>
	
</div>
