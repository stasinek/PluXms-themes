<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
</head>
<body>
		<?php include('sidebar.php');?>
		<div id="content">
		<div class="post">
			<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
			<p class="post-info"><?php $plxShow->artCat(); ?> | <?php $plxShow->artDate(); ?></p>
			<?php $plxShow->artContent(); ?>
				<p class="nbcom"><?php $plxShow->artNbCom('link'); ?></p>
		</div>
		<?php # Si on a des commentaires ?>
		<?php if($plxShow->plxMotor->plxGlob_coms->count): ?>
			<div id="comments">
				<h2>Commentaires</h2>
				<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
					<div id="<?php $plxShow->comId(); ?>" class="comment">
						<div class="info_comment"><p><?php $plxShow->comAuthor('link'); ?> le <?php $plxShow->comDate(); ?></p>
						</div>
						<blockquote><p><?php $plxShow->comContent() ?></p></blockquote>
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
				<form action="./?<?php $plxShow->get(); ?>#form" method="post">
					<fieldset>
						<label>Nom&nbsp;:</label>
						<input name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
						<label>Site (facultatif)&nbsp;:</label>
						<input name="site" type="text" size="30" value="<?php $plxShow->comGet('site','http://'); ?>" />
						<label>Commentaire&nbsp;:</label>
						<textarea name="content" cols="80" rows="20"><?php $plxShow->comGet('content',''); ?></textarea>
						<?php # Affichage du capcha anti-spam
						if($plxShow->plxMotor->aConf['capcha']): ?>
							<label><strong>V&eacute;rification anti-spam</strong>&nbsp;:</label>
							<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input name="rep" type="text" size="10" /></p>
							<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
						<?php endif; # Fin du if sur le capcha anti-spam ?>
						<p><input type="submit" value="Envoyer" />&nbsp;<input type="reset" value="Effacer" /></p>
					</fieldset>
				</form>
			</div>
		<?php endif; # Fin du if sur l'autorisation des commentaires ?>
	</div>
</body>
</html>