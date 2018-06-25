<?php include(dirname(__FILE__).'/header.php'); ?>
<body>
  <div class="main">
	<!--==============================header=================================-->
    <header class="zerogrid">
        <h1><a href="index.html"><img src="<?php $plxShow->template(); ?>/images/logo.png" alt=""></a></h1>
        <nav>  
            <div id="slide">		
                <div class="slider">
                    <ul class="items">
                        <li><img src="<?php $plxShow->template(); ?>/images/slider-1.jpg" alt="" /></li>
                        <li><img src="<?php $plxShow->template(); ?>/images/slider-2.jpg" alt="" /></li>
                        <li><img src="<?php $plxShow->template(); ?>/images/slider-3.jpg" alt="" /></li>
                    </ul>
                </div>	
                <a href="#" class="prev"></a><a href="#" class="next"></a>
            </div>
            <ul class="menu">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
            </ul>
         </nav>
    </header>   
 
 <!--==============================content================================-->
<section id="content">
	<div class="zerogrid">	
	
		<?php include(dirname(__FILE__).'/sidebar.php'); ?>
	
		<div class="col-2-3">
			<div class="wrap-col">
				<div class="block-1">
					<div class="block-1-shadow" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">
						<h2 class="clr-6 p4"><?php $plxShow->staticTitle(); ?></h2>
						<div class="row">
							<ul class="repertory menu breadcrumb">
								<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
								<li><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?></li>	
							</ul>
			
							<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

									<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">

										<header>
											<h1>
												<?php $plxShow->artTitle('link'); ?>
											</h1>
											<small>
												<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
												<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
												<?php $plxShow->artNbCom(); ?>
											</small>
										</header>

										<section>
											<?php $plxShow->artChapo(); ?>
										</section>

										<footer>
											<small>
												<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
												<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
											</small>
										</footer>

									</article>

									<?php endwhile; ?>

									<nav class="pagination text-center">
										<?php $plxShow->pagination(); ?>
									</nav>

									<span>
										<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
									</span>

						</div>
					</div>
				</div>
			</div>

  

<?php include(dirname(__FILE__).'/footer.php'); ?>
