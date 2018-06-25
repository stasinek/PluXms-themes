<?php include('header.php'); # On insere le header ?>

	<div id="content">
		
		<div class="post">
			<div class="date">
				<div class="jour"><?php $plxShow->artDate(); ?></div>
			</div>
			<div class="titre_art">
				<h2 class="title"><?php $plxShow->artTitle(); ?></h2>
				publié dans la catégorie <em><?php $plxShow->artCat(); ?></em>
			</div>	
			<div class="clear">&nbsp;</div>
			<?php $plxShow->artContent(); ?>
		</div>
		
		<!-- commentaires -->
		
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<div id="comments">
				<h2>Commentaires</h2>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
					<div id="<?php $plxShow->comId(); ?>" class="comment">
						<div class="info_comment"><p>Par <?php $plxShow->comAuthor('link'); ?> le <?php $plxShow->comDate(); ?></p></div>
						<blockquote><p><?php $plxShow->comContent() ?></p></blockquote>
					</div>
				<?php endwhile; ?>
				<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
			</div>
			
		<?php endif; ?>
		
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div id="form">
				<h2>Ecrire un commentaire</h2>
				<p class="message_com"><?php $plxShow->comMessage(); ?></p>
				<form action="<?php $plxShow->artUrl() ?>#form" method="post">
					<label>Nom*&nbsp;:</label>
					<input name="name" type="text" class="input" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
					<label>Site&nbsp;:</label>
					<input name="site" type="text" class="input" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
					<label>E-mail&nbsp;:</label>
					<input name="mail" type="text" class="input" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
					<label>Commentaire*&nbsp;:</label>
					<textarea name="content" class="textarea"><?php $plxShow->comGet('content',''); ?></textarea>
					<?php 
					if($plxShow->plxMotor->aConf['capcha']): ?>
						<label><strong>V&eacute;rification anti-spam*</strong>&nbsp;:</label>
						<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
						<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
					<?php endif; ?>
					<p><input type="submit" value="Envoyer" class="button" />&nbsp;<input type="reset" value="Effacer" /></p>
				</form>
			</div>
		<?php endif; ?>
	</div>
	<?php include('sidebar.php'); # On insere la sidebar ?>
</div>
<?php include('footer.php'); # On insere le footer ?>
