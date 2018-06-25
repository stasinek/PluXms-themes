<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="comments">
<?php # Si on a des commentaires ?>
<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
 <div id="comment-header">
  <ul id="comment-header-top" class="clearfix">
   <li id="comment-feed"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></li>
   <li id="comment-title"><?php $plxShow->artNbCom(); ?></li>
  </ul>

  <div id="comment-header-bottom" class="clearfix">
   <ul class="switch">
    <li id="comment-switch" class="active">Class&eacute; dans : <?php $plxShow->artCat(); ?></li>
    <li id="trackback-switch" class="non-active">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></li>
   </ul>
   <a href="<?php $plxShow->artUrl(); ?>#respond" id="add-comment">&Eacute;crire un Commentaire</a>


  </div><!-- comment-header-bottom END -->
 </div><!-- comment-header END -->


<div id="comment-list">
<!-- start commnet -->
<ol class="commentlist">
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>	
 <li class="comment <?php $plxShow->comType(); ?>-comment" id="comment-<?php $plxShow->comId(); ?>">
  <div class="comment-meta">
   <div class="comment-meta-left clearfix">
   <img src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&amp;default=http://www.gravatar.com/avatar/3b3be63a4c2a439b013787725dfce802.jpg&amp;size=32" alt="Avatar Gravatar" class="avatar avatar-35 photo" height="35" width="'35" />
    <ul class="comment-name-date">

     <li class="comment-name">
<span id="commentauthor-<?php $plxShow->comId(); ?>"><?php $plxShow->comAuthor('link'); ?></span>
     </li>
     <li class="comment-date">Le <?php $plxShow->comDate('#num_day #month #num_year(4)'); ?></li>
    </ul>
   </div>

   <ul class="comment-act">

    <li class="comment-reply"><a rel='nofollow' class='comment-reply-link' href='<?php $plxShow->artUrl(); ?>#respond' onclick='return addComment.moveForm("comment-content-<?php $plxShow->comId(); ?>", "<?php $plxShow->comId(); ?>", "respond", "20")'><span><span>REPONDRE</span></span></a></li>
    <li class="comment-quote"><a href="<?php $plxShow->artUrl(); ?>#" onclick="MGJS_CMT.quote('commentauthor-<?php $plxShow->comId(); ?>', 'comment-<?php $plxShow->comId(); ?>', 'comment-content-<?php $plxShow->comId(); ?>', 'comment');">CITER</a></li>
     <li>&nbsp;&nbsp;<a href="<?php $plxShow->ComUrl() ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a></li>
       </ul>

  </div>
  <div class="comment-content" id="comment-content-<?php $plxShow->comId(); ?>">
    <p><?php $plxShow->comContent() ?></p>
  </div>
</li>
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
</ol>
<!-- comments END -->

</div><!-- #comment-list END -->

<?php endif; # Fin du if sur la prescence des commentaires ?>
<?php # Si on autorise les commentaires ?>
<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
<div class="comment-form-area" id="respond">
<p class="message_com"><?php $plxShow->comMessage(); ?></p>
<form action="<?php $plxShow->artUrl(); ?>#form" method="post">

<div id="guest-info">
 <div id="guest-name"><label for="author"><span>NOM</span>( requis )</label><input type="text" name="name" id="author" value="<?php $plxShow->comGet('name',''); ?>" size="22" tabindex="1" aria-required='true' /></div>
 <div id="guest-email"><label for="email"><span>E-MAIL</span>( facultatif ) - Non Publié -</label><input type="text" name="mail" id="email" value="<?php $plxShow->comGet('mail',''); ?>" size="22" tabindex="2" aria-required='true' /></div>
 <div id="guest-url"><label for="url"><span>SITE</span></label><input type="text" name="site" id="url" value="<?php $plxShow->comGet('site',''); ?>" size="22" tabindex="3" /></div>
					<?php # Affichage du capcha anti-spam
					if($plxShow->plxMotor->aConf['capcha']): ?>
					<div id="guest-rep"><label for="rep"><span><?php $plxShow->capchaQ(); ?></span></label>
					  <input type="text" name="rep" id="rep" size="10" tabindex="4" />
					  <input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
					</div>
					<?php endif; # Fin du if sur le capcha anti-spam ?>
</div>

<div id="comment-textarea">
 <textarea name="content" id="comment" cols="50" rows="10" tabindex="5"><?php $plxShow->comGet('content',''); ?></textarea>
</div>

<div id="comment-submit-area">
 <input name="submit" type="submit" id="comment-submit" class="button" tabindex="6" value="Envoyer" title="Envoyer" alt="Envoyer" />
</div>

</form>
</div><!-- #comment-form-area END -->
<?php endif; # Fin du if sur l'autorisation des commentaires ?>

</div><!-- #comment END-->