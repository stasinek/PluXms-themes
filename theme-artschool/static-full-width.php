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
 						<?php eval($plxShow->callHook("vignetteArtList", array('
						<li><img src="img.php?src=#art_vignette&w=920&h=429&crop-to-fit" alt="#art_title"/>
						</li>', 3, "", "...", "alpha"))); ?>	
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
			<div class="col-full">
			<div class="wrap-col">
					<div class="block-1-shadow" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">
						<h2 class="clr-6 p4"><?php $plxShow->staticTitle(); ?></h2>
						<div class="row">
							<?php $plxShow->staticContent(); ?>
						</div>
				</div>
			</div>

  

<?php include(dirname(__FILE__).'/footer.php'); ?>
