<?php if(!defined('PLX_ROOT')) exit; ?>

<section id="secondary" class="secondary">
	<div class="secondary-content">
		<div class="secondary-content-container">
			<div class="site-branding">
				<h1 class="site-title logo type-text">
				<a href="." title="<?php $plxShow->mainTitle(); ?>">
				<span class="text-logo"><?php $plxShow->mainTitle(); ?></span></a></h1>
				<h2 class="site-description"><?php $plxShow->subTitle(); ?></h2></div>
			<nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<div class="menu">
					<ul>
						<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
						<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
					</ul>
				</div>
			</nav>
			<div class="widget-area sidebar">
				<aside id="search-2" class="widget widget_search">
					<h2 class="widget-title">Recherche</h2>
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

							<!--form method="get" class="form-search" action="http://themedemos.webmandesign.eu/receptar/">
								<label for="search-field" class="screen-reader-text">Recherche</label>
								<input type="search" value="" placeholder="Mot-clé" name="s" class="search-field" />
							</form-->
						</aside>
						<aside id="text-2" class="widget widget_text">
							<h2 class="widget-title">À propos</h2>
							<div class="textwidget">
								<p><strong>Receptar</strong> est un gabarit simple mais visuellement attrayant, moderne et plein de possibilités.</p>
							</div>
						</aside>

						<aside id="recent-posts-2" class="widget widget_recent_entries">
							<h2 class="widget-title"><?php $plxShow->lang('CATEGORIES'); ?></h2>
							<ul>
								<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
							</ul>
						</aside>
						
						<aside id="recent-posts-2" class="widget widget_recent_entries">
							<h2 class="widget-title"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h2>
							<ul>
								<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
							</ul>
						</aside>

						<aside id="recent-comments-2" class="widget widget_recent_comments">
							<h2 class="widget-title"><?php $plxShow->lang('LATEST_COMMENTS'); ?></h2>
							<ul id="recentcomments">
								<?php $plxShow->lastComList('
								<li class="recentcomments"><span class="comment-author-link">#com_author</span> on <a href="#com_url">#com_content(34)</a></li>'); ?>
							</ul>
						</aside>

						<aside id="tag_cloud-2" class="widget widget_tag_cloud">
							<h2 class="widget-title"><?php $plxShow->lang('TAGS'); ?></h2>
							<div class="tagcloud">
								<?php $plxShow->tagList('
								<a href="#tag_url" class="tag-link-19" title="#tag_count" style="font-size: 14.461538461538pt;">#tag_name</a>'); ?>
						</aside>

						
						<aside id="recent-posts-2" class="widget widget_recent_entries">
							<h2 class="widget-title"><?php $plxShow->lang('ARCHIVES'); ?></h2>
							<ul>
								<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
							</ul>
						</aside>

						<aside id="recent-posts-2" class="widget widget_recent_entries">
							<h2 class="widget-title">RSS</h2>
							<ul>
								<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
								<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
							</ul>
						</aside>
						
					</div>
				</div>
			</div>

			<div class="secondary-controls">
				<button id="menu-toggle" class="menu-toggle" aria-controls="secondary" aria-expanded="false">
					<span class="hamburger-item"></span>
					<span class="hamburger-item"></span>
					<span class="hamburger-item"></span>
					<span class="screen-reader-text">Menu</span>
				</button>
				<div class="social-links">
					<ul id="menu-social-links" class="social-links-items">
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><span class="genericon genericon-facebook-alt"   onclick="location.href='.'" ></span></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><span class="genericon genericon-twitter"   onclick="location.href='.'" ></span></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><span class="genericon genericon-vimeo"   onclick="location.href='.'" ></span></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><span class="genericon genericon-pinterest"   onclick="location.href='.'" ></span></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><span class="genericon genericon-feed"   onclick="location.href='<?php $plxShow->urlRewrite('feed.php?rss') ?>'" ></span></li>
					</ul>
				</div>
			</div>

		</section>
