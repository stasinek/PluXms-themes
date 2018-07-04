<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
        
        <?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
		<div id="comment-<?php $plxShow->comId(); ?>" class="commentlist">
            
			<div class="roundedavatar">
<img alt='' src='http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&default=<?php $plxShow->template(); ?>/images/roundedavatar.png' class='avatar avatar-32 photo' height='32' width='32' /><img src="<?php $plxShow->template(); ?>/images/roundedavatar.png" class="toplayer"/>
                        </div>
            
			<div class="commenttext">

				<div class="title">
					Par <?php $plxShow->comAuthor('link'); ?>
                    <small> le <?php $plxShow->comDate('#day #num_day #month #num_year(4) &agrave; #hour:#minute'); ?><a style="float:right;" href="<?php $plxShow->ComUrl() ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a></small>
                                </div>

				<div class="comment-text">
				<?php $plxShow->comContent() ?>
            	                </div>
                
			</div>
        
        </div>       
        <?php endwhile; # Fin de la boucle sur les commentaires ?>
	<?php # On affiche le fil Atom de cet article ?>   
        <p><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></p> 
    
        <?php endif; # Fin du if sur la prescence des commentaires ?>
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?> 
        
        
<form action="<?php $plxShow->artUrl(); ?>#form" method="post" id="commentform">

<div class="commentlist">

<?php $plxShow->comMessage(); ?>

<?php # Affichage du capcha anti-spam
if($plxShow->plxMotor->aConf['capcha']): ?><br />
<?php $plxShow->capchaQ(); ?>&nbsp;:<p><input name="rep" type="text" class="field auto-clear" title="V&eacute;rification anti-spam"/></p>
<input style="display:none" name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
<?php endif; # Fin du if sur le capcha anti-spam ?>                            
<textarea name="content" id="comment" class="un auto-clear" rows="1" tabindex="4" title="Laisser un Commentaire..."></textarea>
<input type="text" name="name" id="name" value="<?php $plxShow->comGet('name',''); ?>" tabindex="1" class="field auto-clear" title="Votre Nom"/>
<input type="text" name="mail" id="mail" value="<?php $plxShow->comGet('mail',''); ?>" tabindex="2" class="field auto-clear" title="Votre E-mail"/>
<input type="text" name="site" id="site" value="<?php $plxShow->comGet('site','http://'); ?>" tabindex="3" class="field auto-clear" title="Votre Site"/>
<input name="submit" class="un" type="submit" id="submit" tabindex="5" value="Envoyer" />

</div>

</form> 
       
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>