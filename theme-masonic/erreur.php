		<?php include(dirname(__FILE__).'/header.php'); ?>

		<div class="blog-header clear">
			<article class="wrapper">
				<div class="blog-site-title">
					<h1><?php $plxShow->lang('ERROR'); ?></h1>
				</div>
			 </article>
		</div>
    </header>
    <div class="site-content">
        <div id="container" class="wrapper clear">
            <div class="primary">

                <article class="blog-post">
					<div class="entry-content">
                        <div class="underline"></div>
                        <p><?php $plxShow->erreurMessage(); ?></p>
                    </div>

                </article>

            </div>

            <?php include(dirname(__FILE__).'/sidebar.php'); ?>

        </div>
        <?php include(dirname(__FILE__).'/footer.php'); ?>