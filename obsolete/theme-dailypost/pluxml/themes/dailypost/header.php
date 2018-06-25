<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta charset="<?php $plxShow->charset(); ?>" />
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

	<link rel="stylesheet" type="text/css" media="all" href="<?php $plxShow->template(); ?>/style.css" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<meta name="generator" content="Pluxml <?php echo $plxMotor->aConf['version'] ?>" />
	<style type="text/css">
	body.custom-background { background-color: #ffffff; background-image: url(<?php $plxShow->template(); ?>/images/primary-bg.png); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
	</style>
		
</head>
	
<body class="<?php echo $plxShow->plxMotor->mode; ?> blog custom-background">
	<div id="page">
		<div id="primary">
			<div id="contentcolumn">
                <hgroup id="mobile-version">
                    <h1 class="site-title"><?php $plxShow->mainTitle('link'); ?></h1>
                    <h2 class="site-description"><?php $plxShow->subTitle(); ?></h2>
                </hgroup>

                <div id="header-image">  
					<?php ob_start();
					eval($plxShow->callHook('slideHTML'));
					$slider = ob_get_clean();
					if (empty($slider)) : ?>

					<a href="<?php $plxMotor->urlRewrite();?>"><img src="<?php $plxShow->template(); ?>/images/cropped-924.jpg" alt="Header"/></a>
					<?php else : 
					echo $slider;
					endif;
					?>

				</div>

				<div id="content">