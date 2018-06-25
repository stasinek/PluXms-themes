<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<div id="comments">
				<h2 id="comments_title">Commentaires</h2>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
					<div id="<?php $plxShow->comId(); ?>" class="comment">
						<div class="info_comment"><p>Par <?php $plxShow->comAuthor('link'); ?> le <?php $plxShow->comDate(); ?></p></div>
						<p><?php $plxShow->comContent() ?></p>
					</div>
				<?php endwhile; # Fin de la boucle sur les commentaires ?>
				<?php # On affiche le fil Atom de cet article ?>
				<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
			</div>
		<?php endif; # Fin du if sur la prescence des commentaires ?>
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div id="form">
				<h2 id="form_title">Ecrire un commentaire</h2>
				<p class="message_com"><?php $plxShow->comMessage(); ?></p>
				<form action="<?php $plxShow->artUrl() ?>#form" method="post">
					<fieldset>
						<label>Nom&nbsp;:</label><br />
						<input name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br /><br />
						<label>Site (facultatif)&nbsp;:</label><br />
						<input name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" /><br /><br />
						<label>E-mail (facultatif)&nbsp;:</label><br />
						<input name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" /><br /><br />
						<label>Commentaire&nbsp;:</label><br />
						<textarea name="content" cols="35" rows="8"><?php $plxShow->comGet('content',''); ?></textarea><br /><br />
						<?php # Affichage du capcha anti-spam
						if($plxShow->plxMotor->aConf['capcha']): ?>
							<label><strong>V&eacute;rification anti-spam</strong>&nbsp;:</label><br />
							<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
							<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
						<?php endif; # Fin du if sur le capcha anti-spam ?>
						<p><input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" /></p>
					</fieldset>
				</form>
			</div>
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>