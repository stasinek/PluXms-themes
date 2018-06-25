<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content">
	<div id="page">
		<div class="post">
			<h2 class="post_title"><?php $plxShow->artTitle(); ?></h2>
			<p class="post_info">
				Par <?php $plxShow->artAuthor(); ?>, 
				le <?php $plxShow->artDate(); ?> &agrave; <?php $plxShow->artHour(); ?> 
				|  <?php $plxShow->artCat(); ?>
			</p>
			<?php $plxShow->artContent(); ?>
		</div>
		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
		
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
