<?php include(dirname(__FILE__).'/header.php'); ?>

            <div class="mh-wrapper clearfix">
                <div id="main-content" class="mh-content" role="main" >
                    <article class="post type-post format-standard">
                        <header class="entry-header clearfix">
                            <h1 class="entry-title"><?php $plxShow->staticTitle(); ?></h1>
                        </header>
                        <div class="entry-content clearfix">
							
							<?php $plxShow->staticContent(); ?>
							
                        </div>
                    </article>
				
				</div>
				
				<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>

