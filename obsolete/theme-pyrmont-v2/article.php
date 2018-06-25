<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="container">
	<div id="main">
			<div class="post" id="post-<?php echo $plxShow->artId; ?>">
				<div class="date"><?php $plxShow->artDate('#num_day.#num_month<br />#num_year(4)'); ?></div>
				<div class="title">
					<h2><?php $plxShow->artTitle(); ?></h2>
					
					<div class="postmeta">
						Cat&eacute;gorie : <span class="category"><?php $plxShow->artCat(); ?></span>&nbsp;/ 
						<span class="comments"><a href="#respond" title="Ajouter un commentaire">Ajouter un commentaire</a></span>
					</div><!-- end postmeta -->
				</div><!-- end title -->
				<div class="clear"></div>
				
				<div class="entry">
					<?php $plxShow->artContent(); ?>
					<div class="clear"></div>
				</div><!-- end entry -->
			</div><!-- end post -->
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div id="comments">
				<h3><?php $plxShow->artNbCom();?></h3>
				<span class="add_your_comment"><a href="#respond">Ajouter votre commentaire</a></span>
				<div class="clear"></div>
			</div>
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>
		<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<ol class="commentlist">
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
				<li class="comment even thread-even depth-1" id="li-<?php $plxShow->comId(); ?>">
					<div id="<?php $plxShow->comId(); ?>">
						<div class="comment-author vcard">
							<div class="left"><img alt="" src="<?php $plxPlugin->Gravatar(48); ?>" class="avatar avatar-48 photo avatar-default" height="48" width="48" /></div>
						</div><!-- end vcard -->
						<div class="right">
							<div class="comment-meta commentmetadata"><?php $plxShow->comAuthor('link'); ?>&nbsp;<?php $plxShow->comDate('#num_day.#num_month.#num_year(4) #hour:#minute'); ?></div>
							<?php $plxShow->comContent() ?>
						</div>
						<div class="clear"></div>
					</div>
				</li>
				<?php endwhile; # Fin de la boucle sur les commentaires ?>
			</ol>
			<?php # On affiche le fil Atom de cet article ?>
			<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
		<?php endif; # Fin du if sur la prescence des commentaires ?>
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div id="respond">
				<h2>Ecrire un commentaire</h2>
				<form action="<?php $plxShow->artUrl(); ?>#respond" method="post" id="commentform">
					<div class="user_info">
						<p id="message_com"><?php $plxShow->comMessage(); ?></p>
					</div>
					<div class="input_area">
						<textarea name="content" id="comment" cols="60" rows="5" tabindex="1" class="message_input" onkeydown="if((event.ctrlKey&&event.keyCode==13)){document.getElementById('submit').click();return false};" ><?php $plxShow->comGet('content',''); ?></textarea>
					</div>
					<div class="user_info">
						<div class="single_field">
							<label for="name" class="desc">Nom <abbr title="Obligatoire">*</abbr></label>
							<input type="text" name="name" id="author" value="<?php $plxShow->comGet('name',''); ?>" size="22" tabindex="2" class="comment_input" />
						</div>
						<div class="single_field">
							<label for="mail" class="desc">E-mail</label>
							<input type="text" name="mail" id="email" value="<?php $plxShow->comGet('mail',''); ?>" size="22" tabindex="3" class="comment_input" />
						</div>
						<div class="single_field">
							<label for="site" class="desc">Site</label>
							<input type="text" name="site" id="url" value="<?php $plxShow->comGet('site','http://'); ?>" size="22" tabindex="4" class="comment_input" />
						</div>
						<div class="clear"></div>
					</div>
					<?php if($plxShow->plxMotor->aConf['capcha']): # Affichage du capcha anti-spam ?>
					<div class="user_info">
						<div class="double_field">
							<label for="rep" class="desc"><?php $plxShow->capchaQ(); ?></label>
							<input type="text" name="rep" id="capcha" value="" size="22" tabindex="5" class="comment_input" />
							<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
						</div>
						<div class="clear"></div>
					</div>
					<?php endif; # Fin du if sur le capcha anti-spam ?>
					<div class="submit_button">
						<input name="submit" type="submit" id="submit" tabindex="6" value="Envoyer" class="button" />
						<div class="clear"></div>
					</div>
				</form>
			</div>
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>
	</div><!-- end main --> 
<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<div class="clear"></div>
</div><!-- end container -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>