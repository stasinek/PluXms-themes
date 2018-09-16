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
 					<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<li role="article" id="post-<?php echo $plxShow->artId(); ?>">
							<img src="img.php?src=<?php eval($plxShow->callHook("showVignette", "true")); ?>&w=920&h=429&crop-to-fit" alt="#art_title"/>
						</li>
						<?php endwhile; ?>
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
					<div class="block-1-shadow" >
						<h2 class="clr-6 p6"><?php $plxShow->catName(); ?></h2>
								<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
								   <div class="row">
										<div class="col-1-3">
											<div class="wrap-col">
												<img src="<?php eval($plxShow->callHook("showVignette", "true")); ?>" alt="" class="img-border img-indent">
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<p><?php $plxShow->artTitle('link'); ?></h3>
												<p><?php echo $plxShow->artChapo(); ?></p>
											</div>
										</div>
									</div>
								<?php endwhile; ?>

							</div>
						</div>
					</div>
				</div>
			</div>

  

<?php include(dirname(__FILE__).'/footer.php'); ?>
