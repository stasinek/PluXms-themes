<?php if(!defined('PLX_ROOT')) exit; ?>
<?php require_once(dirname(__FILE__).'/switcher.php'); # couleur style intermédiaire ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title><?php $plxShow->pageTitle(); ?></title>
    <?php $plxShow->meta('description') ?>
    <?php $plxShow->meta('keywords') ?>
    <?php $plxShow->meta('author') ?>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	<?php $plxShow->templateCss() ?>
    <script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.js"></script>
</head>
<body class="home col-2-right fixed">

  <!-- page -->
  <div id="page">

    <!-- header -->
    <div class="page-content header-wrapper">
      <div id="header" class="bubbleTrigger">
        <div id="site-title" class="clearfix">
          <h1 id="logo"><?php $plxShow->mainTitle('link'); ?></h1>
          <p class="headline"><?php $plxShow->subTitle(); ?></p>
        </div>

        <div class="shadow-left">
          <div class="shadow-right clearfix">
          
            <p class="nav-extra">
                   <a href="http://twitter.com/montwet" class="nav-extra twitter" title="Follow me on Twitter"><span>Suivez moi sur Twitter</span></a>
                   <a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" class="nav-extra rss" title="RSS Feeds"><span>Flux RSS</span></a>
            </p>
            
            <!-- main navi -->
            <ul id="navigation" class="clearfix">
            <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" class="fadeThis" title="#static_name"><span class="title">#static_name</a></span></li>'); ?>
		    <?php $plxShow->pageBlog('<li class="#page_status" id="#page_id"><a class="fadeThis" href="#page_url" title="#page_name"><span class="title">#page_name</span></a></li>'); ?>
              <li>
                <a class="fadeThis" href="#"><span class="title">Nos Flux</span></a>
                <ul>
		           <li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">Commentaires</a></li>
		           <li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>">Articles</a></li>
                </ul>
              </li>
              <li>
                <a class="fadeThis" href="#"><span class="title">Thème</span></a>
                <ul>
                  <li><a href="<?php echo $actuel; ?>?style=green" class="fadeThis">Vert (défaut)</a></li>
                  <li><a href="<?php echo $actuel; ?>?style=blue" class="fadeThis">Bleu</a></li>
                  <li><a href="<?php echo $actuel; ?>?style=red" class="fadeThis">Rouge</a></li>
                  <li><a href="<?php echo $actuel; ?>?style=grey" class="fadeThis">Gris</a></li>
                </ul>
              </li>
            </ul>
            <!-- /main navi -->

          </div>
        </div>
      </div>
    </div>
    <!-- /header -->
    <!-- left+right bottom shadow -->
    <div class="shadow-left page-content main-wrapper">
      <div class="shadow-right">

        <!-- main content: primary + sidebar(s) -->
        <div id="main">
          <div id="main-inside" class="clearfix">