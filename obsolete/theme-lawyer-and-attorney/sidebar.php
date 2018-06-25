			<div class="col">
				<h3><?php $plxShow->lang('DESCRIPTION') ?></h3>
				<div class="article">
					<?php $plxShow->callHook('plxShowDescription') ?>
				</div>
				<div class="separator">&nbsp;</div>
			</div>
			<div class="col">
				<h3><?php $plxShow->lang('LAST_COMMENTS') ?></h3>
				<?php $plxShow->lastComList(
						$format = "<div class=\"article\"><p class=\"date\">#com_date - #com_hour - <a href=\"#com_url\">#com_author</a></p><p>#com_content(100)</p></div>",
						$max = 5
					);
				?>
				<div class="separator">&nbsp;</div>
			</div>
			<div class="col last">
				<div class="col left">
					<h3><?php $plxShow->lang('CATEGORIES') ?></h3>
					<div class="case">
						<ul>
					<?php 
					$plxShow->catList(
							'',
							'<li><a href="#cat_url" title="#cat_name">#cat_name</a></li>'
						);
					?>
						</ul>
					</div>
					<h3><?php $plxShow->lang('ARCHIVES') ?></h3>
					<div class="case">
						<ul>
						<?php $plxShow->archList('<li><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
						</ul>
					</div>
				</div>
				<div class="col right">
					<h3><?php $plxShow->lang('TAGS') ?></h3>
					<div class="case">
						<ul>
						<?php $plxShow->tagList('<li class="#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
						</ul>
					</div>

					<h3>Flux</h3>
					<div class="case">
						<ul>
							<li><?php $plxShow->comFeed('rss'); ?></li>
							<li><?php $plxShow->artFeed('rss'); ?></li>
						</ul>
					</div>
				</div>
				<div>
					
			</div>
			<div class="clr"></div>
