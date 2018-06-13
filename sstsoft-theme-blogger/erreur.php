<?php include(dirname(__FILE__).'/header.php'); ?>

      <div id="main" class="site-main clr container">
            <div id="primary" class="content-area clr">
                <main id="content" class="site-content left-content clr" role="main">
					<header class="page-header boxed clr">
						<h1 class="page-header-title">
							<?php $plxShow->lang('ERROR'); ?>
						</h1>
					</header>
                    <article id="post-3971" class="post-3971 post type-post status-publish format-standard has-post-thumbnail hentry category-neat-finds category-travel tag-minimal loop-entry clr boxed">
                        <div class="loop-entry-text clr">
                            <div class="loop-entry-content entry clr">
                                <?php $plxShow->erreurMessage(); ?>
                            </div>
                        </div>
                    </article>
		
                </main>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				
            </div>
        </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
