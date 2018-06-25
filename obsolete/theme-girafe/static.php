<?php include('header.php'); # On insere le header ?>

<div id="page"><p align="center" id= "sub" class="sub"><?php $plxShow->subTitle(); ?></p>
	<div id="content">
		<h2 class="title"><?php $plxShow->staticTitle(); ?></h2>
		<?php $plxShow->staticContent(); ?>
	</div>

<div class="clearer"></div>
</div>
<?php include('footer.php'); # On insere le footer ?>
