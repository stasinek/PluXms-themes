<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>">
	<head>
		<title><?php $plxShow->pageTitle(); ?></title>
		<meta http-equiv="content-type" content="text/html;charset=<?php $plxShow->charset(); ?>" />
		<?php $plxShow->meta('description') ?>
		<?php $plxShow->meta('keywords') ?>
		<?php $plxShow->meta('author') ?>
	
		<link rel="icon" href="<?php $plxShow->template(); ?>/images/favicon.png" />
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
		<?php $plxShow->templateCss() ?>

		<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	</head>
<body>
	<?php $plxShow->callHook('ThemeStartBody') ?>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<h1><?php $plxShow->mainTitle('link'); ?></h1>
				<span><?php $plxShow->subTitle(); ?></span>
			</div>
			<div class="clr"></div>
		</div>
		<div class="content">
			<ul id="menu">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			</ul>

			
			<div id="pitch">
				<div id='coin-slider'>
					<?php $plxShow->callHook('plxDisplayCoinSlider'); ?>
				</div>
			</div>
			<div class="clr"></div>
