<?php if(!defined('PLX_ROOT')) exit; ?>
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
	<div id="comments">
		<h2>Commentaires</h2>
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
			<div id="<?php $plxShow->comId(); ?>" class="comment">
				<div class="info_comment">
					<p>Par <?php $plxShow->comAuthor('link'); ?> 
					le <?php $plxShow->comDate('#day #num_day #month #num_year(4) &agrave; #hour:#minute'); ?></p>
				</div>
				<blockquote><p><?php $plxShow->comContent() ?></p></blockquote>
			</div>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
		<?php # On affiche le fil Atom de cet article ?>
		<p id="feed"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></p>
	</div>
<?php endif; # Fin du if sur la prescence des commentaires ?>
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="form">
		<h2>Ecrire un commentaire</h2>
		<p class="message_com"><?php $plxShow->comMessage(); ?></p>
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<label>Nom&nbsp;:</label>
				<input name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
				<label>Site (facultatif)&nbsp;:</label>
				<input name="site" type="text" size="20" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
				<label>E-mail (facultatif)&nbsp;:</label>
				<input name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
				<label>Commentaire&nbsp;:</label>
				<textarea name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea><br/>
				<?php # Affichage du capcha anti-spam
				if($plxShow->plxMotor->aConf['capcha']): ?>
					<?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" />
					<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
				<?php endif; # Fin du if sur le capcha anti-spam ?>
				<input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" />
			</fieldset>
		</form>
	</div>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>