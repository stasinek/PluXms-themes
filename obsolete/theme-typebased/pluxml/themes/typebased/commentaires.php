<?php if(!defined('PLX_ROOT')) exit; ?>

<div id="comments_wrap">

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>
		<div id="comments_wrap">
			<h3 id="comments"><?php echo $plxShow->artNbCom() ?></h3>
			<ol class="commentlist">

		<?php
			//Profondeur de l'arborescence des commentaires (de 1 à 4)
			$depth=4;
			//Tableau de tous les commentaires de l'article
			$results = $plxShow->plxMotor->plxRecord_coms->result;
			//Création de l'arborescence des commentaires
			$r = $plxShow->callHook('commentsTree',array($results,$depth));
			ob_start();
			$plxShow->artAuthorEmail();
			$emailAuthor = ob_get_clean();

		while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires 
		
		//Index du commentaire
		$plxCom = $plxShow->plxMotor->plxRecord_coms->i+1;
		//Commentaires intiaux (réponses à l'article)
		if (in_array($plxCom,$r['family'][0])) :
		?>

		<li class="comment <?php  $parite = (($i%2) == 0 ? 'even' : 'odd');echo $parite;$i++;?> thread-<?php echo $parite;?> depth-1" id="li-comment-<?php echo $plxCom;?>">
			<div class="comment-head">
		    	<div class="avatar">
		    		<?php if($plxShow->plxMotor->plxRecord_coms->f('type')=='admin') : # si commentaire de type admin ?>
						
							<img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower($emailAuthor)) ?>?s=32&d=mm" alt="Gravatar" class="photo avatar avatar-32 photo avatar-default" height="32px" width="32px" />
					<?php else: # si commentaire d'un visiteur ?>
						
							<img src="http://www.gravatar.com/avatar/<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>?s=32&d=mm" alt="Gravatar" class="photo avatar avatar-32 photo avatar-default" height="32px" width="32px" />
					<?php endif; ?>

		    	</div>
         		<div class="user-meta">
	            	<span class="name"><?php $plxShow->comAuthor('link'); ?></span>
            		<span class="date"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?></span>
            		<span class="edit"></span>
            		<span class="perma"><a class="num-com" href="<?php $plxShow->comUrl() ?>" title="#<?php echo $plxCom ?>">PERMALINK</a></span>
				</div>
				<div class="clear"></div>
			</div>
			<div id="<?php $plxShow->comId(); ?>">
			<div class="comment-entry"  id="comment-<?php echo $plxCom;?>">
	           <p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent() ?></p>
	           <div class="reply">
	           		<?php if ($depth > 1): ?>

          			<a class="comment-reply-link" href="<?php $plxShow->comUrl() ?>" title="#<?php echo $plxCom ?>" onclick="return addComment.moveForm('comment-<?php echo $plxCom;?>', '<?php echo $plxCom;?>', 'form', '<?php echo $plxShow->artId();?>')"><?php echo $plxShow->lang('REPLY')?></a>
          			<?php endif; ?>

				</div>
			</div>
			</div>

			<?php endif;

			//Affichage des commentaires enfants
			$display = $plxShow->callHook('displayChildren',array($results, $r['family'], $r['isChild'], $plxCom, $depth, $r['artAuthorEmail'], $r['ArtUrl'], $artId, $display));

			if (in_array($plxCom,$r['family'][0])) :?>

		</li>
		<?php endif;
		endwhile; # Fin de la boucle sur les commentaires ?>

	</ol>

		</div>
	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

		<div id="form">

			<h3 class="lc" id="form"><?php $plxShow->lang('WRITE_A_COMMENT') ?></h3>
			
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

	<form action="<?php $plxShow->artUrl(); ?>" method="post" id="commentform">
		<p><input type="text" name="name" id="author"  value="<?php $plxShow->comGet('name',''); ?>" size="22" tabindex="1" />
		<label for="author"><small><?php $plxShow->lang('NAME') ?></small></label></p>

		<p><input type="text" name="mail" id="email" value="<?php $plxShow->comGet('mail',''); ?>" size="22" tabindex="2" />
		<label for="email"><small><?php $plxShow->lang('EMAIL') ?></small></label></p>

		<p><input type="text" name="site" id="url" value="<?php $plxShow->comGet('site',''); ?>" size="22" tabindex="3" />
		<label for="url"><small><?php $plxShow->lang('WEBSITE') ?></small></label></p>

		<p><textarea name="content" id="comment" style="width:97%;" rows="10" tabindex="4"><?php $plxShow->comGet('content',''); ?></textarea></p>

		<?php if($plxShow->plxMotor->aConf['capcha']): ?>
		<label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong>&nbsp;:</label>
		<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input id="id_rep" name="rep" type="text" size="10" /></p>
		<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
		<?php endif; ?>

		<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php $plxShow->lang('SEND') ?>" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $plxShow->artId();?>" />
		</p>
		<input type="hidden" name="comment_post_ID" value="<?php echo $plxShow->artId();?>" id="comment_post_ID" />
		<input type="hidden" name="comment_parent" id="comment_parent" value="0" />
	</form>


			<div class="fix"></div>
		</div> <!-- end #respond -->

	<?php else: ?>
		<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>
	<?php endif; # Fin du if sur l'autorisation des commentaires ?>


</div> <!-- end #comments_wrap -->





				
