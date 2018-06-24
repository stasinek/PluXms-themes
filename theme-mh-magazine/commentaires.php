<?php if(!defined('PLX_ROOT')) exit; ?>

<?php if($plxShow->plxMotor->plxRecord_coms): ?>
	<div id="comments" class="mh-comments-wrap">
		<h4 class="mh-widget-title"> 
			<span class="mh-widget-title-inner">
				<?php echo $plxShow->artNbCom(); ?>
			</span>
		</h4>
		<ol class="commentlist mh-comment-list">
			<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
				<li id="comment-6" class="comment even thread-even <?php $plxShow->comLevel(); ?> mh-comment-item">
					<article id="div-comment-6" class="mh-comment-body">
						<footer class="mh-comment-footer clearfix">
							<!--figure class="mh-comment-gravatar"> 
								<img alt="" src="."  class="avatar avatar-80 photo" height="80" width="80">
							</figure-->
							<div class="mh-meta mh-comment-meta">
								<div class="vcard author mh-comment-meta-author"> 
									<span class="fn"><?php $plxShow->comAuthor('link'); ?></span>
								</div> 
									<?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?> 
							</div>
						</footer>
						<div class="entry-content mh-comment-content">
							<p><?php $plxShow->comContent(); ?></p>
						</div>
						<div class="mh-meta mh-comment-meta-links">
							<a rel="nofollow" class="comment-reply-link" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')">
								<?php $plxShow->lang('REPLY'); ?>
							</a>
						</div>
					</article>
				</li>
			<?php endwhile; # Fin de la boucle sur les commentaires ?>
			
		</ol>
		<!--p><?php //$plxShow->comFeed('rss',$plxShow->artId()); ?></p-->
	</div>
	
<?php endif; ?>

<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">
		<?php $plxShow->lang('WRITE_A_COMMENT') ?>
		</h3>
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post" id="commentform" class="comment-form">
			<p class="comment-form-comment">
				<label for="comment"><?php $plxShow->lang('COMMENT') ?></label>
				<br>
				<textarea id="comment" name="comment" cols="45" rows="5">
					<?php $plxShow->comGet('content',''); ?>
				</textarea>
			</p>
			<p class="comment-form-author">
				<label for="author"><?php $plxShow->lang('NAME') ?> </label><span class="required">*</span>
				<br>
				<input id="id_name" name="name" type="text" value="<?php $plxShow->comGet('name',''); ?>" size="30">
			</p>
			<p class="comment-form-email">
				<label for="email"><?php $plxShow->lang('EMAIL') ?> </label><span class="required">*</span>
				<br>
				<input id="id_mail" name="mail" type="text" value="<?php $plxShow->comGet('mail',''); ?>" size="30">
			</p>
			<p class="comment-form-url">
				<label for="url"><?php $plxShow->lang('WEBSITE') ?></label>
				<br>
				<input id="id_site" name="site" type="text" value="<?php $plxShow->comGet('site',''); ?>" size="30">
			</p>

			<?php $plxShow->comMessage('<p id="com_message" class="text-red"><strong>#com_message</strong></p>'); ?>

			<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<div class="grid">
						<label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong></label>
						<?php $plxShow->capchaQ(); ?>
						<input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width: auto; display: inline;" />
				</div>
			<?php endif; ?>
			<div class="grid">
					<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
					<p class="form-submit">
						<input name="submit" type="submit" id="submit" class="submit" value="<?php $plxShow->lang('SEND') ?>">
					</p>
			</div>
		</form>
	</div>

	<script>
		function replyCom(idCom) {
			document.getElementById('id_answer').innerHTML='<?php $plxShow->lang('REPLY_TO'); ?> :';
			document.getElementById('id_answer').innerHTML+=document.getElementById('com-'+idCom).innerHTML;
			document.getElementById('id_answer').innerHTML+='<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="cancelCom()"><?php $plxShow->lang('CANCEL'); ?></a>';
			document.getElementById('id_answer').style.display='inline-block';
			document.getElementById('id_parent').value=idCom;
			document.getElementById('id_content').focus();
		}
		function cancelCom() {
			document.getElementById('id_answer').style.display='none';
			document.getElementById('id_parent').value='';
			document.getElementById('com_message').innerHTML='';
		}
		var parent = document.getElementById('id_parent').value;
		if(parent!='') { replyCom(parent) }
	</script>

<?php else: ?>
	<p>
		<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
	</p>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>