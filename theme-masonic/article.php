<?php include(dirname(__FILE__).'/header.php'); ?>

    <div class="blog-header clear">
        <article class="wrapper">
            <div class="blog-site-title">
                <h1><?php $plxShow->artTitle(); ?></h1>
            </div>
            <div class="breadcrums">
                <span property="itemListElement" typeof="ListItem">
				<a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a>
					&gt; 
				<?php $plxShow->catName('link'); ?>
					&gt; 
				<?php $plxShow->artTitle(); ?>
				</span>
            </div>
        </article>
    </div>

    </header>

    <div class="site-content">
        <div id="container" class="wrapper clear">
            <div class="primary">

                <article class="blog-post">
					<div class="post-header clear">
					<figure>
						<img width="570" height="255" src="<?php $plxShow->artThumbnail('#img_url'); ?>" class="attachment-large-thumb size-large-thumb wp-post-image" alt="" srcset="<?php $plxShow->artThumbnail('#img_url'); ?>"> 
					</figure>

					<div class="entry-info">
						<div class="catagory-type">
							<?php $plxShow->artCat() ?>
						</div>
						<div class="entry-author vcard author fa fa-user">
							<?php $plxShow->artAuthor() ?>
						</div>            
						<div class="entry-date fa fa-comments">
							<a href="<?php $plxShow->artUrl(); ?>#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
						</div>
						<div class="entry-tag fa fa-tags"> 
							<?php $plxShow->artTags() ?>
						</div>
					</div><!-- .entry-info -->
				</div>
					<div class="entry-content">
                        <div class="underline"></div>
                        <p><?php $plxShow->artContent(); ?></p>
                    </div>

                </article>

                <div id="comments" class="comments-area">
					<?php include(dirname(__FILE__).'/commentaires.php'); ?>
                </div>
                <!-- #comments -->
            </div>

            <?php include(dirname(__FILE__).'/sidebar.php'); ?>

        </div>
        <?php include(dirname(__FILE__).'/footer.php'); ?>