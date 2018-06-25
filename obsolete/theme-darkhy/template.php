<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title><?php __('pagetitle'); ?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" type="text/css" href="<?php __('template'); ?>/style.css" media="screen" />
 <link rel="alternate" type="application/rss+xml" title="Rss" href="core/rss.php" />
 <link rel="alternate" type="application/atom+xml" title="Atom" href="core/atom.php" />
</head>
<body>

<div id="wrapper">

<div id="header">

	<!-- Pour la recherche<div class="search">
		<form method="get" action="/Web/Wordpress/wordpress/index.php">
<p>
<input type="text" value="" name="s" id="s" />&nbsp;
</p>
</form> 
	</div> -->

	<ul class="navmenu">
		<li><a href="index.php">Accueil</a></li>
	</ul>

	<h1>
		<?php __('maintitle', 'link'); ?>
		<small><?php __('subtitle'); ?></small>
		<!-- img class="logo" src="http://localhost/Web/Wordpress/wordpress/wp-content/themes/dark/images/logo.gif" alt="" / -->
	</h1>


</div><!-- End of #header -->

<div id="content">

<?php # En mode 'home' ou 'catégorie' # ?>
<?php if($pluxml->mode == 'home' || $pluxml->mode =='cat') : ?>
<?php # Liste d'articles # ?>
<?php while($pluxml->result->loop()):?>
		
		<div class="post">

			<div class="post-meta">
				<span class="post-date"><?php __('date'); ?></span>
				<span class="post-cmts"><?php __('categorie'); ?><br />
				<?php __('nb_com'); ?></span>
			</div>
			<div class="post-main">
				<h2 class="post-title">
					<?php __('title', 'link'); ?>
				</h2>
				<div class="post-entry">
					<?php __('chapo'); ?>
				</div>



			</div><!-- End of .post-main -->

		</div><!-- End of .post -->

<?php endwhile; ?>
<div class="pages"><?php __('pagination'); ?></div>
<?php endif; ?>
<?php # Fin mode 'home'/'catégorie' # ?>

<?php # En mode 'article' # ?>
<?php if($pluxml->mode == 'article') : ?>		
<?php # Liste d'articles # ?>
<?php while($pluxml->result->loop()):?>

		<div class="post">

			<div class="post-meta">
				<span class="post-date"><?php __('date'); ?><br />
				&agrave; <?php __('hour'); ?></span>
				<span class="post-cmts">
					Par <?php __('author'); ?><br />
					Dans <?php __('categorie'); ?><br />
				</span>
			</div>
			<div class="post-main">
				<h2 class="post-title">
					<?php __('title', 'link'); ?>
				</h2>
				<div class="post-entry">
					<?php __('content'); ?>
				</div>
			</div><!-- End of .post-main -->
		</div><!-- End of .post -->

	<div class="cmt-form">
	<h2 id="comments">
		<?php __('nb_com'); ?>
	</div>
	
<?php endwhile; ?>

<?php if($pluxml->coms):?>

	<ol id="commentlist">

<?php while($pluxml->coms->loop()):?>

		<li class="alt">
			<div class="cmt-meta">
				<span class="cmt-author"><?php __('com_author', 'link'); ?></span>
				<span class="cmt-date"><?php __('com_date'); ?></span>
			</div>
			<div class="cmt-main">
				
				<div class="cmt-text">

					<p><?php __('com_content'); ?></p>

				</div>
			</div>
		</li>

<?php endwhile; ?>	

	</ol>

<?php endif; ?>	

<?php if($pluxml->config['allow_com'] == 1 && $pluxml->result->f('allow_com') == 1) : ?>

<div class="cmt-form">
	<h2 id="postcomment">Laisser <span>un commentaire</span></h2>
	<p class="cmt-info">
		Restez polis s'il vous plaît. Votre email ne sera jamais publié.</p>
	
		<form 
				action="index.php?<?php echo $pluxml->get; ?>" 
				method="post" id="commentform">
		
			<p>
			<label for="name">Nom&nbsp;:</label>
			<input type="text" name="name" id="author" value="" tabindex="1" />
			</p>
			<p>
			<label for="mail">E-mail&nbsp;:</label>
			<input type="text" name="mail" id="email" value="" tabindex="2" />
			</p>
			<p>
			<label for="site">Site web&nbsp;:</label>
			<input type="text" name="site" id="url" value="" tabindex="3" />
			</p>
		
		<p>
			<label for="message">Commentaire&nbsp;:</label>
			<textarea name="message" id="comment" cols="" rows="" tabindex="4"></textarea>
		</p>  
		<?php # affichage du capcha anti-spam
   			if($pluxml->config['e du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du ce du c