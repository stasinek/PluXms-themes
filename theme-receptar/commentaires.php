<?php if(!defined('PLX_ROOT')) exit; ?>

<div class="comments-area-wrapper">
	<div id="comments" class="comments-area">



<?php if($plxShow->plxMotor->plxRecord_coms): ?>

	<h2 id="comments">
		<?php echo $plxShow->artNbCom(); ?>
	</h2>
	

<ol class="comment-list">
	<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<li id="<?php $plxShow->comId(); ?>" class="comment depth-<?php $plxShow->comLevel(); ?>">
			<article  class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<small>
							<a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>"></a>&nbsp;
							<div class="comment-author vcard">
								<b class="fn">
									<?php $plxShow->comAuthor('link'); ?>
								</b> 
								<span class="says"><?php $plxShow->lang('SAID'); ?> :</span>
							</div><!-- .comment-author -->
						</small>
					</div><!-- .comment-author -->
					<div class="comment-metadata">
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time> -
							</div><!-- .comment-metadata -->
				</footer><!-- .comment-meta -->
				<div class="comment-content">
					<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
				</div>
				<div class="reply">
					<a rel="nofollow" class="comment-reply-link" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?></a>
				</div>
			</article>
		</li>
	<?php endwhile; # Fin de la boucle sur les commentaires ?>
</ol>

	<p><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></p>
<?php endif; ?>

<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

		<h3 id="reply-title" class="comment-reply-title">
			<?php $plxShow->lang('WRITE_A_COMMENT') ?> 
		</h3>				
		<form action="<?php $plxShow->artUrl(); ?>#form" method="post" id="commentform" class="comment-form" novalidate>
			<p class="comment-form-comment">
				<label for="comment"><?php $plxShow->lang('COMMENT') ?></label> 
				<textarea placeholder="<?php $plxShow->lang('COMMENT') ?>" id="id_content" name="content"  cols="45" rows="4"  aria-required="true" required="required"><?php $plxShow->comGet('content',''); ?></textarea>
			</p>
			<p class="comment-form-author">
				<label for="author">
				<?php $plxShow->lang('NAME') ?> </label> 
				<input placeholder="<?php $plxShow->lang('NAME') ?>" id="id_name" name="name"  type="text" value="<?php $plxShow->comGet('name',''); ?>" size="30" aria-required='true' required='required' />
			</p>
			<p class="comment-form-email">
				<label for="email"><?php $plxShow->lang('EMAIL') ?></label> 
				<input placeholder="<?php $plxShow->lang('EMAIL') ?>" id="id_mail" name="mail" type="email" value="" size="30" aria-describedby="email-notes" aria-required='true' required='required' />
			</p>
			<p>
				<?php $plxShow->comMessage('<p id="com_message" class="text-red"><strong>#com_message</strong></p>'); ?>
			</p>

		<?php if($plxShow->plxMotor->aConf['capcha']): ?>
			<br>
			<br>
			<br>
			<label for="id_rep"><i><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></i></label>
			<?php $plxShow->capchaQ(); ?>
			<input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width: auto; display: inline;" />
		<?php endif; ?>
		<p>
			<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
			<input class="blue" type="submit" value="<?php $plxShow->lang('SEND') ?>" />
		</p>
	</form>

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

	</div><!-- #comments -->

	</div>