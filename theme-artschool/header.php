<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php $plxShow->template(); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php $plxShow->template(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php $plxShow->template(); ?>/css/slider.css">
    <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/responsive.css" type="text/css" media="all"> 
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/contactform.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
    <script src="<?php $plxShow->template(); ?>/js/jquery-1.7.min.js"></script>
    <script src="<?php $plxShow->template(); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php $plxShow->template(); ?>/js/uCarousel.js"></script>
    <script src="<?php $plxShow->template(); ?>/js/tms-0.4.1.js"></script>
    <script type="text/javascript" src="<?php $plxShow->template(); ?>/js/css3-mediaqueries.js"></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
