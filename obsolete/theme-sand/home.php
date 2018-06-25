<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="content">
<section id="article">

    <?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
    <article>
        <h2 class="titlearticle"><?php $plxShow->artTitle('link'); ?></h2>

            <span class="date"><?php $plxShow->artDate('#num_day/#num_month/#num_year(2)'); ?></span>
            <?php $plxShow->artChapo(); ?>
            
     </article>
    <?php endwhile; # Fin de la boucle sur les articles ?>
            <?php # On affiche la pagination ?>
            <div id="historique"><?php $plxShow->pagination(); ?></div>
            
</section><!--Fin du Content-->
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
<hr class="both" />
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>