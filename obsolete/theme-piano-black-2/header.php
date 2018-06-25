<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/comment-style.css" type="text/css" media="screen" />
	<?php $plxShow->templateCss() ?>
<!--[if lt IE 7]>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/iepngfix.js"></script>
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/ie6.css" type="text/css" media="screen" />
<![endif]--> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/scroll.js"></script>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jscript.js"></script>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/comment.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
 $('#return_top').click(function()
 {
   $('html, body').animate(
   {
     scrollTop: 0
   }, 1500);
 });
});
</script>
</head>
<body>
<div id="wrapper">
 <div id="contents">

 <div class="header-menu-wrapper clearfix">
 <div id="pngfix-right"></div>
  <ul class="menu">
		<?php $plxShow->staticList('ACCEUIL','<li class="#static_status_page_item page-item" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
		<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?> 
   <li class="page_item"><a href="#" title="Suivez nos Flux">Nos Flux</a>
<ul class='children'>
	<li class="page_item"><a href="<?php $plxShow->urlRewrite('feed.php?atom/commentaires') ?>" title="Fil Atom des commentaires">Commentaires</a></li>
	<li class="page_item"><a href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" title="Fil Atom des articles">Articles</a></li>
</ul>
</li>
             
  </ul>
  <div id="pngfix-left"></div>
  </div>

  <div id="header">
   <div id="logo">
    <?php $plxShow->mainTitle('link'); ?>
    <h1><?php $plxShow->subTitle(); ?></h1>
   </div>

   <div id="header_meta">

        <div id="search-area">
	  <form method="post" id="searchform" action="<?php echo PLX_ROOT ?>static5/recherche">
              <div><input type="hidden" name="search" value="search"  />
                 <input id="search-input" type="text" value="Rechercher..." onblur="if(this.value=='') this.value='Rechercher...';" onfocus="if(this.value=='Rechercher...') this.value='';" name="searchfield" /></div>
              <div><input type="image" src="<?php $plxShow->template(); ?>/img/search-button.gif" alt="Rechercher sur le site." title="Rechercher sur le site." id="search-button" /></div>
           </form>
         </div>
    
            <a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" id="rss-feed" title="Entries RSS" >RSS</a>
            <a href="http://twitter.com/" id="twitter" title="TWITTER" >Twitter</a>
    
   </div><!-- #header_meta end -->

  </div><!-- #header end -->