<?php include(dirname(__FILE__).'/header.php'); ?>

    <div id="page" class="single">
        <div class="content">
            <article class="article">
                <div class="post type-post status-publish format-standard has-post-thumbnail hentry category-general category-technology tag-brewtine tag-hooppler tag-winooze">
                    <div class="single_post">
                        <header>
                            <h1 class="title single-title"><?php $plxShow->staticTitle(); ?></h1>
                        </header>

                        <div class="post-single-content box mark-links">
                            <p>
                                <?php $plxShow->staticContent(); ?>
                            </p>
                        </div>

					</div>
                </div>
            </article>

			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
        </div>
    </div>

    <?php include(dirname(__FILE__).'/footer.php'); ?>
	