<?php include('header.php'); # On insere le header ?>
			<div class="post">		
			<div id="date">
			  <?php $plxShow->artDate(''); ?></div>
			<div>
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $plxShow->artTitle('link'); ?></h2>
			  </div><div class="posttop">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cat&eacute;gorie : <?php $plxShow->artCat(); ?>
				</div>			
				<div class="entry"><?php $plxShow->artContent(); ?></div></div>
		<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<div class="post">
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Commentaires</h2>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
					<div id="<?php $plxShow->comId(); ?>" class="comment">
						<div class="info_comment"><p>Par <?php $plxShow->comAuthor('link'); ?> le <?php $plxShow->comDate(); ?></p></div>
						<blockquote><p style="background-color:#FFFFCC;width:520px;border:1px dashed #CCCCCC;margin:auto;padding:5px;"><?php $plxShow->comContent() ?></p></blockquote>
					</div>
				<?php endwhile; # Fin de la boucle sur les commentaires ?>
				<?php # On affiche le fil Atom de cet article ?>
				<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
			</div>
		<?php endif; # Fin du if sur la prescence des commentaires ?>
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div class="post" style="text-align:center;">
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ecrire un commentaire</h2>
				<p class="message_com"><?php $plxShow->comMessage(); ?></p>
				<form action="./?<?php $plxShow->get(); ?>#form" method="post" style="background-color:#FFFFCC;width:350px;border:1px dashed #CCCCCC;margin:auto;">
						<label>Nom&nbsp;:<br />
						</label>
						<input name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
						<label>Site (facultatif)&nbsp;:<br />
						</label>
						<input name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
						<label>E-mail (facultatif)&nbsp;:<br />
						</label>
						<input name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
						<label>Commentaire&nbsp;:<br />
						</label>
						<textarea name="content" cols="35" rows="8"><?php $plxShow->comGet('content',''); ?></textarea>
						<?php # Affichage du capcha anti-spam
						if($plxShow->plxMotor->aConf['capcha']): ?>
							<label><strong><br />
							<br />
							V&eacute;rification anti-spam</strong>&nbsp;:</label>
							<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
							<p>
							  <input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
							  <?php endif; # Fin du if sur le capcha anti-spam ?>
				  </p>
							<p>&nbsp;    </p>
							<p><input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" /></p>
				</form>
			</div>
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>
</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
