<?php
if (eregi("template.php", $_SERVER['PHP_SELF']))
	exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Pluralism
Description: A two-column, fixed-width template fit for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20071218
Demo : http://www.freecsstemplates.org/preview/pluralism

Adapté pour pluxml 3.1 par Stéphane F.

-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="generator" content="Pluxml <?php __('version'); ?>" />
<title><?php __('pagetitle'); ?></title>
<link href="<?php __('template'); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="Rss" href="core/rss.php" />
<link rel="alternate" type="application/atom+xml" title="Atom" href="core/atom.php" />

</head>

<body>
<div id="wrapper">

	<div id="wrapper2">
	
		<div id="header">
		
			<div id="logo">
				<h1><?php __('maintitle', 'link'); ?></h1>
				<p><?php __('subtitle'); ?></p>
			</div>
			
			<div id="menu">
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="index.php">Menu 2</a></li>
					<li><a href="index.php">Menu 3</a></li>
				</ul>
			</div>
			
		</div>
		<!-- end #header -->
		
		<div id="page">
		
			<div id="content">
			
			<?php # En mode 'home' ou 'catégorie' # ?>
			<?php if($pluxml->mode == 'home' || $pluxml->mode =='cat') : ?>
				
				<?php # Liste d'articles # ?>
				<?php while($pluxml->result->loop()):?>

				<div class="post">
					<h2 class="title"><?php __('title', 'link'); ?></h2>
					<p class="content"><?php __('chapo'); ?></p>
					<p class="meta"> 
						<span class="posted">Par <?php __('author'); ?>, le <?php __('date'); ?> à <?php __('hour'); ?></span> 
						<span class="category"><?php __('categorie'); ?></span>
						<?php if($pluxml->config['allow_com'] == 1 && $pluxml->result->f('allow_com') == 1) : ?>
						<span class="comments"><?php __('nb_com'); ?></span>
						<?php endif; ?>
					</p>
				</div>
				
				<?php endwhile; ?>

				<?php __('pagination'); ?>
				
			<?php endif; ?>
			<?php # Fin mode 'home'/'catégorie' # ?>
	
			<?php # En mode 'article' # ?>
			<?php if($pluxml->mode == 'article') : ?>

				<div class="post">
					<h2 class="title"><?php __('title'); ?></h2>
					<p class="content"><?php __('content'); ?></p>
					<p class="meta">
						<span class="posted">Par <?php __('author'); ?>, le <?php __('date'); ?> à <?php __('hour'); ?></span>
						<span class="category"><?php __('categorie'); ?></span>
					</p>
				</div>
			
				<?php if($pluxml->coms):?>	
				<div id="comments">
					<h2>Commentaires</h2>
					<?php while($pluxml->coms->loop()):?>
					
					<div id="comment-<?php echo $pluxml->coms->i ?>" class="comment-<?php echo $pluxml->coms->i%2 ?>">
						<p>Par <?php __('com_author', 'link'); ?> le <?php __('com_date'); ?> <?php __('com_hour'); ?></p>
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
						<textarea name="message" cols="35" rows="8"></textarea><br /><br />
						<?php # affichage du capcha anti-spam
						if($pluxml->config['capcha'] == 1){
							echo '<label><strong>Vérification anti-spam</strong>&nbsp;:</label>';
							echo '<p>'.$capcha->q().'&nbsp;<input name="rep" type="text" size="10" /></p>';
							echo '<input name="rep2" type="hidden" value="'.$capcha->r().'" />';
						} ?>						
						<p><input type="submit" value="Envoyer" /></p>
					</fieldset>
					</form>
				</div>
				<?php endif; ?>			
			
			<?php endif; ?>
			<?php # Fin mode 'article' # ?>	

	
			</div>
			<!-- end #content -->
			
			<div id="sidebar">
			
				<div id="categories">
					<h2>Catégories</h2>
					<?php __('catlist'); ?>
				</div>
			
				<div id="syndication">
					<h2>Syndication</h2>
					<ul>
						<li><?php __('rss'); ?></li>
						<li><?php __('atom'); ?></li>
					</ul>
				</div>
					
			</div>
			<!-- end #sidebar -->
			
			<div style="clear: both;">&nbsp;</div>
			
			<div id="widebar">
			
				<div id="colA">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros. Mauris ac eros. Aenean velit orci, adipiscing quis, dapibus sit amet, iaculis in, urna. Quisque id nunc id nibh malesuada condimentum. 
				</div>
				
				<div id="colB">
					Etiam risus. Donec commodo mattis enim. Vivamus euismod erat. Suspendisse ullamcorper. Donec pharetra, mauris sed elementum bibendum, lectus nulla facilisis nulla, eu lacinia sem neque ac nibh. Integer iaculis, mauris vel mollis mollis, nisi arcu fermentum odio, eget porta diam ligula id elit. Fusce mollis. Proin semper fringilla diam. Nullam lobortis viverra massa. Quisque pulvinar nibh a velit. Nunc commodo vestibulum leo. 
				</div>
				
				<div id="colC">
					Nulla facilisi. Aliquam pellentesque fringilla nisi. Nulla aliquam quam eget mi. Maecenas blandit sodales metus. Nam euismod nisl vitae lorem bibendum placerat. Aliquam ligula. Etiam vitae arcu. Maecenas risus erat, viverra vitae, feugiat sed, pellentesque ut, sapien. Praesent volutpat malesuada mi. Morbi vestibulum tellus at tellus. Cras tincidunt. Duis malesuada augue sed enim. Curabitur at metus. Donec commodo scelerisque sem. Integer elementum eros non nisl. 
				</div>
				
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #widebar -->
			
		</div>
		<!-- end #page -->
		
	</div>
	<!-- end #wrapper2 -->
	
	<div id="footer">
		<p>
		Généré par <a href="http://pluxml.org" title="Blog ou CMS &agrave; l'Xml">Pluxml</a> version <?php __('version')?> en <?php __('chrono'); ?> | 
		<a href="core/admin/">Administration</a> | 
		<a href="#top">Haut de page</a>
		</p>
	</div>
	
</div>
<!-- end #wrapper -->
</body>
</html>