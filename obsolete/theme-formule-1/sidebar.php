<?php if(!defined('PLX_ROOT')) exit; ?>
			
		
	<div id="aside">
	<span id="nav">
			<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
		</span><br><br>
		<h3><a href=""><?php $plxShow->lang('CATEGORIES') ?></a></h3>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>

		<h3><a href=""><?php $plxShow->lang('ARCHIVES') ?></a></h3>
        <ul>
            <?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
        </ul>

        <h3><a href=""><?php $plxShow->lang('TAGS') ?></a></h3>
		<ul>
			<?php $plxShow->tagList('<li class="#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>

		<h3><a href=""><?php $plxShow->lang('LAST_ARTICLES') ?></a></h3>
		<ul>
			<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>

		<h3><a href=""><?php $plxShow->lang('LAST_COMMENTS') ?></a></h3>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>
		<br><br>
<form method="post" style="margin:0;" id="searchform" action="<?php $plxShow->urlRewrite('?static1/rechercher') ?>">
<p class="searchform">
	<input type="hidden" name="search" value="search"  />
	<input type="text" class="searchfield" name="searchfield" value="Rechercher..." onblur="if(this.value=='') this.value='Rechercher...';" onfocus="if(this.value=='Rechercher...') this.value='';" /> 
</p>
</form>

	</div>
