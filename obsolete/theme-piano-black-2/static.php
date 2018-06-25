<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
  <div id="middle-contents" class="clearfix">
   <div id="left-col">
    <div class="post" id="single">   
     <h2><?php $plxShow->staticTitle(); ?></h2>
     <div class="post-content">
       <?php $plxShow->staticContent(); ?>
     </div>
    </div>

   </div><!-- #left-col end -->
   <?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
  </div><!-- #middle-contents end -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>