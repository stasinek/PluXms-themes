<?php if(!defined('PLX_ROOT')) exit; ?>
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
    <div id="comments">
		<!-- On affiche tous les commentaires (si il y a) -->
		<h2>Commentaires du sujet</h2>
		<ol>
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>




			<div id="<?php $plxShow->comId(); ?>" class="comment type-<?php $plxShow->comType(); ?>">
				<li>
				<cite><?php $plxShow->comAuthor('link'); ?></cite> a dit :<br />
				<small><a href="#">le <?php $plxShow->comDate('#num_day #month #num_year(4)'); ?></a> </small>
				<table>
					<tr>
					    <td style="vertical-align:top;">
						<?php if($plxShow->plxMotor->plxRecord_coms->f('type')=='admin') : # si commentaire de type admin ?>
								<p><img src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5(strtolower('ppmarcel@gmail.com')) ?>&amp;default=http://1.gravatar.com/avatar/34d82ee457f66877caeb219274230d7e?s=60&d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&r=G&amp;size=40" alt="Avatar Gravatar" class="gravatar"  /></p>
							    <?php else: # si commentaire d'un visiteur ?>
								<p><img align="top" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&amp;default=http://www.planet-libre.org//themes/principal/images/gravatar.png&amp;size=40" alt="Avatar Gravatar"  /></p>
							    <?php endif; ?>
					   </td>
					   <td>	
						<p><?php $plxShow->comContent(); ?></p>
						</li>
					   </td>
					</tr>
				</table>
            </div>
        <?php endwhile; # Fin de la boucle sur les commentaires ?>
		</ol>
		<?php # On affiche le fil Atom de cet article ?>
        <div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
    </div>
<?php endif; # Fin du if sur la prescence des commentaires ?>
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
    <div id="form">
		<!-- Formulaire de saisie d'un commentaire -->
        <h2>Ecrire un commentaire</h2>
        <p class="message_com"><?php $plxShow->comMessage(); ?></p>
        <form action="<?php $plxShow->artUrl(); ?>#form" method="post">
            <fieldset>
				<table>
					<tr>
						<td><label>Nom&nbsp;:</label></td>
						<td><input name="name" type="text" size="24" value="<?php $plxShow->comGet('name',''); ?>" maxlength="12" /><br /></td>
					</tr>
					<tr>
						<td><label>Site (facultatif)&nbsp;:</label></td>
						<td><input name="site" type="text" size="24" value="<?php $plxShow->comGet('site','http://'); ?>" /><br /></td>
					</tr>
					<tr>
						<td><label>E-mail (facultatif)&nbsp;:</label></td>
						<td><input name="mail" type="text" size="24" value="<?php $plxShow->comGet('mail',''); ?>" /><br /></td>
					</tr>
				</table>
                <label>Commentaire&nbsp;:</label><br>
                <textarea name="content" cols="64" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
                <p class="button">
                    <?php # Affichage du capcha anti-spam
                    if($plxShow->plxMotor->aConf['capcha']): ?>
                        <?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" />
                        <input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
                    <?php endif; # Fin du if sur le capcha anti-spam ?>
					<br>
                    <center><input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" /></center>
                </p>
            </fieldset>
        </form>
    </div>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>

