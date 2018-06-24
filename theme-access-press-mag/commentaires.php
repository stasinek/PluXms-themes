<?php if(!defined('PLX_ROOT')) exit; ?>

<?php if($plxShow->plxMotor->plxRecord_coms): ?>
<div id="comments" class="comments-area">
	<h2 class="comments-title" id="comments">
		<?php echo $plxShow->artNbCom(); ?>
	</h2>

	<ol class="comment-list">
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
			<li id="<?php $plxShow->comId(); ?>" class="comment even <?php $plxShow->comLevel(); ?>">
				<div class="comment-body" id="com-<?php $plxShow->comIndex(); ?>">
					<small>
						<a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>&nbsp;
						<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time> -
						<?php $plxShow->comAuthor('link'); ?>
						<?php $plxShow->lang('SAID'); ?> :
					</small>
					<blockquote>
						<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
					</blockquote>
				<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?></a>
				</div>
			</li>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
	</ol>
	<p><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></p>
</div>
<?php endif; ?>

<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>



<div id="comments" class="comments-area">
    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title"><?php $plxShow->lang('WRITE_A_COMMENT') ?> </h3>

        <form action="<?php $plxShow->artUrl(); ?>#form"  method="post" id="commentform" class="comment-form" >
            <div class="cmm-box-right">
                <div class="control-group">
                    <div class="controls">
					<textarea id="id_content" name="content" cols="35" rows="6" placeholder="<?php $plxShow->lang('COMMENT') ?>" ><?php $plxShow->comGet('content',''); ?></textarea>
                    </div>
                </div>
            </div>
            <div class="cmm-box-left">
                <div class="control-group">
                    <div class="controls">
                        <input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" placeholder="<?php $plxShow->lang('NAME') ?>" >
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input  id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>"  placeholder="<?php $plxShow->lang('EMAIL') ?>"  >
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" placeholder="<?php $plxShow->lang('WEBSITE') ?>" > 
					</div>
                </div>
            </div>
            <div class="clearfix"> </div>
 			<?php $plxShow->comMessage('<p id="com_message" class="text-red"><strong>#com_message</strong></p>'); ?>

			<?php if($plxShow->plxMotor->aConf['capcha']): ?>
				<div class="grid">
					<div class="col sml-12">
						<label for="id_rep"  style="width: 240px;"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong></label>
						<?php $plxShow->capchaQ(); ?>
						<input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width: auto; display: inline;" />
					</div>
				</div>
			<?php endif; ?>
			<div class="grid">
				<div class="col sml-12">
					<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
					<input class="blue" type="submit" value="<?php $plxShow->lang('SEND') ?>" />
				</div>
			</div>
		</fieldset>
	</form>
   </div>
    <!-- #respond -->


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