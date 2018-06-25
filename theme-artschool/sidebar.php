<?php if(!defined('PLX_ROOT')) exit; ?>

	<div class="col-1-3">

		<div class="wrap-col">
            <h2 class="top-6 p2"><?php $plxShow->lang('CATEGORIES'); ?></h2>
			<ul class="list-1">
				<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
            </ul>
		</div>	
	
		<div class="wrap-col">
			<h2 class="top-1 p2"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h2>
			
			<?php $plxShow->lastArtList('
			<p class="text-1 p3"><a href="#art_url">#art_date - #art_title</a></p>
			<p>#art_chapo</p>',2,'1'); ?>
						
		</div>
		<div class="wrap-col">
			<h2 class="top-1 p2"><?php $plxShow->lang('ARCHIVES'); ?></h2>
			<ul class="list-1">
				<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
			</ul>
		</div>
		
		<div class="wrap-col">
			<h2 class="top-6 p2"><?php $plxShow->lang('TAGS'); ?></h2>
			<ul class="list-1">
				<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
			</ul>
		</div>			
		
	</div>
