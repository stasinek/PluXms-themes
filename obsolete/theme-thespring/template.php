<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
Adapté pour Pluxml par Hybrid's Square
http://hybrids-square.com
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php __('pagetitle'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="<?php __('template'); ?>/default.css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="Rss" href="core/rss.php" />
	<link rel="alternate" type="application/atom+xml" title="Atom" href="core/atom.php" />
</head>
<body>
<div id="header">
	<h1><?php __('maintitle', 'link'); ?></h1>
	<h2><?php __('subtitle'); ?></h2>
</div>
<div id="content">
	<div id="colOne">
	
			<?php # En mode 'home' ou 'catégorie' # ?>
	<?php if($pluxml->mode == 'home' || $pluxml->mode =='cat') : ?>
			<?php # Liste d'articles # ?>
		<?php while($pluxml->result->loop()):?>
		<div class="post">
			<h2 class="title"><?php __('title', 'link'); ?></h2>
			<div class="story">
				<p><?php __('chapo'); ?></p>
			</div>
			<div class="meta">
				<p><?php __('nb_com'); ?> | Catégorie : <?php __('categorie'); ?></p>
			</div>		</div>
<?php endwhile; ?>

		<?php __('pagination'); ?>
			<?php endif; ?>
<?php # Fin mode 'home'/'catégorie' # ?>

<?php # En mode 'article' # ?>
		<?php if($pluxml->mode == 'article') : ?>
				<?php # Liste d'articles # ?>
		<?php while($pluxml->result->loop()):?>
				<div class="post">
			<h2 class="title"><?php __('title'); ?></h2>
			<div class="story">
				<p><?php __('content'); ?></p>
			</div>
			<div class="meta">
				<p>Par <?php __('author'); ?>, le <?php __('date'); ?> à <?php __('hour'); ?> |  <?php __('categorie'); ?></p>
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
	</div>		</div>
	<?php endif; ?>
		<?php endif; ?>
<?php # Fin mode 'article' # ?>	

	</div>
	<div id="colTwo">
		<ul><li>
		<div id="categories">
			<h2>Catégories</h2>
			<?php __('catlist'); ?>
		</div></li><li>
		<div id="syndication">
			<h2>Syndication</h2>
			<ul>
				<li><?php __('rss'); ?></li>
				<li><?php __('atom'); ?></li>
			</ul></div>
		</ul>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="menu">
	<ul>
		<li class="first"><a href="index.php" accesskey="1" title="">Accueil</a></li>
		<li><a href="http://hybrids-square.com" accesskey="2" title="">Hybrid</a></li>
	</ul>
</div>
<div id="footer">
	<p>Généré par <a href="http://pluxml.org" title="Blog ou Cms sans base de données">Pluxml</a> en <?php __('chrono'); ?> | 
		<a href="core/admin/">Administration</a> | 
		<a href="#top">Haut de page</a><br />Copyright &copy; 2007 The Spring. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> | Adapté par <a href="http://hybrids-square.com/">Hybrid's Square</a></p>
</div>
</body>
</html>
