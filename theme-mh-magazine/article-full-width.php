<?php include(dirname(__FILE__).'/header.php'); ?>

			<style> 
			/* pour l'indentation des commentaires */
			.level-0 {
				margin-left: 0;
			}
			.level-1 {
				margin-left: 50px;
			}
			.level-2 {
				margin-left: 100px;
			}
			.level-3 {
				margin-left: 150px;
			}
			.level-4 {
				margin-left: 200px;
			}
			.level-5,
			.level-max {
				margin-left: 250px;
			}

			#id_answer {
				margin-bottom: 10px;
				padding:15px;
				border:1px solid #eee;
				width:100%;
				background:#fafafa;
				display:none;
			}
			</style> 

            <div class="mh-wrapper clearfix">
                    <article id="post-72" class="post-72 post type-post status-publish format-standard has-post-thumbnail hentry category-entertainment tag-dancing tag-entertainment tag-india">
                        <header class="entry-header clearfix">
                            <h1 class="entry-title"><?php $plxShow->artTitle(); ?></h1>
                            <p class="mh-meta entry-meta"> 
							<span class="entry-meta-date updated">
								<i class="fa fa-clock-o"></i>
								<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
							</span> 
							<span class="entry-meta-author author vcard">
								<i class="fa fa-user"></i>
								<?php $plxShow->artAuthor() ?>
							</span>
							<span class="entry-meta-categories">
								<i class="fa fa-folder-open-o"></i>
								<?php $plxShow->artCat() ?>							
							</span> 
							<span class="entry-meta-comments">
								<i class="fa fa-comment-o"></i>
								<?php $plxShow->artNbCom(); ?>
							</span>
							</p>
                        </header>
                        <div class="entry-content clearfix">
                            <figure class="entry-thumbnail">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=678&h=281&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" title="<?php $plxShow->artThumbnail('#img_title'); ?>">
                                <figcaption class="wp-caption-text"><?php $plxShow->artThumbnail('#img_title'); ?></figcaption>
                            </figure>
							
							<?php $plxShow->artContent(); ?>
							
                        </div>
                        <div class="entry-tags clearfix">
							<i class="fa fa-tag"></i>
                            <ul>
								<?php $plxShow->artTags('<li><a class="#tag_status" href="#tag_url" title="#tag_name" rel="tag">#tag_name</a></li>') ?>
                            </ul>
                        </div>
                    </article>
                    
					<div class="mh-author-box clearfix">
                        <!--figure class="mh-author-box-avatar"> <img alt="" src="." class="avatar avatar-90 photo" height="90" width="90"></figure-->
                        <div class="mh-author-box-header"> 
							<span class="mh-author-box-name"> <?php $plxShow->artAuthor() ?> </span> 
							<!--span class="mh-author-box-postcount"> <a href="." title="More articles written by MH Themes'"> 33 Articles </a> </span-->
						</div>
						<div class="mh-author-box-bio"> 
							<?php $plxShow->artAuthorInfos('#art_authorinfos'); ?>
						</div>
					</div>
				
					<?php include(dirname(__FILE__).'/commentaires.php'); ?>
				
				</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
