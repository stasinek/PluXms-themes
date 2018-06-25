<?php include('header.php'); # On insere le header ?>
	<div id="content">
		<div class="post">
			<h2><?php $plxShow->artTitle(); ?></h2>
			
			<small>
				Par <?php $plxShow->artAuthor(); ?>, 
				le <?php $plxShow->artDate(); ?> &agrave; <?php $plxShow->artHour(); ?> 
				|  <?php $plxShow->artCat(); ?>
			</small>

			<div class="entry">
				<?php $plxShow->artContent(); ?>
			</div>
<!--
<span id="tags"><strong>Tagged as:</strong> <a href="http://www.darrenhoyt.com/demo/mimbo2/tag/cats/" rel="tag">cats</a>, <a href="http://www.darrenhoyt.com/demo/mimbo2/tag/dogs/" rel="tag">dogs</a>, <a href="http://www.darrenhoyt.com/demo/mimbo2/tag/food/" rel="tag">food</a>, <a href="http://www.darrenhoyt.com/demo/mimbo2/tag/pet/" rel="tag">pet</a></span>			
-->
<!--
<div id="writer" class="clearfloat">
<img src="http://www.darrenhoyt.com/demo/mimbo2/wp-content/themes/mimbo2.2/images/Darren.jpg" alt="" />
<p class="right"><strong><a href="http://www.darrenhoyt.com/demo/mimbo2/author/darren/" title="Posts by Darren">Darren</a></strong> is is a Web Designer and Developer from central Virginia. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc purus velit, faucibus ut, adipiscing id, feugiat at, mi. Curabitur eu nibh laoreet neque interdum nonummy.<br />
<span><a href="mailto:cutout@gmail.com" title="Email this author">Email this author</a> | All posts by <a href="http://www.darrenhoyt.com/demo/mimbo2/author/darren/" title="Posts by Darren">Darren</a></span></p>
</div><!--END WRITER-->
-->
<div class="feed_article"><img src="<?php $plxShow->template(); ?>/img/rss.gif" /><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
		</div> <!--END POST-->

	<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>

		<h3 id="comments"><?php $plxShow->artNbCom(); ?> Commentaires <a href="#respond" title="Leave a comment">&raquo;</a></h3>
		
		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
		
			<ol class="commentlist">
				<li class="alt">
					<small class="commentmetadata">Par <cite><?php $plxShow->comAuthor('link'); ?></cite> le <?php $plxShow->comDate(); ?> :</small>
					<p><?php $plxShow->comContent() ?></p>
				</li>
			</ol>
			
		<?php endwhile; # Fin de la boucle sur les commentaires ?>
		<!--
		<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
		-->
	<?php endif; # Fin du if sur la prescence des commentaires ?>

	<?php # Si on autorise les commentaires ?>
	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
	<h3 id="respond">Laisser un Commentaire</h3>
	<form action="./?<?php $plxShow->get(); ?>#form" method="post" id="commentform">

	<p><input type="text" name="name" id="author" value="<?php $plxShow->comGet('name',''); ?>" size="22" tabindex="1" />
	<label for="author"><small>Nom (requis)</small></label></p>

	<p><input type="text" name="mail" id="email" value="<?php $plxShow->comGet('mail',''); ?>" size="22" tabindex="2" />
	<label for="email"><small>E-Mail (ne sera pas publi&eacute;)</small></label></p>

	<p><input type="text" name="site" id="url" value="<?php $plxShow->comGet('site','http://'); ?>" size="22" tabindex="3" />
	<label for="url"><small>Site Web</small></label></p>

	<p><textarea name="content" id="comment" cols="100%" rows="10" tabindex="4"><?php $plxShow->comGet('content',''); ?></textarea></p>

		<?php # Affichage du capcha anti-spam
		if($plxShow->plxMotor->aConf['capcha']): ?>
			<label><strong>V&eacute;rification anti-spam</strong>&nbsp;:</label>
			<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
			<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
		<?php endif; # Fin du if sur le capcha anti-spam ?>

	<p><input name="submit" class="button" type="submit" id="submit" tabindex="5" value="Poster le Commentaire" /></p>
	</form>
	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
	
	</div> <!--END CONTENT-->


<?php include('sidebar.php'); # On insere la sidebar ?>
<?php include('footer.php');?>
