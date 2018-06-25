<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="copyright" content="Dhoko" />
<title><?php $plxShow->pageTitle(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />

<!--[if IE]><script type="text/javascript" src="<?php $plxShow->template(); ?>/html5-ie.js"></script>
<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/ie8.css" />
<![endif]-->
</head>
<body>

    <header id="header" role="banner">

	<nav class="nav" role="navigation">
		<ul>
			<li><a href="#">Accueil</a></li>
			-
			<li><a href="#article" title="Allez au contenu">Allez aux Articles</a></li>
		</ul>
	</nav>

	<div class="backlogo"></div>
	<div class="logo"></div>
	<h1><?php $plxShow->mainTitle('link'); ?></h1>
	<div class="web">
		<a href="http://twitter.com/lecolibrilibre" title="Follow Me">
			<img src="<?php $plxShow->template(); ?>/images/twitter_web.png" alt="Follow Me!" />
			<span class="twittos">Suivez moi sur Twitter ! <br /><strong>&#64;lecolibrilibre</strong></span>
	</a>
		<a href="http://www.netvibes.com/dhoko" title="Les flux RSS que je lis chaques jours!">
			<img src="<?php $plxShow->template(); ?>/images/netvibes_web.png" alt="Les flux RSS que je lis chaques jours!" />
			<span class="netvi">Suivez les blogs que je lis avec<br />Mon Netvibes</span>
		</a>

		<a href="./feed.php?atom" title="Abonnez vous au Flux RSS du blog!">
			<img src="<?php $plxShow->template(); ?>/images/fluxrss_web.png" alt="Abonnez vous au Flux RSS du blog!" />
			<span>Les Flux RSS du Blog, abonnez vous !<br /> Suivez l'actualit&#233; du blog</span>
		</a>


	</div>
    </header>
