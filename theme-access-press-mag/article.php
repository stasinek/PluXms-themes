<?php include(dirname(__FILE__).'/header.php'); ?>

<div id="content" class="site-content">
	<div class="apmag-container">
		<div id="accesspres-mag-breadcrumbs" class="clearfix"><span class="bread-you">Vous êtes ici</span>
			<div class="ak-container">
				<a href=".">
					<?php echo $plxShow->getLang('HOME'); ?>
				</a>
				<span class="bread_arrow"> > </span> 
				<span class="current">
					<?php $plxShow->artTitle(); ?>
				</span>
			</div>
		</div>
		<div id="primary" class="content-area">
			<article id="post-<?php echo $plxShow->artId(); ?>"  role="article" class="post hentry">
				<header class="entry-header">
					<h1 class="entry-title"><?php $plxShow->artTitle(); ?></h1>
					<div class="entry-meta clearfix">
						<ul class="post-categories">
							<?php $plxShow->tagList('
							<li class="tag #tag_size">
								<a class="#tag_status" href="#tag_url" title="#tag_name" rel="category tag">#tag_name</a>
							</li>'); ?>
						</ul>
						<span class="byline">
							<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
						</span> - 
						<span class="posted-on">
							<time class="entry-date published" datetime="<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>"><?php $plxShow->artDate('#day, #num_day #month #num_year(4)'); ?></time>
						</span>
						<span class="comment_count">
							<i class="fa fa-comments"></i><a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
						</span>	
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="post_image">
						<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=1132&h=509&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>">
					</div>
					<div class="post_content">
						<p><?php $plxShow->artContent(); ?></p>
					</div>	        	
					<div class="article-ad-section">
						<div class="textwidget">
						<a href="javascript:void(0)"><img src="<?php $plxShow->template(); ?>/css/images/sport-banner.png" alt="Banner ad"></a></div>
					</div> 

					<div class="author-metabox">
						<div class="author-avatar">
							<a class="author-image" href="http://demo.accesspressthemes.com/accesspress-mag/author/admin/"><img alt="" src="http://0.gravatar.com/avatar/34c44815242ffe233e9695e55e2c8a95?s=106&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/34c44815242ffe233e9695e55e2c8a95?s=212&amp;d=mm&amp;r=g 2x" class="avatar avatar-106 photo" height="106" width="106"></a>
						</div><!-- .author-avatar -->
							<div class="author-desc-wrapper">                
								<?php $plxShow->artAuthor() ?>
							<div class="author-description">
								<?php $plxShow->artAuthorInfos('#art_authorinfos'); ?>
							</div><!-- .author-desc-wrapper-->
						</div><!--author-metabox-->
					</div>
						<?php include(dirname(__FILE__).'/commentaires.php'); ?>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->
					</div>
				

					<?php include(dirname(__FILE__).'/sidebar.php'); ?>
					</div>

				</div><!-- .entry-content -->
			</div>

			<?php include(dirname(__FILE__).'/footer.php'); ?>



