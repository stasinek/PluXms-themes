<?php if(!defined('PLX_ROOT')) exit; 
include(dirname(__FILE__).'/functions.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta name="generator" content="Pluxml <?php $plxShow->version(); ?>" />
	<meta name="description" content="<?php $plxShow->subTitle(); ?>" />
	<meta name="robots" content="follow,index" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php $plxShow->template(); ?>/scripts/basic.js" type="text/javascript"></script>
</head>

<body>

<div id="page_wrap">
	<div id="header">
		<div class="blog_title">
			<h1><?php $plxShow->mainTitle('link'); ?></a></h1>
			<p class="description"><?php $plxShow->subTitle(); ?></p>
		</div>
		
		<div class="clear"></div>
	</div><!-- end header -->
	
	<div id="main_navi">
		<ul class="left">
			<?php $plxShow->staticList('Accueil'); ?>
    	</ul>
		
		<ul class="right">
			<!--<li class="twitter"><a href="http://twitter.com/your_user_name" title="Me suivre sur Twitter">twitter</a></li>-->
			<li class="feed"><a href="./feed.php?rss" title="Fil des articles"> fil rss</a></li>
		</ul>
	</div><!-- end main_navi -->
	<div class="clear"></div>