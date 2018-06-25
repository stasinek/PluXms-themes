<?php if(!defined('PLX_ROOT')) exit; ?>
</div></div>
<?php include(dirname(__FILE__).'/sidebar.php'); ?>
<!-- Container -->


</div></div>
<!-- End BG -->

<div class="footer">
<p class="copy">Copyright &copy; 2007 - &copy; <?php $plxShow->mainTitle('link'); ?></p> 
<p class="theme">Compositio Theme is created by: <a href="http://designdisease.com/" title="Professional Blog Design">Design Disease</a> brought to you by <a href="http://premiumthemes.com/">PremiumThemes.com</a></p>
<p><span><a class="admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></span></p>
</div>


<?php eval($plxShow->callHook('generalCaroufredselJs')); ?>
	
	<?php if (in_array($plxShow->mode(), array('home','categorie'))) :?>
	
	<script type="text/javascript">
	
		<?php eval($plxShow->callHook('caroufredselFooter'));?>
		
	</script>
	
	<?php
	endif;
	if ($plxShow->mode() == 'article'):?>
	<?php if ($plxShow->plxMotor->plxRecord_arts->result[0]['cfsel'] == 'on') : ?>
		
	<script type="text/javascript">
	
		<?php eval($plxShow->callHook('caroufredselJs',array(
			'artId' 		=> $plxShow->plxMotor->plxRecord_arts->result[0]['numero'],
			'cfauthor'		=> $plxShow->plxMotor->plxRecord_arts->result[0]['cfauthor'],
			'width' 		=> $plxShow->plxMotor->plxRecord_arts->result[0]['width'],
			'height' 		=> $plxShow->plxMotor->plxRecord_arts->result[0]['height'],
			'direction'		=> $plxShow->plxMotor->plxRecord_arts->result[0]['direction'],
			'infinite'		=> $plxShow->plxMotor->plxRecord_arts->result[0]['infinite'],
			'auto'			=> $plxShow->plxMotor->plxRecord_arts->result[0]['auto'],
			'cfprevnext'	=> $plxShow->plxMotor->plxRecord_arts->result[0]['cfprevnext'],
			)
		));?>
			
	</script>
	
	<?php
		endif;
	endif;
	?>

<script type="text/javascript" src="<?php $plxShow->template(); ?>/javascript/tabs.js"> </script>

</body>
</html>
