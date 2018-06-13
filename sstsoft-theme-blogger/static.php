<?php include(dirname(__FILE__).'/header.php'); ?>
      <div id="main" class="site-main clr container">
            <div id="primary" class="content-area clr">
                <main id="content" class="site-content left-content clr" role="main">
                   <article class="boxed clr">
 						<header class="page-header clr">
							<h1 class="page-header-title"><?php $plxShow->staticTitle(); ?></h1>
						</header>
						<div class="entry clr">
						<?php $plxShow->staticContent(); ?>
                        </div>
                    </article>
                </main>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				
            </div>
        </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
