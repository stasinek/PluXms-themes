<?php if(!defined('PLX_ROOT')) exit; ?>

<?php 
$oddcomment = ' alt';

if($plxShow->plxMotor->plxRecord_coms): 
	//Profondeur de l'arborescence des commentaires (de 1 à 4)
		$depth=4;
		//Tableau de tous les commentaires de l'article
		$results = $plxShow->plxMotor->plxRecord_coms->result;
		//Création de l'arborescence des commentaires
		$r = $plxShow->callHook('commentsTree',array($results,$depth));
		ob_start();
		$plxShow->artAuthorEmail();
		$emailAuthor = ob_get_clean();
?>
<div id="comments" class="comments-list">
	<h2><?php echo $plxShow->artNbCom() ?></h2>
			<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires 

			//Index du commentaire
			$plxCom = $plxShow->plxMotor->plxRecord_coms->i+1;
			//Commentaires intiaux (réponses à l'article)
			if (in_array($plxCom,$r['family'][0])) :
			?>
			
				<div class="entry <?php echo $oddcomment; ?>" id="comment-<?php $plxShow->comId(); ?>">
			
					<p class="avt" id="li-comment-<?php echo $plxCom;?>"><?php if($plxShow->plxMotor->plxRecord_coms->f('type')=='admin') : # si commentaire de type admin ?>
						
							<img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower($emailAuthor)) ?>?s=32&d=mm" alt="Gravatar"  height="32px" width="32px" />
					<?php else: # si commentaire d'un visiteur ?>
						
							<img src="<?php $plxShow->template(); ?>/images/avatar-replace.png" alt="Avatar" />

					<?php endif; ?></p>
					<p class="name"><?php $plxShow->comAuthor('link'); ?></p>
					<p class="date">
						<a href="#comment-<?php $plxShow->comId(); ?>">
							<?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?> 
						</a>
					</p>
					<div class="con">
						<?php $plxShow->comContent() ?>

						<div class="reply">
			           		<?php if ($depth > 1): ?>

		          			<a class="comment-reply-link" href="<?php $plxShow->comUrl() ?>" title="#<?php echo $plxCom ?>"  onclick="return addComment.moveForm('comment-<?php echo $plxCom;?>', '<?php echo $plxCom;?>', 'form', '<?php echo $plxShow->artId();?>')"><?php echo $plxShow->lang('REPLY')?></a>
		          			<?php endif; ?>

						</div><!-- reply -->
						<p id="comment-<?php echo $plxCom;?>">&nbsp;</p>
			<?php endif;

							//Affichage des commentaires enfants
							$display = $plxShow->callHook('displayChildren',array($results, $r['family'], $r['isChild'], $plxCom, $depth, $r['artAuthorEmail'], $r['ArtUrl'], $artId, $display));
			
				/* Changes every other comment to a different class */
				$oddcomment = ( empty( $oddcomment ) ) ? ' alt ' : '';
				if (in_array($plxCom,$r['family'][0])) :?>

				</div>
			</div>
		<?php endif; endwhile; # Fin de la boucle sur les commentaires ?>
							
					</div>


<?php endif;?>

<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
		<div class="comments-form" id="form">	
			<h3 id="respond"><?php $plxShow->lang('WRITE_A_COMMENT') ?></h3>
			<form id="comment-form" action="<?php $plxShow->artUrl(); ?>#comment-form" method="post">
				<fieldset>
				<p><strong class="required">*</strong>&nbsp;= champs obligatoires</p>
				
			<?php if(isset($_SESSION['msgcom']) && !empty($_SESSION['msgcom']) && $_SESSION['msgcom'] != L_COM_IN_MODERATION):?>
				<p class="error">
					<?php $plxShow->comMessage(); ?>
				</p>
		
			<?php endif;?>
			<?php if(isset($_SESSION['msgcom']) && !empty($_SESSION['msgcom']) && $_SESSION['msgcom'] == L_COM_IN_MODERATION):unset($_SESSION['malvoyant'])?>
				<p class="success">
					<?php $plxShow->comMessage(); ?>.<br/>Merci.
				</p>
			<?php endif;?>

			<div class="cancel-comment-reply">
				<small><a rel="nofollow" id="cancel-comment-reply-link" href="<?php (intval($plxShow->plxMotor->plxRecord_arts->f('nb_com')) != 0)? $plxShow->comUrl() : ''; ?>"><?php $plxShow->lang('CANCEL_REPLY') ?></a></small>
			</div>
				
					<p>
						<input id="comment-name" class="formid" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
						<label for="comment-name"><?php $plxShow->lang('NAME') ?>&nbsp;<strong class="required">*</strong>&nbsp;:</label>
					</p>
					<p>
						<input id="id_site" class="formid" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" />
						<label for="id_site"><?php $plxShow->lang('WEBSITE') ?>&nbsp;:</label>
					</p>
					<p>
						<input id="comment-email" class="formemail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />
						<label for="comment-email"><?php $plxShow->lang('EMAIL') ?>&nbsp;:</label>
					</p>
					<p>
						<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?>&nbsp;<strong class="required">*</strong>&nbsp;:</label>
						<textarea id="id_content" name="content" cols="50" rows="8"><?php $plxShow->comGet('content',''); ?></textarea>
					</p>


					<?php if($plxShow->plxMotor->aConf['capcha']): ?>
					<label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong>&nbsp;:</label>
					<br/>
					<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input id="id_rep" name="rep" type="text" size="10" /></p>
					<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
					<?php endif; ?>

					<input tabindex="5" class="button" type="submit" value="<?php $plxShow->lang('SEND') ?>" /><input type="hidden" name="comment_post_ID" value="<?php echo $plxShow->artId();?>" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $plxShow->artId();?>" id="comment_post_ID" />
					<input type="hidden" name="comment_parent" id="comment_parent" value="0" />
				</fieldset>
			</form>
		</div>
	<?php else: ?>
		<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>
	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
