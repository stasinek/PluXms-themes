<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content">

<section id="article">

    <article>
		<h2 class="titlearticle"><?php $plxShow->artTitle('link'); ?></h2>
		<?php $plxShow->artContent(); ?>
    </article>
    <?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>
</section><!--Fin du Content-->
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<hr class="both" />
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
