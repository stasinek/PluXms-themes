<?php if(!defined('PLX_ROOT')) exit; ?>

    <?php if($plxShow->plxMotor->plxRecord_coms): ?>

        <div id="comments">
            <div class="total-comments"><?php echo $plxShow->artNbCom(); ?></div>
            <ol class="commentlist">
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): ?>
					<li id="<?php $plxShow->comId(); ?>" class="comment <?php $plxShow->comLevel(); ?>" >
						<div id="com-<?php $plxShow->comIndex(); ?>">
							<div class="comment-author vcard">
								<img alt="" src="<?php $plxShow->template(); ?>/images/user.png" srcset="<?php $plxShow->template(); ?>/images/user.png" class="avatar avatar-70 photo" height="70" width="70">
								<div class="comment-metadata">
									<span class="fn" itemprop="creator" itemscope="" itemtype="http://schema.org/Person"><?php $plxShow->comAuthor('link'); ?></span>
									<time><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time>
									<span class="comment-meta">
								</span>
									<span class="reply">
										<a class="comment-reply-link" rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?></a>
									</span>
								</div>
							</div>
							<div class="commentmetadata" itemprop="commentText">
								<div class="wp-review-usercomment-rating wp-review-usercomment-rating-star">

								</div>
								<div class="comment-text-inner">
									<p><?php $plxShow->comContent(); ?></p>
								</div>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
            </ol>
        </div>
                    <p>
                        <?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
                    </p>

		   
                    <?php endif; ?>

<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

<div class="bordersperator2"></div>

<div id="commentsAdd">
	<div id="respond" class="box m-t-6">
		<div id="respond" class="comment-respond">
			<h4><span><?php $plxShow->lang('WRITE_A_COMMENT') ?></span></h4> 

			<form  id="commentform" class="comment-form wp-review-comment-form"  action="<?php $plxShow->artUrl(); ?>#form" method="post">
				<div class="wp-review-comment-form-author">
					<label for="id_name" class="review-comment-field-msg">
						<?php $plxShow->lang('NAME') ?> :</label>
					<input id="author" name="name" type="text" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
				</div>
				<div class="wp-review-comment-form-email">
					<label for="id_mail" class="review-comment-field-msg">
						<?php $plxShow->lang('EMAIL') ?> :</label>
					<input id="email" name="mail" type="text" value="<?php $plxShow->comGet('mail',''); ?>" />
				</div>
				<div class="wp-review-comment-form-url">
					<label for="id_site" class="review-comment-field-msg">
						<?php $plxShow->lang('WEBSITE') ?> :</label>
					<input id="url" name="site" type="text" value="<?php $plxShow->comGet('site',''); ?>" />
				</div>
				<div class="wp-review-comment-form-comment">
					<label for="id_content" class="lab_com">
						<?php $plxShow->lang('COMMENT') ?> :</label>
					<textarea id="comment"  name="content" cols="45" rows="8">
						<?php $plxShow->comGet('content',''); ?>
					</textarea>
				</div>
				<?php $plxShow->comMessage('<p id="com_message" class="text-red"><strong>#com_message</strong></p>'); ?>

				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
					<p style="display: none;"></p>		
					<div class="grid">
						<div class="col sml-12">
							<label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong></label>
							<?php $plxShow->capchaQ(); ?>
								<input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width: auto; display: inline;" />
						</div>
					</div>
					<?php endif; ?>
						<div class="grid">
						<div class="col sml-12">
							<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
							<input class="submit" id="submit" type="submit" value="<?php $plxShow->lang('SEND') ?>" />
						</div>
					</div>
			</form>
		</div>
	</div>
</div>

<script>
	function replyCom(idCom) {
		document.getElementById('id_answer').innerHTML = '<?php $plxShow->lang('
		REPLY_TO '); ?> :';
		document.getElementById('id_answer').innerHTML += document.getElementById('com-' + idCom).innerHTML;
		document.getElementById('id_answer').innerHTML += '<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="cancelCom()"><?php $plxShow->lang('
		CANCEL '); ?></a>';
		document.getElementById('id_answer').style.display = 'inline-block';
		document.getElementById('id_parent').value = idCom;
		document.getElementById('id_content').focus();
	}

	function cancelCom() {
		document.getElementById('id_answer').style.display = 'none';
		document.getElementById('id_parent').value = '';
		document.getElementById('com_message').innerHTML = '';
	}
	var parent = document.getElementById('id_parent').value;
	if (parent != '') {
		replyCom(parent)
	}
</script>

<?php else: ?>
	<p>
		<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
	</p>
	<?php endif;  ?>