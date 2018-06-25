<?php if(!defined('PLX_ROOT')) exit; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
	
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="plugins/contact/js/scripts.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="plugins/contact/css/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="plugins/contact/css/styles.css" media="screen" />
	<div id="backgroundPopup"></div>
</head>
<body>
<div id="top">
<div class="container">
	<div id="header">
	</div>
	<div id="menu">
		<ul class="left">
			<?php $plxShow->staticList('Accueil','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?></ul>
		<ul class="right">
			<li><a href="./feed.php?atom/commentaires" title="Fil Atom des commentaires">Commentaires</a></li>
			<li><a href="./feed.php?atom" title="Fil Atom des articles">Articles</a></li>
		</ul>
		<div class="clearer"></div>
	</div>
</div>