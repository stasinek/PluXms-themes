<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php $plxShow->pageTitle(); ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />

<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles/style.css" />

<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

<?php //<link rel="shortcut icon" href="<?php $plxShow->template(); /favicon.ico" type="image/x-icon" />?>
<link rel="pingback" href="<?php $plxShow->template(); ?>" />
<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/ie.css" media="screen" />
<![endif]-->
<?php $plxShow->templateCss() ?>

<?php eval($plxShow->callHook('addJQuery')); ?>

</head>
<body>
<ul id="skip">
	<li>
		<a href="<?php $plxShow->urlRewrite('#nav') ?>" title="<?php $plxShow->lang('GOTO_MENU') ?>"><?php $plxShow->lang('GOTO_MENU') ?></a>
	</li>
	<li>
		<a href="<?php $plxShow->urlRewrite('#articles') ?>" title="<?php $plxShow->lang('GOTO_CONTENT') ?>"><?php $plxShow->lang('GOTO_CONTENT') ?></a>
	</li>
</ul>

<!-- Start BG -->
<div id="bg"><div id="bg-all">


<div class="menu">
	
	<ul>
		<?php $plxShow->catList($plxShow->getLang('HOME'), array('<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a></li>',15)); 
		$plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status">#static_name</a></li>');
		$plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url">#page_name</a></li>'); ?>
		
	</ul>
</div>
 

<!-- Start Container -->
<div class="container">

<!-- Start Header -->
<div class="logo">

	<div class="img">
		<a href="<?php $plxShow->urlRewrite(); ?>"><img src="<?php $plxShow->template(); ?>/logo.png" alt="<?php $plxShow->mainTitle(); ?> - <?php $plxShow->subTitle(); ?>" /></a>
	</div>
	
	<?php eval($plxShow->callHook('filAriane', '&nbsp;&rarr;&nbsp;')); ?>
	
</div>
<!-- END Header -->

<div class="SL" id="articles">
	
