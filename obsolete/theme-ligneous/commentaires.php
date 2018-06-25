<?php if(!defined('PLX_ROOT')) exit; ?>

  <?php # Si on a des commentaires ?>
  <?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
  	<h2>Commentaires</h2>
  	<ol class="commentlist">
  		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
    		<li id="<?php $plxShow->comId(); ?>" class="commentind">
    			<img class="avatar" width="32" height="32" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&default=<?php echo urlencode('http'.':'.'//www.gravatar.com/avatar/0c419378 … d=&r=G') ?>&size=32" alt=""/>
    			<cite><?php $plxShow->comAuthor('link'); ?></cite> a dit<br/>
    			<small class="commentmetadata"><a href="#<?php $plxShow->comId(); ?>">le <?php $plxShow->comDate(); ?></a></small>
    			<p><?php $plxShow->comContent() ?></p>
    		</li>
  		<?php endwhile; # Fin de la boucle sur les commentaires ?>
  		<?php # On affiche le fil Atom de cet article ?>
  		<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
  	</ol>
  <?php endif; # Fin du if sur la prescence des commentaires ?>
  
  <?php # Si on autorise les commentaires ?>
  <?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
  		<h2 id="respond" class="commentheading">Ecrire un commentaire</h2>
  		<form id="commentform" action="./?<?php $plxShow->get(); ?>#form" method="post">
    		<p>
    		<input id="author" name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
    		<label for="author"><small>Nom (obligatoire)</small></label>
    		</p>
    		<p>
    		<input id="email" name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" />
    		<label for="email"><small>E-mail (facultatif)</small></label>
    		</p>
    		<p>
    		<input id="url" name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" />
    		<label for="url"><small>Site (facultatif)</small></label>
    		</p>
    		<p class="commentWrapper">
    		<textarea id="comment" name="content" cols="30" rows="10" tabindex="4"><?php $plxShow->comGet('content',''); ?></textarea>
    		</p>
    		<?php # Affichage du capcha anti-spam
    		if($plxShow->plxMotor->aConf['capcha']): ?>
    			<label>V&eacute;rification anti-spam :</label><br />
    			<?php $plxShow->capchaQ(); ?> : <input name="rep" type="text" size="10" />
    			<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
    		<?php endif; # Fin du if sur le capcha anti-spam ?>
    		<p><input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" /></p>
    		<p style="color:red;"><b><?php $plxShow->comMessage(); ?></b></p>
  		</form>
<?php endif; # Fin du if sur l'autorisation des commentaires ?>
