<?php include(dirname(__FILE__).'/header.php'); ?>

    <div id="page" class="single">
        <div class="content">
            <article>
                <div class="post type-post status-publish format-standard has-post-thumbnail hentry category-general category-technology tag-brewtine tag-hooppler tag-winooze">
                    <div class="single_post">
                        <header>
                            <h1 class="title single-title">
								<?php $plxShow->artTitle(); ?>
							</h1>
                            <div class="post-info">
                                <span class="theauthor">
								<?php $plxShow->artAuthor() ?>
							</span> |
                                <span class="thetime"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span> |
                                <span class="thecategory"><?php $plxShow->artCat() ?></span> |
                                <span class="thecomment">
								<a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
							</span>
                            </div>
                        </header>
                        <div class="post-single-content box mark-links">
											
                            <img src="<?php $plxShow->artThumbnail('#img_url'); ?>" width="640">
							<p>
                                <?php $plxShow->artContent(); ?>
                            </p>
                        </div>

                        <div class="related-posts">
                            <h3>Related Posts</h3>

                            <div class="postauthor-top">
                                <ul>
                                    <?php $plxShow->lastArtList('
									<li  style="display: inline-block; width: 45%;" >
										<a rel="nofollow" class="relatedthumb" href="#art_url" title="Hoc enim constituto in philosophia constituta sunt">
											<span class="rthumb">
												<img width="60" height="57" src="#img_url" class="attachment-widgetthumb size-widgetthumb wp-post-image" alt="#img_alt" title="" srcset="#img_url">
											</span>
											<span>
											#art_title										
											</span>
										</a>
										<div class="meta">
											<a href="#art_url" rel="nofollow">No Comments</a> | <span class="thetime">#art_date</span>
										</div> <!--end .entry-meta-->
									</li>',4,ltrim($plxShow->plxMotor->plxRecord_arts->f('categorie'),'home')); ?>
                                </ul>
                            </div>
                        </div>

                        <div class="postauthor-container">
                            <h4><?php $plxShow->lang('WRITTEN_BY'); ?></h4>
                            <div class="postauthor">
                                <img alt="" src="<?php $plxShow->template(); ?>/images/user.png" srcset="<?php $plxShow->template(); ?>/images/user.png" class="avatar avatar-100 photo" height="100" width="100">
                                <h5><?php $plxShow->artAuthor() ?></h5>
                                <p>
									<?php $plxShow->artAuthorInfos('#art_authorinfos'); ?>
								</p>
                            </div>
                        </div>

                    </div>
                    <?php include(dirname(__FILE__).'/commentaires.php'); ?>

                </div>
            </article>


			</div>
    </div>

    <?php include(dirname(__FILE__).'/footer.php'); ?>