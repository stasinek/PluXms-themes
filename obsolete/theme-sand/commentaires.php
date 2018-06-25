<div class="information">
	 <span>Le <?php $plxShow->artDate('#num_day/#num_month/#num_year(2)'); ?></span> Class&eacute; dans : <?php $plxShow->artCat(); ?> | <span><?php $plxShow->artNbCom(); ?></span>
	<span><strong><a href="./feed.php?atom" title="Flux RSS du Blog">Abonnez Vous au Flux RSS du Blog !</a></strong></span>
</div>

<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php # On affiche le flux RSS de cet article ?>


<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>

<div id="comments">

	<h2>Commentaires</h2>

	<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

	<div id="<?php $plxShow->comId(); ?>" class="comment type-<?php $plxShow->comType(); ?>">

		

			<div class="roundedavatar">
				<img alt='Avatar' src='http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>' class='avatar' height='60' width='60' />
			</div>

				<p class="info_comment"><?php $plxShow->comAuthor('link'); ?> a dit le <?php $plxShow->comDate('#num_day #month #num_year(4)'); ?>:</p>
				<p class="content_com"><?php $plxShow->comContent() ?></p>

		
				<div class="clearer"></div>

	</div>

	<?php endwhile; # Fin de la boucle sur les commentaires ?>


</div> <!-- fin de id="comments" -->

<?php endif; # Fin du if sur la prescence des commentaires ?>

<?php # Si on autorise les commentaires ?>

<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

<div id="form">

	<h2>Ecrire un commentaire</h2>
	<p class="message_com"><?php $plxShow->comMessage(); ?></p>

	<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
		<fieldset>
			<label>Nom&nbsp;:</label>
			<input name="name" type="text" size="20" class="useruser" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
			<label>E-mail (facultatif)&nbsp;:</label>
			<input name="mail" type="text" size="20" class="mailuser" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
			<label>Site (facultatif)&nbsp;:</label>
			<input name="site" type="text" size="20" class="siteuser" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />

			<label>Commentaire&nbsp;:</label>
				<textarea name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
					<div class="clearer"></div>

					<?php # Affichage du capcha anti-spam
					if($plxShow->plxMotor->aConf['capcha']): ?>

				<?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" class="capchamessage" type="text" />

				<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
				<br />
				<?php endif; # Fin du if sur le capcha anti-spam ?>
				<button type="submit" value="Envoyer">Poster le message</button><button type="reset" value="Effacer">Effacer</button>

		</fieldset>
	</form>
</div>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>