<?php if(!defined('PLX_ROOT')) exit; ?>
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
	<div id="comments">
		<h3><?php $plxShow->comMessage(); ?> Réponses à "<?php $plxShow->artTitle('link'); ?>"</h3>
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
			
		<ol class="commentlist">
			<li class="comment even thread-even depth-1" >
				<div class="comment-container">
					<div class="avatar"><img alt='' src='<?php $plxShow->template(); ?>/images/avatar.png' class='photo avatar avatar-80 photo' height='80' width='80' /></div>
					<div class="comment-content" id="<?php $plxShow->comId(); ?>">
						<span class="name"><?php $plxShow->comAuthor('link'); ?></span>
						<span class="date">Le <?php $plxShow->comDate('#num_day #month #num_year(4)'); ?></span>
						<span><a href="<?php $plxShow->ComUrl() ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a></span>
						<p><?php $plxShow->comContent() ?></p>
					</div>
					<div class="fix"></div>
				</div>
			</li>
		<div class="fix"></div>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
		<?php # On affiche le fil Atom de cet article ?>
		<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
	</div>
<?php endif; # Fin du if sur la prescence des commentaires ?>
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="respond">
		<div class="fix"></div>
		<h3>Laisser un message</h3>
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post" id="commentform">
				<p>
					<label for="name">Nom<span class="bg">&nbsp;</span></label>
					<input name="name" type="text" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" class="txt" id="author" size="22" tabindex="1"  />
				</p>
				<p>
					<label for="site">(Site)<span class="bg">&nbsp;</span></label>
					<input name="site" type="text" size="22" value="<?php $plxShow->comGet('site',''); ?>" class="txt" id="email" tabindex="2" />
				</p>
				<p>
					<label for="mail">(E-mail)<span class="bg">&nbsp;</span></label>
					<input name="mail" type="text" size="22" value="<?php $plxShow->comGet('mail',''); ?>" class="txt" id="url" tabindex="3" />
				</p>
				
				<p>
					<label for="content">Commentaire<span class="bg">&nbsp;</span></label>
					<textarea name="content" id="comment" rows="10" cols="50" tabindex="4"><?php $plxShow->comGet('content',''); ?></textarea>
				</p>
				<p>
					<?php # Affichage du capcha anti-spam
					if($plxShow->plxMotor->aConf['capcha']): ?>
						<label for="rep">Capcha<span class="bg">&nbsp;</span></label>
						<?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" />
						<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
				</p>
					<?php endif; # Fin du if sur le capcha anti-spam ?>
					<input type="submit" type="submit" id="submit" class="button" tabindex="5" value="Envoyer" /></span>
		</form>
		<div class="fix"></div>
	</div>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>
