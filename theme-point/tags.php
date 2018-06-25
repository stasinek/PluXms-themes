<?php include(dirname(__FILE__).'/header.php'); ?>
		
<div id="page" class="home-page">
	<div class="content">
		<div class="article">
			<h1 class="postsby">
				<span><?php $plxShow->tagName(); ?></span>
			</h1>	
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<article class="pexcerpt post excerpt ">
					<a href="<?php $plxShow->artUrl(); ?>" title="<?php $plxShow->artTitle(); ?>" rel="nofollow" id="featured-thumbnail">
						<div class="featured-thumbnail">
							<img width="220" height="162" src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=220&h=162&crop-to-fit" class="attachment-featured size-featured wp-post-image" />
						</div>								
					</a>
					<header>						
						<h2 class="title">
							<?php $plxShow->artTitle('link'); ?>
						</h2>
						<div class="post-info">
							<span class="theauthor">
								<?php $plxShow->artAuthor() ?>
							</span> | 
							<span class="thetime"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span>
						</div>
					</header>
					<div class="post-content image-caption-format-1">
					<?php $plxShow->artChapo(''); ?>
					</div>
					<span class="readMore">
						<a href="<?php $plxShow->artUrl() ?>" title="<?php $plxShow->artTitle() ?>" rel="nofollow">
							Lire la suite
						</a>
					</span>
				</article>
			<?php endwhile; ?>

			<nav class="navigation pagination" role="navigation">
				<div class="nav-links">
					<?php $plxGlob_arts = clone $plxShow->plxMotor->plxGlob_arts;
					$aFiles = $plxGlob_arts->query($plxShow->plxMotor->motif,'art','',0,false,'before');
					if($aFiles AND $plxShow->plxMotor->bypage AND sizeof($aFiles)>$plxShow->plxMotor->bypage) {
						$arg_url = $plxShow->plxMotor->get;
						if(preg_match('/(\/?page[0-9]+)$/',$arg_url,$capture)) {
							$arg_url = str_replace($capture[1], '', $arg_url);
						}
						$prev_page = $plxShow->plxMotor->page - 1;
						$next_page = $plxShow->plxMotor->page + 1;
						$last_page = ceil(sizeof($aFiles)/$plxShow->plxMotor->bypage);
						$f_url = $plxShow->plxMotor->urlRewrite('?'.$arg_url); # Premiere page
						$arg = (!empty($arg_url) AND $prev_page>1) ? $arg_url.'/' : $arg_url;
						$p_url = $plxShow->plxMotor->urlRewrite('?'.$arg.($prev_page<=1?'':'page'.$prev_page)); # Page precedente
						$arg = !empty($arg_url) ? $arg_url.'/' : $arg_url;
						$n_url = $plxShow->plxMotor->urlRewrite('?'.$arg.'page'.$next_page); # Page suivante
						$l_url = $plxShow->plxMotor->urlRewrite('?'.$arg.'page'.$last_page); # Derniere page
						if(eval($plxShow->plxMotor->plxPlugins->callHook('plxShowPagination'))) return;

						if($plxShow->plxMotor->page > 2) # Si la page active > 2 on affiche un lien 1ere page
							echo '<a class="prev page-numbers" href="'.$f_url.'" title="'.L_PAGINATION_FIRST_TITLE.'">&laquo;</a>';
						if($plxShow->plxMotor->page > 1) # Si la page active > 1 on affiche un lien page precedente
							echo '<a class="prev page-numbers" href="'.$p_url.'" title="'.L_PAGINATION_PREVIOUS_TITLE.'">&lsaquo;</a></span>';
						for ($i = 1; $i <= $last_page; $i++) {
							if ($i == $plxShow->plxMotor->page) {
							printf('<span class="page-numbers current">'.$plxShow->plxMotor->page.'</span>');
							}else{
								echo '<a href="'.$plxShow->plxMotor->urlRewrite('?'.$arg.'page'.$i).'" class="page-numbers" >'.$i.'</a>';
							}
						}
						if($plxShow->plxMotor->page < $last_page) # Si la page active < derniere page on affiche un lien page suivante
							echo '<a class="next page-numbers" href="'.$n_url.'" title="'.L_PAGINATION_NEXT_TITLE.'">&rsaquo;</a>';
						if(($plxShow->plxMotor->page + 1) < $last_page) # Si la page active++ < derniere page on affiche un lien derniere page
							echo '<a class="next page-numbers" href="'.$l_url.'" title="'.L_PAGINATION_LAST_TITLE.'">&raquo;</a>';
					} ?>
				</div>
			</nav>
		</div>
		
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
		
	</div>
</div>
 
<?php include(dirname(__FILE__).'/footer.php'); ?>
