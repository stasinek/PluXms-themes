<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
  <div id="middle-contents" class="clearfix">

   <div id="left-col">
    <div class="post">
     <h2><?php $plxShow->artTitle(''); ?></h2>
     <ul class="post-info">
      <li><?php $plxShow->artDate('#num_day #num_month #num_year(4)'); ?></li>
      <li>R&eacute;dig&eacute; par <?php $plxShow->artAuthor() ?></li>
      <li class="write-comment"><a href="<?php $plxShow->artUrl('absolu'); ?>#comments">&Eacute;crire un Commentaire</a></li>
     </ul>
     <div class="post-content">
       <?php $plxShow->artContent(); ?>
     </div>
    </div>
    <div class="post-meta">
     <ul class="clearfix">
      <li class="post-category">Class&eacute; dans : <?php $plxShow->artCat(); ?></li>
      <li class="post-tag">Mots cl&eacute;s : <?php $plxShow->artTags(); ?></li>    
      <li class="post-comment"><?php $plxShow->artNbCom(); ?></li>
     </ul>
    </div>
		<?php $plxShow->artAuthorInfos('<div class="infos">#art_authorinfos</div>'); ?>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>

<a href="<?php $plxShow->urlRewrite('#wrapper') ?>" id="back-top" class="clear">Haut de Page</a>

   </div><!-- #left-col end -->
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
  </div><!-- #middle-contents end -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>