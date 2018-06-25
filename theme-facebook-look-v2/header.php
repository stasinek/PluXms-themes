<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
        <link rel="shortcut icon" href="<?php $plxShow->template(); ?>/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<?php $plxShow->templateCss() ?>
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
        <script type="text/javascript" language="JavaScript" src="<?php $plxShow->template(); ?>/scripts/placeholder.js"></script>

</head>


<body>

<div id="header">

	<!-- Navigation bar starts -->
	<div id="navbar">

		<ul>
        	<!-- Affichage du logo. Vous pouvez dé-commenter pour afficher le titre de votre blog. -->
			<li class="logo">
            <!-- <?php $plxShow->mainTitle('link'); ?> -->
            <a href="index.php"><img src="<?php $plxShow->template(); ?>/images/logo.png" /></a></li>
            <?php $plxShow->staticList('Accueil','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
        </ul>

        <ul class="navright">
            <li><a href="<?php $plxShow->urlRewrite('core/admin/') ?>">Admin</a></li>           
            <li class="search">
            	<form method="post" id="searchform" action="<?php $plxShow->urlRewrite('static4/rechercher') ?>">
                <input type="hidden" name="search" value="search"  />
	            <input type="text" class="searchinput auto-clear" name="searchfield" title="Rechercher..."/>
                <input type="submit" id="searchsubmit" value="" class="searchsubmit" />
                </form>
            </li>
		</ul>
   	</div>
       
</div>