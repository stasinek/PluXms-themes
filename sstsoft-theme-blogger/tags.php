<?php include(dirname(__FILE__).'/header.php'); ?>

      <div id="main" class="site-main clr container">
            <div id="primary" class="content-area clr">
                <main id="content" class="site-content left-content clr" role="main">
					<header class="page-header boxed clr">
						<h1 class="page-header-title">
							<?php $plxShow->tagName(); ?>
						</h1>
					</header>
					
					<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
                    <article id="post-3971" class="post-3971 post type-post status-publish format-standard has-post-thumbnail hentry category-neat-finds category-travel tag-minimal loop-entry clr boxed">
                        <div class="loop-entry-thumbnail">
                        <?php $plxShow->artThumbnail(); ?>
                        </div>
                        <div class="loop-entry-text clr">
                            <header>
                                <h2 class="loop-entry-title"><?php $plxShow->artTitle('link'); ?></h2>
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
                                </ul>
                            </header>
                            <div class="loop-entry-content entry clr">
                                <?php $plxShow->artChapo(); ?>
                            </div>
                        </div>
                    </article>
 
 					<?php endwhile; ?>
			
					<nav class="pagination text-center">
						<?php $plxShow->pagination(); ?>
					</nav>
                </main>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				
            </div>
        </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>


