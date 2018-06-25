<?php if(!defined('PLX_ROOT')) exit; ?>
                <?php # Si on a des commentaires ?>
                <?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
		<h1 class="comments-title"><?php $plxShow->artNbCom(); ?></h1>
		<div id="comments">
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
			<div class="comment" id="<?php $plxShow->comId(); ?>">
				<div class="comment-avatar">
					<img src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&amp;default=http://www.gravatar.com/avatar/3b3be63a4c2a439b013787725dfce802.jpg&amp;size=50" alt="Gravatar" height="50" width="50" />
				</div>
				<div class="comment-content">
					<div class="comment-info"><span><?php $plxShow->comAuthor('link'); ?></span> Le <?php $plxShow->comDate('#num_day #month #num_year(4) &agrave; #hour:#minute'); ?></div>
					<?php $plxShow->comContent() ?>
				</div>
			</div>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
		<?php # On affiche le fil Atom de cet article ?>
		<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
		</div>
		<?php endif; # Fin du if sur la prescence des commentaires ?>
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post" id="form">
			<p><?php $plxShow->comMessage(); ?></p>
			Votre commentaire
			<p><textarea name="content" id="comment"><?php $plxShow->comGet('content',''); ?></textarea></p>
			
			<p><input type="text" name="name" id="author" class="text" value="<?php $plxShow->comGet('name',''); ?>" />
			<label for="author">Nom </label></p>

			<p><input type="text" name="mail" id="email" class="text" value="<?php $plxShow->comGet('mail',''); ?>" />
			<label for="email">E-Mail </label></p>

			<p><input type="text" name="site" id="url" class="text" value="<?php $plxShow->comGet('site','http://'); ?>" />
			<label for="url">Site (facultatif)</label></p>
			<?php # Affichage du capcha anti-spam
			if($plxShow->plxMotor->aConf['capcha']): ?>
				<label for="captcha"><strong>V&eacute;rification anti-spam</strong>&nbsp;:</label>
				<p><?php $plxShow->capchaQ(); ?><br />
				<input name="rep" type="text" id="captcha" class="text" size="10" /></p>
				<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
			<?php endif; # Fin du if sur le capcha anti-spam ?>
			<p><input name="submit" type="submit" id="submit" value="Envoyer" /></p>
		</form>
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>