<?php include(dirname(__FILE__).'/header.php'); ?>

    <div class="blog-header clear">
        <article class="wrapper">
            <div class="blog-site-title">
                <h1><?php $plxShow->staticTitle(); ?></h1>
            </div>
            <div class="breadcrums">
                <span property="itemListElement" typeof="ListItem">
				<a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a>
					&gt; 
				<?php $plxShow->staticTitle(); ?>
				</span>
            </div>
        </article>
    </div>

    </header>

    <div class="site-content">
        <div id="container" class="wrapper clear">
			<article class="blog-post">
				<div class="entry-content">
					<div class="underline"></div>
					<?php $plxShow->staticContent(); ?>
				</div>
			</article>
        </div>
    </div>
     <?php include(dirname(__FILE__).'/footer.php'); ?>

