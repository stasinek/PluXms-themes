<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
			<div class="post">
				<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
				<p class="post-info">Cat&eacute;gorie : <?php $plxShow->artCat(); ?> <br />
				Auteur: <?php $plxShow->artAuthor(); ?> <br />
				Ecrit le <?php $plxShow->artDate('#day #num_day #month #num_year(4) &agrave; #hour:#minute'); ?> <br />
				Vous avez laissez <?php $plxShow->artNbCom(); ?></p>
				<?php $plxShow->artContent(); ?>
			</div>
		<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<div id="comments">
				<h2>Commentaires</h2>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
					<div id="<?php $plxShow->comId(); ?>" class="comment">
						<blockquote><p><?php $plxShow->comContent() ?></p></blockquote>
						<div class="info_comment">
							Par <?php $plxShow->comAuthor('link'); ?> 
							le <?php $plxShow->comDate('#day #num_day #month #num_year(4) &agrave; #hour:#minute'); ?>
						</div>						
					</div>
				<?php endwhile; # Fin de la boucle sur les commentaires ?>
				<?php # On affiche le fil Atom de cet article ?>
				<div class="feed_article"><?php $plxShow->comFeed('atom',$plxShow->artId()); ?></div>
			</div>
		<?php endif; # Fin du if sur la prescence des commentaires ?>
		<?php # Si on autorise les commentaires ?>
		<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<div id="form">
				<h2>Ecrire un commentaire</h2>
				<p class="message_com"><?php $plxShow->comMessage(); ?></p>
				<form action="<?php $plxShow->artUrl(); ?>#form" method="post">
					<fieldset>
						<label>Nom&nbsp;:</label>
						<input name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" /><br />
						<label>Site (facultatif)&nbsp;:</label>
						<input name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" /><br />
						<label>E-mail (facultatif)&nbsp;:</label>
						<input name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" /><br />
						<label>Commentaire&nbsp;:</label>
						<textarea name="content" cols="35" rows="8"><?php $plxShow->comGet('content',''); ?></textarea>
						<?php # Affichage du capcha anti-spam
						if($plxShow->plxMotor->aConf['capcha']): ?>
							<label><strong>V&eacute;rification anti-spam</strong>&nbsp;:</label>
							<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
							<input name="rep2me="rep2me="rep2me="rep2me="rep2me="rep2me="rep2me="rep2me="rep2me="rep2me="rep2me