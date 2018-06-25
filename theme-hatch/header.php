<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
		<meta charset="<?php $plxShow->charset('min'); ?>">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
		<title><?php $plxShow->pageTitle(); ?></title>
		<?php $plxShow->meta('description') ?>
		<?php $plxShow->meta('keywords') ?>
		<?php $plxShow->meta('author') ?>
		<link rel="icon" href="<?php $plxShow->template(); ?>/images/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/formsmain.css" type="text/css" />
        <!--link rel='stylesheet' id='hatch_fancybox-stylesheet-css' href='<?php //$plxShow->template(); ?>/js/fancybox/jquery.fancybox-1.3.4.css?ver=1' type='text/css' media='screen' /-->
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery/jquery.js?ver=1.11.2'></script>
        <script type='text/javascript' src='<?php $plxShow->template(); ?>/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>

        <!-- Style settings -->
        <style type="text/css" media="all">
            html {
                font-size: 16px;
            }
            
            body {
                font-family: Arial, serif;
            }
            
            a,
            a:visited,
            #footer a:hover,
            .entry-title a:hover {
                color: #64a2d8;
            }
            
            a:hover,
            a:focus {
                color: #000;
            }
        </style>
    </head>

    <body>
        <div id="container">
            <div class="wrap">
                <div id="header">
                    <div id="branding">
                        <h1 id="site-title">
							<?php $plxShow->mainTitle('link'); ?>
						</h1>
                        <h2 id="site-description"><span><?php $plxShow->subTitle(); ?></span></h2>
                    </div>

                    <div id="menu-primary" class="menu-container">
                        <div class="menu">
                            <ul id="menu-primary-items" class="">
								<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
								<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                                <li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-118">
									<a href="."><?php $plxShow->lang('CATEGORIES'); ?></a>
                                    <ul class="sub-menu">
										<?php $plxShow->catList('','<li id="#cat_id" class="menu-item"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
				</div>
