<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/simple-line-icons.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css">
	<!-- Modernizr JS -->
	<script src="<?php $plxShow->template(); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php $plxShow->template(); ?>/js/respond.min.js"></script>
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	</head>
	<body>
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="navbar-header"> 
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href=".">Clean</a>
						</div>
						<div id="fh5co-navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
								<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
