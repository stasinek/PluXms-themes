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
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="art"></div>
					<h2 class="top-1 p2">Deuxième catégorie</h2>
					<?php $plxShow->lastArtList('<p class="text-1 p3">#art_date - #art_title</p><p>#art_chapo</p>',2,'2'); ?>
				</div>
			</div>
			<div class="col-2-3"><div class="wrap-col">
				<div class="pad-1">
					<h2 class="p2">Bienvenue sur le gabarit "Art School"</h2>
					<p class="text-1">Art School est un gabarit web gratuit. Il est optimisé pour un écran de 1280X1024 pixels. Il est construit selon les standards du Html5 et du Css3.</p>
				</div> 
				<div class="block-1">
					<div class="block-1-shadow">
	                	<h2 class="clr-6 p6">Quelques mots à propos nous</h2>
						<p class="clr-6"><strong>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor </strong></p>
						<p class="clr-6">Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.</p>
                      <div class="row">
                    	<div class="col-1-3"><div class="wrap-col"><img src="<?php $plxShow->template(); ?>/images/page2-img1.jpg" alt="" class="img-border img-indent"></div></div>
                        <div class="col-2-3">
						<div class="wrap-col">
                        	<p><strong>Lorem ipsum dolor sit amet, consetetur</strong></p>
                            <p>sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div></div>
                    </div>
					<br>
					<h2 class="clr-6 p4">De notre galerie</h2>
					<div class="row">
						<?php eval($plxShow->callHook("vignetteArtList", array('
							<div class="col-1-2">
								<a href="#art_url" class="img-border">
									<img src="img.php?src=#art_vignette&w=250&h=178&crop-to-fit" alt="#art_title"></a>
								<p class="text-2" style="padding-left: 10px;">#art_title</p>
							</div>', 2, "", "...", "random"))); ?>	
					</div>
					</div>
				</div>

  

<?php include(dirname(__FILE__).'/footer.php'); ?>
