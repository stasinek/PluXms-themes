<?php include('header.php'); ?>

	<h2><?php $plxShow->artTitle('link'); ?></h2>
	<span class="gris"><?php $plxShow->artDate(); ?> | <?php $plxShow->artCat(); ?></span>
	
	<p><?php $plxShow->artChapo(); ?></p>
	

		
		
		
		
		
		
		
		<!-- commentaires -->
		
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
				<h2><a href="#">Commentaires</a></h2>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): ?>
					<div id="<?php $plxShow->comId(); ?>" class="comment">
						<div class="info_comment"><p>Par <?php $plxShow->comAuthor('link'); ?> le <?php $plxShow->comDate(); ?></p></div>
						<blockquote><p><?php $plxShow->comContent() ?></p></blockquote>
					</div>
				<?php endwhile; ?>
				<span class="comment_nb"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></span><br /><br />
			
		<?php endif; ?>
		
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
				<h2><a href="#">Ecrire un commentaire</a></h2>
				<p class="message_com"><?php $plxShow->comMessage(); ?></p>
				<form action="<?php $plxShow->artUrl() ?>#form" method="post">
					<label>Pseudo*&nbsp;:</label>
					<input name="name" type="text" class="input" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
					<label>Site&nbsp;:</label>
					<input name="site" type="text" class="input" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
					<label>E-mail&nbsp;:</label>
					<input name="mail" type="text" class="input" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
					<label>Commentaire*&nbsp;:</label>
					<textarea name="content" class="textarea"><?php $plxShow->comGet('content',''); ?></textarea>
					<?php 
					if($plxShow->plxMotor->aConf['capcha']): ?>
						<label><strong>Anti-spam*</strong>&nbsp;:</label><br /><br />
						<p><?php $plxShow->capchaQ(); ?> <input name="rep" type="text" size="10" /></p>
						<label>&nbsp;</label> <input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
					<?php endif; ?>
					<p><input type="submit" value="Envoyer" class="button" /><!--&nbsp;<input type="reset" value="Effacer" />--></p>
				</form>
		<?php endif; ?>
	<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php'); # On insere le footer ?>
