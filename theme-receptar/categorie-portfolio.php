<?php include(dirname(__FILE__).'/header.php'); ?>

<body id="top" class="fl-builder has-post-thumbnail is-singular not-front-page single single-format-standard single-post">
	<style id='receptar-stylesheet-inline-css' type='text/css'>
		.entry-media { 
			background-image: url('<?php $plxShow->lastArtList('#img_url',1,'',$sort='random'); ?>'); 
		}
	</style>

	<div id="page" class="hfeed site">
        <div class="site-inner">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <h1 class="site-title logo type-text">
						<a href="." title="<?php $plxShow->mainTitle(); ?> | <?php $plxShow->subTitle(); ?>">
							<span class="text-logo">
								<?php $plxShow->mainTitle(); ?>
							</span>
						</a>
					</h1>
                    <h2 class="site-description">
						<?php $plxShow->subTitle(); ?>
					</h2>
				</div>
				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				<div id="site-header-widgets" class="widget-area site-header-widgets">
					<?php	
					$placeholder = '';
					# récupération d'une instance de plxMotor
					$plxMotor = plxMotor::getInstance();
					$plxPlugin = $plxMotor->plxPlugins->getInstance('plxMySearch');
					$searchword = '';
					if(!empty($_POST['searchfield'])) {
						$searchword = plxUtils::strCheck(plxUtils::unSlash($_POST['searchfield']));
					}
					if($plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang)!='') {
						$placeholder=' placeholder="'.$plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang).'"';
					}
					?>
					<div class="searchform">
						<form class="form-search" action="<?php echo $plxMotor->urlRewrite('?'.$plxPlugin->getParam('url')) ?>" method="post">
								<label for="search-field" class="screen-reader-text">Recherche</label>
								<input type="search"  placeholder="Mot-clé" class="search-field" name="searchfield" value="<?php echo $searchword ?>" />
						</form>
                </div>
            </header>

			<div id="content" class="site-content">
				<div id="primary" class="content-area">
					<div class="entry-media"></div>

					<div class="entry-inner">
						<header class="entry-header">
							<h1 class="entry-title" itemprop="name"><?php $plxShow->catName(); ?></h1>
							<!--div class="entry-category">
								<span class="cat-links entry-meta-element">
									<a href="http://themedemos.webmandesign.eu/receptar/category/recipes/cakes/" rel="category tag">Cakes</a>, 
									<a href="http://themedemos.webmandesign.eu/receptar/category/recipes/" rel="category tag">Recipes</a>
								</span>
							</div-->
						</header>
						
						<div class="entry-content">
							<!--p class="post-excerpt">Lorem ipsum dolor sit amet erat volutpat.</p-->
							<div class="tiled-gallery type-rectangular tiled-gallery-unresized" data-original-width="960" > 
								<?php 
								$largeur = array(682,270,270,575,381); 
								$hauteur = array(458,180,275,571,571);
								$i=0;
								while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
									<div class="tiled-gallery-item" role="article" id="post-<?php echo $plxShow->artId(); ?>"> 
										<a href="<?php $plxShow->artUrl(); ?>" border="0"> 
										<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=<?php echo $largeur[$i]; ?>&h=<?php echo $hauteur[$i]; ?>&crop-to-fit" 
											data-original-width="<?php echo $largeur[$i]; ?>" 
											data-original-height="<?php echo $hauteur[$i]; ?>" 
											title="<?php $plxShow->artThumbnail('#img_title'); ?>" 
											alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" /> 
										</a>
										<div class="tiled-gallery-caption"> 
											<?php $plxShow->artTitle('link'); ?>
										</div> 
									</div>
									<?php 
									$i = ($i==4) ? $i=1 : $i+1;
								endwhile; ?>
							</div>
						</div>
                                <div class="pagination">
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

										# On effectue l'affichage
										if($plxShow->plxMotor->page > 2) # Si la page active > 2 on affiche un lien 1ere page
											echo '<a class="prev page-numbers" href="'.$f_url.'" title="'.L_PAGINATION_FIRST_TITLE.'">&laquo;</a>';
										if($plxShow->plxMotor->page > 1) # Si la page active > 1 on affiche un lien page precedente
											echo '<a class="prev page-numbers" href="'.$p_url.'" title="'.L_PAGINATION_PREVIOUS_TITLE.'">&lsaquo;</a></span>&nbsp;';
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
				
				
				
				</div><!-- /#content -->
			</div>

			<?php include(dirname(__FILE__).'/footer.php'); ?>
