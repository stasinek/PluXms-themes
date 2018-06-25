<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="icon" href="<?php $plxShow->template(); ?>/images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/default.css" media="screen" />
	<?php $plxShow->templateCss() ?>
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div class="col-full">
			<div id="logo">
				<h1 class="site-title"><?php $plxShow->mainTitle('link'); ?></h1>
				<span class="site-description" ><?php $plxShow->subTitle(); ?></span>
			</div>
			<div id="navigation">
				<ul id="main-nav" class="nav fl">
					<?php $plxShow->staticList('Accueil','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				</ul>
				<ul class="rss fr">
					<li><a href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" title="Fil Atom des commentaires">Commentaires</a></li>
					<li><a href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" title="Fil Atom des articles">Articles</a></li>
				</ul>
				<div class="clearer"></div>
			</div>
		</div>
	</div>
