<?php
if (eregi("template.php", $_SERVER['PHP_SELF']))
	exit;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org

Name       : Sunrise
Version    : 1.0

Adapté pour pluxml 3.1 par Stéphane F.

-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php __('pagetitle'); ?></title>
<meta name="generator" content="Pluxml <?php __('version'); ?>" />	
<link rel="stylesheet" type="text/css" href="<?php __('template'); ?>/style.css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="Rss" href="core/rss.php" />
<link rel="alternate" type="application/atom+xml" title="Atom" href="core/atom.php" />
</head>

<body>
	<div class="content">
	
		<div id="header">
		
			<div class="title">
				<h1><?php __('maintitle', 'link'); ?></h1>
				<h2><?php __('subtitle'); ?></h2>
			</div>

		</div>
	
		<div id="subheader">
			<div class="padding">
				<h2>Lorem Ipsum</h2>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dui. Donec ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam mollis tortor in justo. Nunc et massa non sapien cursus auctor. Cras vestibulum, elit eget euismod posuere, leo ligula dictum dui, nec ultrices enim ligula ac lacus. Integer congue. In at mi. Cras vulputate eleifend diam. 
			</div>
		</div>
		
		<div id="main">

			<div class="right_side">

<?php # En mode 'home' ou 'catégorie' # ?>
<?php if($pluxml->mode == 'home' || $pluxml->mode =='cat') : ?>
			<?php # Liste d'articles # ?>

			<?php while($pluxml->result->loop()):?>
			<h2><?php __('title', 'link'); ?></h2>
			<?php __('chapo'); ?>	
			<p class="date"> 
				Par <?php __('author'); ?> 
				<span class="category"><?php __('categorie'); ?></span>				
				<?php if($pluxml->config['allow_com'] == 1 && $pluxml->result->f('allow_com') == 1) : ?>
				<span class="comment"><?php __('nb_com'); ?></span>
				<?php endif; ?>				
				<span class="timeicon"><?php __('date'); ?></span>
			</p>
			<?php endwhile; ?>

			<?php __('pagination'); ?>
			
<?php endif; ?>
<?php # Fin mode 'home'/'catégorie' # ?>


<?php if($pluxml->mode == 'article') : ?>
			<?php # Liste d'articles # ?>
			<?php while($pluxml->result->loop()):?>
				<h1><?php __('title'); ?></h1>
				<?php __('content'); ?>		
				<p class="date"> 
					Par <?php __('author'); ?> 
					<span class="category"><?php __('categorie'); ?></span>				
					<?php if($pluxml->config['allow_com'] == 1 && $pluxml->result->f('allow_com') == 1) : ?>
					<span class="comment"><?php __('nb_com'); ?></span>
					<?php endif; ?>				
					<span class="timeicon"><?php __('date'); ?></span>
				</p>
			<?php endwhile; ?>

			<?php if($pluxml->coms):?>	
			<div id="comments">
				<h2>Commentaires</h2>
				<?php while($pluxml->coms->loop()):?>
				<div class="comment <?php echo 'ligne'.$pluxml->coms->i%2 ?>">
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
					<textarea name="message" cols="35" rows="8"></textarea>
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

			</div><!-- fin div right_side-->
			
			<div class="left_side">
				<div class="nav">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="index.php">Menu 2</a></li>
						<li><a href="index.php">Menu 3</a></li>
					</ul>
				</div>

				<div class="hitems">

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

			</div><!--fin div left_side-->
			
		</div><!-- fin div main -->
		
		<div id="footer">
			<div class="padding">
				Généré par <a href="http://pluxml.org" title="Blog ou Cms sans base de données">Pluxml</a> version <?php __('version')?> en <?php __('chrono'); ?> | 
				<a href="core/admin/">Administration</a> | 
				<a href="#top">Haut de page</a>

			</div>
		</div>
		
	</div><!-- fin div content -->
	
</body>
</html>
