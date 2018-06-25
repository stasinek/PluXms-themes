<?php
# Copyright (c) 2006 Skyline-arts.com. All rights reserved.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php __('pagetitle'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="<?php __('template'); ?>/style.css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="Rss" href="core/rss.php" />
	<link rel="alternate" type="application/atom+xml" title="Atom" href="core/atom.php" />
</head>

<body>
<div id="top">
	
</div>

<div id="global">

	<?php # En mode 'home' ou 'catégorie' # ?>
	<?php if($pluxml->mode == 'home' || $pluxml->mode =='cat') : ?>
	<div id="content">
	
	<?php # Liste d'articles # ?>
	<?php while($pluxml->result->loop()):?>
	<div class="post">
			<h2 class="articletitle"><?php __('title', 'link'); ?></h2>
			<p class="post-info"><?php __('author'); ?> | <?php __('date'); ?> à <?php __('hour'); ?> | <?php __('cat'); ?></p>
			<?php __('chapo'); ?>
			<p class="comment_nb"><?php __('nb_com'); ?></p>
		</div>
	<?php endwhile; ?>
	
	</div>
	<?php endif; ?>
	<?php # Fin mode 'home'/'catégorie' # ?>
	
	
	<?php # En mode 'article' # ?>
	<?php if($pluxml->mode == 'article') : ?>
	<div id="content">
	
	<?php # Liste d'articles # ?>
	<?php while($pluxml->result->loop()):?>
	<div class="post">
			<h2 class="articletitle"><?php __('title'); ?></h2>
			<p class="post-info"><?php __('author'); ?> | <?php __('date'); ?> à <?php __('hour'); ?> | <?php __('cat'); ?></p>
			<?php __('content'); ?>
		</div>
	<?php endwhile; ?>
	
			<?php if($pluxml->coms):?>	
		<div id="comments">
			<h2>Commentaires</h2>
		<?php while($pluxml->coms->loop()):?>
		<div class="comment <?php echo 'ligne'.$pluxml->coms->i%2 ?>">
			<p>Par <?php __('com_author', 'link'); ?> le <?php __('com_date'); ?></p>
			<blockquote><p><?php __('com_content'); ?></p></blockquote>
		</div>
		<?php endwhile; ?>
	</div>
		<?php endif; ?>
	
	<?php if($pluxml->config['allow_com'] == 1 && $pluxml->result->f('allow_com') == 1) : ?>
	<div id="form">
		<h2>Ecrire un commentaire</h2>
		<form action="index.php?<?php echo $pluxml->get; ?>" method="post">
			<fieldset>
				<label>Nom&nbsp;:</label>
				<input name="name" type="text" size="30" value="" /><br />
				<label>Site (facultatif)&nbsp;:</label>
				<input name="site" type="text" size="30" value="http://" /><br />
				<label>E-mail (facultatif)&nbsp;:</label>
				<input name="mail" type="text" size="30" value="" /><br />
				<label>Commentaire&nbsp;:</label>
				<textarea name="message" cols="35" rows="8"></textarea>
				
				<?php # affichage du capcha anti-spam
				if($pluxml->config['capcha'] == 1){
					echo '<label><strong>Vérification anti-spam</strong>&nbsp;:</label>';
					echo '<p>'.$capcha->q().'<input name="rep" type="text" size="10" /></p>';
					echo '<input name="rep2" type="hidden" value="'.$capcha->r().'" />';
				} ?>
				
				<p><input type="submit" value="Envoyer" /></p>
			</fieldset>
		</form>
	</div>
	<?php endif; ?>
	
	</div>
	<?php endif; ?>
	<?php # Fin mode 'article' # ?>
	

	<div id="sidebar">
		<div id="categories">
			<h2>Catégories</h2>
			<?php __('catlist', 'Accueil'); ?>
		</div>
		<div id="liens">
			<h2>Liens utiles</h2>
			<ul>
				<li><a href="http://www.kloobik.org">Kloobik.org</a>: le site francophone des projets graphiques Open Source et gratuits depuis 2002</li>
				<li><a href="http://gimp.kloobik.org">Gimp Lounge</a>: Apprendre et découvrir les bases du plus performant éditeur graphique Open Source</li>
				<li><a href="http://pluxml.org">Pluxml</a>: Découvrez et rejoignez la communauté du plus léger système de gestion de contenu</li>
			</ul>
			<h2>Syndication</h2>
			<ul>
				<li><?php __('rss'); ?></li>
				<li><?php __('atom'); ?></li>
			</ul>
			<h2>Administration</h2>
			<ul>
				<li><a href="core/admin/">Administration</a></li>
			</ul>
		</div>
	</div>
	<hr />
	

</div>
	<div id="basdepage">
		<div id="copiraite">
			<p><?php __('pagination'); ?></p>
			<p>Généré par <a href="http://pluxml.org" title="Rejoindre le site officiel de Pluxml">Pluxml</a> | Maquillé par <a href="http://www.kloobik.org" title="Rejoindre le site officiel de Kloobik">Kloobik</a> sous licence CC
				<br />
			Valide <a href="http://validator.w3.org/check?uri=referer">XHTML</a> 1.0 Strict | Valide <a href="http://jigsaw.w3.org/css-validator/">CSS</a></p>
		</div>
	</div>
</body>
</html>
