<?php if(!defined('PLX_ROOT')) exit; ?>
            <div id="sidebar">

              <ul class="blocks">

                <!-- search form -->
                <li class="block">
                  <div class="search-form">
                    <form method="get" id="searchform" action="<?php echo PLX_ROOT ?>?static5/recherche" class="clearfix">
                      <fieldset>
                        <div id="searchfield">
                          <input type="hidden" name="search" value="search"  />
                          <input type="text" name="searchfield" id="searchbox" class="text clearField" value="Rechercher..." onblur="if(this.value=='') this.value='<?php $plxShow->lang('SEARCH') ?>...';" onfocus="if(this.value=='<?php $plxShow->lang('SEARCH') ?>...') this.value='';" />
                        </div><input type="submit" value="" class="submit" />
                      </fieldset>
                    </form>
                  </div>
                </li>
                <!-- /search form -->

                <!-- tabbed content -->
                <li class="block">
                  <div class="block-sidebar_tabs">

                    <div class="tabbed-content sidebar-tabs clearfix" id="instance-sidebartabswidget">

                      <!-- tab navigation (items must be in reverse order because of the tab-design) -->
                      <ul class="box-tabs clearfix">
                        <li class="archives"><a href="<?php $plxShow->urlRewrite('#instance-sidebartabswidget-section-archives') ?>" title="<?php $plxShow->lang('ARCHIVES') ?>"><span><?php $plxShow->lang('ARCHIVES') ?></span></a></li>

                        <li class="tags"><a href="<?php $plxShow->urlRewrite('#instance-sidebartabswidget-section-tags') ?>" title="<?php $plxShow->lang('TAGS') ?>"><span><?php $plxShow->lang('TAGS') ?></span></a></li>

                        <li class="recentcomm"><a href="<?php $plxShow->urlRewrite('#instance-sidebartabswidget-section-recentcomments') ?>" title="<?php $plxShow->lang('LAST_COMMENTS') ?>"><span><?php $plxShow->lang('LAST_COMMENTS') ?></span></a></li>

                        <li class="popular"><a href="<?php $plxShow->urlRewrite('#instance-sidebartabswidget-section-popular') ?>" title="<?php $plxShow->lang('LAST_ARTICLES') ?>"><span><?php $plxShow->lang('LAST_ARTICLES') ?></span></a></li>

                        <li class="categories"><a href="<?php $plxShow->urlRewrite('#instance-sidebartabswidget-section-categories') ?>" title="<?php $plxShow->lang('CATEGORIES') ?>"><span><?php $plxShow->lang('CATEGORIES') ?></span></a></li>
                      </ul>
                      <!-- /tab nav -->

                      <!-- tab sections -->
                      <div class="sections">

                        <div class="box section" id="instance-sidebartabswidget-section-categories">
                          <div class="box-top-left">
                            <div class="box-top-right"></div>
                          </div>

                          <div class="box-main">
                            <div class="box-content">
                              <ul class="menuList categories">
                                <?php $plxShow->catList('','<li id="#cat_id"><a href="#cat_url" class="#fadeThis cat_status" title="#cat_name"><span class="entry">#cat_name (#art_nb)</span></a></li>'); ?>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="box section" id="instance-sidebartabswidget-section-tags">
                          <div class="box-top-left">
                            <div class="box-top-right"></div>
                          </div>

                          <div class="box-main">
                            <div class="box-content">
                              <div class="tag-cloud">
		                        <ul>
		                         <?php $plxShow->tagList('<li class="#tag_status #tag_size"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		                        </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="box section" id="instance-sidebartabswidget-section-archives">
                          <div class="box-top-left">
                            <div class="box-top-right"></div>
                          </div>

                          <div class="box-main">
                            <div class="box-content">
                              <ul class="menuList">
                                <?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" class="fadeThis" title="#archives_name"><span class="entry">#archives_name <span class="details inline">(#archives_nbart)</span></span></a></li>'); ?>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="box section" id="instance-sidebartabswidget-section-popular">
                          <div class="box-top-left">
                            <div class="box-top-right"></div>
                          </div>

                          <div class="box-main">
                            <div class="box-content">
                              <ul class="menuList">
                                <?php $plxShow->lastArtList('<li><a href="#art_url" class="fadeThis #art_status" title="#art_title"><span class="entry">#art_title</span></a></li>'); ?>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="box section" id="instance-sidebartabswidget-section-recentcomments">
                          <div class="box-top-left">
                            <div class="box-top-right"></div>
                          </div>

                          <div class="box-main">
                            <div class="box-content">
                              <ul class="menuList recentcomm">
                                <?php $plxShow->lastComList('<li class="clearfix"><a href="#com_url"><span class="entry">#com_author '.$plxShow->getLang('SAID').': <span class="details">#com_content(34)</span></span></a></li>'); ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- tabbed content -->

                  </div>
                </li>

                <!-- login -->
                <li class="block">
                  <div class="block-login clearfix">
                    <h3 class="title"><span>Espace Membre</span></h3>

                    <div class="block-div"></div>

                    <div class="block-div-arrow"></div>

                    <form action="#" method="post">
                      <fieldset>
                        <label for="log">Utilisateur</label><br />
                        <input type="text" name="log" id="log" value="" size="20" /><br />
                        <label for="pwd">Mot de Passe</label><br />
                        <input type="password" name="pwd" id="pwd" size="20" /><br />
                        <input type="submit" name="submit" value="Connexion" class="button" /> <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" />Se rappeler de moi ?</label><br />
                      </fieldset>
                    </form>

                    <ul>
                      <li><a href="#">Inscription</a></li>

                      <li><a href="#">Mot de Passe perdu ?</a></li>
                    </ul>
                  </div>
                </li>
                <!-- /login -->

                <!-- links -->
                <li class="block">
                  <div class="block-bookmarks">
                    <h3 class="title"><span>Liens</span></h3>

                    <div class="block-div"></div>

                    <div class="block-div-arrow"></div>

                    <ul>
                      <li><a href="http://digitalnature.ro">Digital Nature</a></li>

                      <li><a href="http://google.fr">Google</a></li>

                      <li><a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">Pluxml</a></li>
                    </ul>
                  </div>
                </li>
                <!-- /links -->

              </ul>

            </div>