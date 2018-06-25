<?php if(!defined('PLX_ROOT')) exit; ?>
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
	<div id="comments">
		<h2>Commentaires</h2>
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
			<div id="<?php $plxShow->comId(); ?>" class="comment type-<?php $plxShow->comType(); ?>">
				<blockquote>
				<?php if($plxShow->plxMotor->plxRecord_coms->f('type')=='admin') : # si commentaire de type admin ?>
                        <p class="gravatar"><img src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5(strtolower('cassius974@gmail.com')) ?>&amp;default=http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=48&amp;size=48" align="left" alt="" style="margin-right: 10px;" alt="Avatar Gravatar" /></p>
                    <?php else: # si commentaire d'un visiteur ?>
                        <p class="gravatar"><img src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&amp;default=http://www.clicali.re/demos/ajc/data/images/avatar.png&amp;size=48" align="left" alt="" style="margin-right: 10px;" alt="Avatar Gravatar" /></p>
                    <?php endif; ?>
					<p class="info_comment"><?php $plxShow->comAuthor('link'); ?> :<br /><?php $plxShow->comDate('#num_day #month'); ?> &agrave; <?php $plxShow->artHour(); ?></p>
					<p class="content_com"><?php $plxShow->comContent() ?></p>
				</blockquote>
				<div class="clearer"></div>
			</div>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
		<?php # On affiche le fil RSS de cet article ?>
<div class="feed_article"><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></div>
	</div>
<?php endif; # Fin du if sur la prescence des commentaires ?>
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="form">
		<h2>Ecrire un commentaire</h2>
		<p class="message_com"><?php $plxShow->comMessage(); ?></p>
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<div class="form_left">
					<label>Nom&nbsp;:</label>
					<input name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
					<label>Site (facultatif)&nbsp;:</label>
					<input name="site" type="text" size="20" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
					<label>E-mail (facultatif)&nbsp;:</label>
					<input name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
				    <label>Commentaire&nbsp;:</label>
				    <textarea name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
				</div>
				
				<div class="clearer"></div>
				<p class="button">
					<?php # Affichage du capcha anti-spam
					if($plxShow->plxMotor->aConf['capcha']): ?>
						<?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /><br />
						<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
					<?php endif; # Fin du if sur le capcha anti-spam ?>
					<span><input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" /></span>
				</p>
			</fieldset>
		</form>
	</div>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>