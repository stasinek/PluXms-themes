<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
   <head>
		<meta charset="<?php $plxShow->charset('min'); ?>">
		<meta name="viewport" content="width=device-width" />
		<title><?php $plxShow->pageTitle(); ?></title>
		<?php $plxShow->meta('description') ?>
		<?php $plxShow->meta('keywords') ?>
		<?php $plxShow->meta('author') ?>
		<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
		<?php $plxShow->templateCss() ?>
		<?php //$plxShow->pluginsCss() ?>
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/components.css">
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/responsee.css">
		<!-- CUSTOM STYLE -->       
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/template-style.css">
		<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery-ui.min.js"></script>    
		<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/modernizr.js"></script>
		<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/responsee.js"></script>          
		<!--[if lt IE 9]> 
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->     
	</head>
   <body class="size-1140"   style="color: #000;">
      <!-- TOP NAV WITH LOGO -->          
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="index.html">            
					FashionBlog <span><?php $plxShow->mainTitle(); ?></span>
                  </a>
                  <h1><?php $plxShow->subTitle(); ?></h1>
                  <ul class="top-ul right">
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                     <div class="social right">	           
                        <a target="_blank" href="https://www.facebook.com/myresponsee">
                        <i class="icon-facebook_circle icon2x"></i>
                        </a>          
                        <a target="_blank" href="https://twitter.com/MyResponsee">
                        <i class="icon-twitter_circle icon2x"></i>
                        </a>          
                     </div>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
 