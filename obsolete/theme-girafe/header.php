<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom articles" href="./feed.php?atom" />
	<link rel="alternate" type="application/rss+xml" title="Rss articles" href="./feed.php?rss" />
	<link rel="alternate" type="application/atom+xml" title="Atom commentaires" href="./feed.php?atom/commentaires" />
	<link rel="alternate" type="application/rss+xml" title="Rss commentaires" href="./feed.php?rss/commentaires" />
</head>
<body><table class="table" width="1052" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="101" background="<?php $plxShow->template(); ?>/img/left.png"></td>
    <td width="850"><div id="top"><div id="menu">
		<ul><?php $plxShow->staticList('Accueil'); ?></ul>
		<div class="clearer"></div>
	</div>
  <div id="header">

	    <table width="100%" height="363" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="3" rowspan="2">		</td>
            <td width="200" align="right" valign="top"><h1><?php $plxShow->mainTitle('link'); ?></h1></td>
          </tr>
          <tr>
            <td valign="bottom"><?php include('sidebar.php'); # On insere le footer ?></td>
          </tr>
        </table>
  </div>
</div>