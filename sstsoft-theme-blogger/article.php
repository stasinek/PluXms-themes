<?php include(dirname(__FILE__).'/header.php'); ?>
      <div id="main" class="site-main clr container">
            <div id="primary" class="content-area clr">
                <main id="content" class="site-content left-content clr" role="main">
                   <article class="boxed clr">
                        <div class="post-thumbnail">
                            <img width="590" height="429" src="<?php $plxShow->artThumbnail('#img_url'); ?>" class="attachment-wpex-post size-wpex-post wp-post-image" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" srcset="<?php $plxShow->artThumbnail('#img_url'); ?>">
						</div>
						<header class="page-header clr">
							<h1 class="page-header-title"><?php $plxShow->artTitle(); ?></h1>
							<ul class="post-meta clr">
								<li class="meta-date">
									<time class="art-date" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
										<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
									</time>
								</li>
								<li class="meta-category">
									<span class="meta-seperator">/</span><?php $plxShow->artCat() ?>
								</li>

								<li class="meta-comments comment-scroll">
									<span class="meta-seperator">/</span><?php $plxShow->artNbCom(); ?> 
								</li>
								<li class="meta-likes likes-scroll">
									<span class="meta-seperator">/</span><?php $plxShow->artNbRating(); ?> 
								</li>
							</ul>
						</header>
						<!-- #page-header -->
						<div class="entry clr">
                            <p><?php $plxShow->artContent(); ?></p>
                        </div>
                        <!-- .entry -->
                        <footer class="entry-footer">
						<!--
						<a class="likes add-like" href=""><?php echo L_ADD_LIKE?></a>|<a class="hates add-hate" href=""><?php echo L_ADD_HATE;?></a>
						-->
                        </footer>
                        <!-- .entry-footer -->
                    </article>
                    <div class="author-info boxed clr">
						<h4 class="heading"><span><?php $plxShow->artAuthor() ?></span></h4>
						<div class="author-info-inner clr">
							<!--a href="http://wpexplorer-demos.com/blogger/author/demoswpex/" rel="author" class="author-avatar">
							<img src="http://wpexplorer-demos.com/wp-content/uploads/2015/12/aj-clarke.png" class="avatar avatar-75 photo" alt="AJ Clarke Avatar" height="75" width="75">			
							</a-->
							<div class="author-description">
								<p><?php $plxShow->artAuthorInfos() ?></p>
							</div><!-- .author-description -->
						</div><!-- .author-info-inner -->
					</div>

					<div id="comments" class="comments-area boxed">
					<?php include(dirname(__FILE__).'/commentaires.php'); ?>
					</div>
                </main>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				
            </div>
        </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
