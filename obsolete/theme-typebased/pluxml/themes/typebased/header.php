<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>">

<head>

	<title><?php $plxShow->pageTitle(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/style.css" media="screen" />
	<!-- Alt styles (Don't forget to change the folder of the logo in header)
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/brown.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/green.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/grey.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/yellow.css" media="screen" />
	-->
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/default.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/custom.css" media="screen" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/ie.css" media="screen" />
	<![endif]-->

	<?php $plxShow->templateCss() ?>

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

</head>

<body id="top">

	<p id="skip">
		<a href="<?php $plxShow->urlRewrite('#menu') ?>" title="<?php $plxShow->lang('GOTO_MENU') ?>"><?php $plxShow->lang('GOTO_MENU') ?></a>
		<a href="<?php $plxShow->urlRewrite('#content') ?>" title="<?php $plxShow->lang('GOTO_CONTENT') ?>"><?php $plxShow->lang('GOTO_CONTENT') ?></a>
	</p>

	<div id="container">

	<div id="header">
			<a href="<?php $plxShow->racine(); ?>" title="<?php $plxShow->subTitle(); ?>">
				<!-- Alt logo
        		<img src="<?php $plxShow->template(); ?>/styles/brown/logo.jpg" alt="<?php $plxShow->mainTitle(''); ?>" />
        		<img src="<?php $plxShow->template(); ?>/styles/green/logo.jpg" alt="<?php $plxShow->mainTitle(''); ?>" />
        		<img src="<?php $plxShow->template(); ?>/styles/grey/logo.jpg" alt="<?php $plxShow->mainTitle(''); ?>" />
        		<img src="<?php $plxShow->template(); ?>/styles/yellow/logo.jpg" alt="<?php $plxShow->mainTitle(''); ?>" />
        		 -->
        		<img src="<?php $plxShow->template(); ?>/styles/default/logo.jpg" alt="<?php $plxShow->mainTitle(''); ?>" />
        	</a>
	</div>
	

	<div id="menu">
		<ul id="navigation" class="nav wrap">
		
			<?php 
			$plxShow->catList($plxShow->getLang('HOME'),array('<li class="#cat_status page_item"><a href="#cat_url" title="#cat_name"><span>#cat_name</span></a></li>'."\n\t\t",15));
			$plxShow->staticList('','<li id="#static_id" class="#static_status page_item"><a href="#static_url" title="#static_name"><span>#static_name</span></a></li>');
			$plxShow->pageBlog('<li class="#page_status page_item" ><a href="#page_url" title="#page_name"><span>#page_name</span></a></li>'); 
			?>
		
		</ul>

	</div>
	<div class="wrap background">
		
		<div id="content" class="left-col wrap">
