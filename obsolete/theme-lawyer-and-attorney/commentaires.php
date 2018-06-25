<?php if(!defined('PLX_ROOT')) exit; ?>
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
	<div class="comments">
		<h2><?php $plxShow->lang('COMMENTS') ?></h2>
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
			<div id="<?php $plxShow->comId(); ?>" class="type-<?php $plxShow->comType(); ?>">
				<blockquote>
					<p class="info_comment">Le <?php $plxShow->comDate('#num_day #month #num_year(4)'); ?> <?php $plxShow->comAuthor('link'); ?> &agrave; dit :</p>
					<p class="content_com"><?php $plxShow->comContent() ?></p>
				</blockquote>
				<div class="clearer"></div>
			</div>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
		<?php # On affiche le fil Atom de cet article ?>
		<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
	</div>
<?php endif; # Fin du if sur la prescence des commentaires ?>
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="form">
		<h2><?php $plxShow->lang('WRITE_A_COMMENT') ?></h2>
		<p class="message_contact"><?php $plxShow->comMessage(); ?></p>
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<p>
				<input id="id_name" name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
				<label><?php $plxShow->lang('NAME') ?>&nbsp;</label>
			</p>
			<p>
				<input id="id_site" name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" />
				<label><?php $plxShow->lang('WEBSITE') ?>&nbsp;</label>
			</p>
			<p>
				<input id="id_mail" name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" />
				<label><?php $plxShow->lang('EMAIL') ?>&nbsp;</label>
			</p>
			<p>
				<textarea id="id_content" name="content" cols="80%" rows="10"><?php $plxShow->comGet('content',''); ?></textarea>
			</p>
			<?php if($plxShow->plxMotor->aConf['capcha']): ?>
			<label><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong></label>
			<p>
				<?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" />
				<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
			</p>
			<?php endif; # Fin du if sur le capcha anti-spam ?>
			<p>
				<input type="submit" value="<?php $plxShow->lang('SEND') ?>" />
			</p>
		</form>
	</div>
	<?php else: ?>
	<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>
	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
