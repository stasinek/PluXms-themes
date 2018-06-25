<?php include(dirname(__FILE__).'/header.php'); 
      include(dirname(__FILE__).'/smarty_modifier_truncate.php');

$tmp='';
while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

<!--- Post Starts -->
		
			<div class="post wrap">
			
				<div class="post-meta left-col">
					<?php 
					ob_start();
					$plxShow->artDate('#month');
					$month = ob_get_clean();
					ob_start();
					$plxShow->artDate('#num_day');
					$day = ob_get_clean();
					if ($tmp != $day.$month) : $tmp = $day.$month;
					?>

					<h3 class="wrap"><span class="month"><?php echo utf8_encode(substr(utf8_decode($month),0,3));?><?php $plxShow->artDate('<span class="year">#num_year(4)</span></span><span class="day">#num_day</span>'); ?></h3>
					<h4 class="author"><?php $plxShow->artAuthor();?></h4>
					<h4 class="comments"><?php $plxShow->artNbCom();?></h4>

					<?php else:?>

					<h4 class="author"><?php $plxShow->artAuthor();?></h4>
					<h4 class="comments"><?php $plxShow->artNbCom();?></h4>

					<?php endif;?>
				</div>
				
				<div class="post-content right-col">
					<h2><?php $plxShow->artTitle('link'); ?></h2>
					
					<?php ob_start(); 
                	$plxShow->artContent($chapo=true);
                	$content = ob_get_clean();
                	ob_start();
                	$plxShow->artUrl();
                	$link = ob_get_clean();

                	$masque = '#<img(.+?)src="(.+?)"#i'; preg_match($masque, $content, $resultats);
                	$extension = pathinfo($resultats[2], PATHINFO_EXTENSION); ?>
                	
                	<?php if($extension['extension'] == ('jpg'||'jpeg'||'png'||'gif')) : ?>									
                	<a href="<?php $plxShow->artUrl($type='relatif'); ?>" rel="bookmark" title="Lien vers <?php $plxShow->artTitle(''); ?>">        
                	<img src="<?php $plxShow->template(); ?>/timthumb.php?src=<?php echo $resultats[2]; ?>&amp;w=100&amp;h=100&amp;zc=1&amp;q=90" alt="<?php $plxShow->artTitle(''); ?>" width="100px" height="100px" class="main-image thumb alignleft border" /></a>
                	<?php endif; ?>
                	
                	<?php $text = preg_replace('/<img(.*?)>/', '', $content, 1);
                	echo smarty_modifier_truncate($text, 200, $etc = ' Lire la suite',false,false,$link); ?>

                	<div class="fix"></div>
					<p class="art-infos"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></p>
				</div>
				
			</div>
			
<!--- Post Ends -->

<?php endwhile; ?>


<div class="more_posts">
	<h2><?php $plxShow->pagination(); ?></h2>
</div>


<!--- End Content -->
</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>

<?php include(dirname(__FILE__).'/footer.php'); ?>