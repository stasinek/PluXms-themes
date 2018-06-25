<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

		<div id="comments">
			<h2><?php echo $plxShow->artNbCom() ?> Commentaire(s)</h2>
			<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
				<div id="<?php $plxShow->comId(); ?>" class="comment">
					<blockquote>
						<p class="info_comment"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &agrave; #hour:#minute'); ?> <?php $plxShow->comAuthor('link'); ?> <?php $plxShow->lang('SAID') ?> : <a class="num-com" href="<?php $plxShow->ComUrl() ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a></p>
						<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent() ?></p>
					</blockquote>
				</div>
			<?php endwhile; # Fin de la boucle sur les commentaires ?>

			<div class="feed-art-com"><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></div>
		</div>
	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
		<div id="form">
			<h2><?php $plxShow->lang('WRITE_A_COMMENT') ?></h2>
			<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
				<fieldset id="ident">
					<label for="id_name"><?php $plxShow->lang('NAME') ?>&nbsp;:</label>
					<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
					<label for="id_site"><?php $plxShow->lang('WEBSITE') ?>&nbsp;:</label>
					<input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" /><br />
					<label for="id_mail"><?php $plxShow->lang('EMAIL') ?>&nbsp;:</label>
					<input id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?>&nbsp;:</label>
					<textarea id="id_content" name="content" cols="35" rows="6"><?php $plxShow->comGet('content',''); ?></textarea>
				</fieldset>
				<fieldset id="capcha">
					<?php if($plxShow->plxMotor->aConf['capcha']): ?>
					<label class="qlabel" for="id_rep"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?>&nbsp;:</label>
					<p class="qapcha"><?php $plxShow->capchaQ(); ?></p>
					<input class="qinput" id="id_rep" name="rep" type="text" size="10" />
					<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
					<?php endif; ?>
				</fieldset>
				<fieldset id="submit">
					<p class="com-alert"><?php $plxShow->comMessage(); ?></p>
					<p class="submit"><input type="submit" value="<?php $plxShow->lang('SEND') ?>" /></p>
				</fieldset>
			</form>
		</div>
	<?php else: ?>
		<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
