<?php if(!defined('PLX_ROOT')) exit; ?>
                <!-- tabbed content -->
                <div class="tabbed-content post-tabs clearfix" id="post-tabs">

                  <!-- tab navigation (items must be in reverse order because of the tab-design) -->
                  <div class="tabs-wrap clearfix">
                    <ul class="tabs">
                      <li class="comments"><a href="#section-comments"><span><?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?><?php echo $plxShow->artNbCom() ?><?php else: ?><?php $plxShow->lang('COMMENTS_CLOSED') ?><?php endif; ?></span></a></li>
                    </ul>
                  </div>
                  <!-- /tab nav -->

                  <!-- tab sections -->
                  <div class="sections">

                    <!-- comments -->
                    <div class="section clearfix" id="section-comments">
                    
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_coms): ?>                    
                      <div id="comments-wrap">
                        <div class="clearfix">
                        
                          <ul id="comments" class="comments">
                          
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

                            <!-- comment entry -->
                            <li class="comment even thread-even depth-1 withAvatars" id="comment-<?php $plxShow->comId(); ?>">
                              <div class="comment-head">
                                <div class="avatar-box"><img alt="Gravatar" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&amp;d=http://0.gravatar.com/avatar/29a258fbb2d69d21b675424f7bf8ae90?s=48&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D48&amp;r=X" class="avatar" height='48' width='48' /></div>

                                <div class="author">
                                  <span class="by"><a class="comment-id" href="<?php $plxShow->ComUrl() ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a> <?php $plxShow->comAuthor('link'); ?> <?php $plxShow->lang('SAID') ?> :</span><br />
                                  <?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?> 
                                </div>

                              </div>

                              <div class="comment-body clearfix" id="comment-body-<?php $plxShow->comId(); ?>">
                                <div class="comment-text">
                                  <?php $plxShow->comContent() ?>
                                </div><a id="comment-reply-<?php $plxShow->comId(); ?>" name="comment-reply-<?php $plxShow->comId(); ?>"></a>
                              </div>
                            </li>
                            <!-- /comment entry -->
		<?php endwhile; # Fin de la boucle sur les commentaires ?>

                          </ul>
		<?php # On affiche le fil Atom de cet article ?>
		<p style="float:right;"><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></p>

                        </div>
                      </div><!-- /comments-wrap -->
<?php endif; # Fin du if sur la prescence des commentaires ?>
                      
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

                      <!-- comment form -->
                      <div class="comment-form clearfix" id="form">
                      
                      <strong style="color:red;"><?php $plxShow->comMessage(); ?></strong>
                      
                        <form action="<?php $plxShow->artUrl(); ?>#form" method="post">
                          <p><a class="js-link" id="show-author-info" name="show-author-info"><?php $plxShow->lang('WRITE_A_COMMENT') ?></a></p>

                          <div id="author-info" class="hidden">

				                         
                            <div class="row">
                              <input name="name" type="text" size="40" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" placeholder="<?php $plxShow->lang('NAME') ?>" />
                            </div>
				                         
                            <div class="row">
                              <input name="site" type="text" size="40" value="<?php $plxShow->comGet('site',''); ?>" placeholder="<?php $plxShow->lang('WEBSITE') ?>" />
                            </div>
				                         
                            <div class="row">
                              <input name="mail" type="text" size="40" value="<?php $plxShow->comGet('mail',''); ?>" placeholder="<?php $plxShow->lang('EMAIL') ?>" />
                            </div>
                            
                          </div> <!--/ .hidden -->
				                         
                            <div class="row">
                              <textarea name="content" cols="50" rows="8"><?php $plxShow->comGet('content',''); ?></textarea>
                            </div>

				            <?php # Affichage du capcha anti-spam
				            if($plxShow->plxMotor->aConf['capcha']): ?>
                            <div class="row">
                              <?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="1" maxlength="1" />
                            </div>
				            <?php endif; ?>
				
                          <div class="clearfix"></div>

                          <div id="submitbox">
                            <input class="button" type="submit" value="<?php $plxShow->lang('SEND') ?>" />
                          </div>

                        </form>
                      </div>
                      <!-- /comment form -->

<?php endif; # Fin du if sur l'autorisation des commentaires ?>
	
                    </div>
                    <!-- /comments -->

                  </div>
                  <!-- /tab sections -->

                </div>
                <!-- /tabbed content -->