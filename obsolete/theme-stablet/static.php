<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>	<div class="abs header_upper chrome_light">
		<!--<span class="float_left button" id="button_navigation">
			Navigation
		</span>
		<a href="#" class="float_left button">
			Back
		</a>
		<a href="#" class="float_right button">
			Sign out
		</a>-->
		<?php $plxShow->staticTitle(); ?>
	</div>
<!--	<div class="abs header_lower chrome_dark">
		<a href="#" class="icon icon_refresh"></a>
		<a href="#" class="icon icon_redo"></a>
		<a href="#" class="icon icon_loopback"></a>
		<a href="#" class="icon icon_squiggle"></a>
		<a href="#" class="icon icon_shuffle"></a>
		<a href="#" class="icon icon_magnifying_glass"></a>
		<a href="#" class="icon icon_map_marker"></a>
		<a href="#" class="icon icon_chat"></a>
		<a href="#" class="icon icon_chat2"></a>
		<a href="#" class="icon icon_medical"></a>
		<a href="#" class="icon icon_clock"></a>
		<a href="#" class="icon icon_eye"></a>
		<a href="#" class="icon icon_target"></a>
		<a href="#" class="icon icon_tag"></a>
		<a href="#" class="icon icon_tags"></a>
	</div>-->
	<div id="main_content" class="abs">
		<div id="main_content_inner">
			<h2 class="title"></h2>
			<div class="post"><?php $plxShow->staticContent(); ?></div>
		</div>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
