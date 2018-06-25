<?php include('header.php'); # On insere le header ?>
<div id="wrapper">
	<div id="content">
		<div>
			<h2 class="entry-title"><?php $plxShow->artTitle('link'); ?></h2>
			<div class="entry-date entry-meta">
				Par <?php $plxShow->artAuthor(); ?>, 
				le <?php $plxShow->artDate(); ?> &agrave; <?php $plxShow->artHour(); ?> 
				|  <?php $plxShow->artCat(); ?><br/>
				Mots cl&eacute;s : <?php $plxShow->artTags(); ?>
			</div>
			<div class="entry-content"><?php $plxShow->artContent(); ?></div>
		</div>
		<div id="commentarea">
		<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<div id="comments-list" class="comments">
				<h3 id="comments">Commentaires</h3>
				<ol>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
					<li id="<?php $plxShow->comId(); ?>" class="comment">
						<div class="commenthead clear">
						<div class="comment-author vcard">Par <?php $plxShow->comAuthor('link'); ?></div>
						<div class="comment-meta">Post&eacute; le <?php $plxShow->comDate(); ?></div>
						<?php $plxShow->comContent() ?>
					</li>
				<?php endwhile; # Fin de la boucle sur les commentaires ?>
				</ol>
			</div><!-- #comments-list .comments -->
			<?php # On affiche le fil Atom de cet article ?>
			<div class="entry-feed"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
		<?php endif; # Fin du if sur la prescence des commentaires ?>
		
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div id="respond">
				<h3>Ecrire un commentaire</h3>
				<div id="form" class="formcontainer">	
					<form id="commentform" action="<?php $plxShow->artUrl(); ?>#form" method="post">
						<p class="comment-notes"><?php $plxShow->comMessage(); ?></p>
						<div class="form-label"><label>Nom&nbsp;:</label></div>
						<div class="form-input"><input name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /></div>
						<div class="form-label"><label>Site (facultatif)&nbsp;:</label></div>
						<div class="form-input"><input name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" /></div
						<div class="form-label"><label>E-mail (facultatif)&nbsp;:</label></div>
						<div class="form-input"><input name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" /></div
						<div class="form-label"><label>Commentaire&nbsp;:</label></div>
						<div class="form-textarea"><textarea name="content" cols="45" rows="8"><?php $plxShow->comGet('content',''); ?></textarea></div>
						<?php # Affichage du capcha anti-spam
						if($plxShow->plxMotor->aConf['capcha']): ?>
							<div class="form-label"><label><strong>V&eacute;rification anti-spam</strong>&nbsp;: <?php $plxShow->capchaQ(); ?></label></div>
							<div class="form-input"><input name="rep" type="text" size="10" /></div>
							<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
						<?php endif; # Fin du if sur le capcha anti-spam ?>
						<div class="form-submit"><input id="submit" type="submit" value="Envoyer" /></div>
					</form>
				</div><!-- #formcontainer -->
			</div><!-- #respond -->
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>
		</div><!-- #commentarea -->
	</div>
</div>
<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
