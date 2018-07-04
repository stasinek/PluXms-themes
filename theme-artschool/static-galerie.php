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
          <div class="col-1-3"><div class="wrap-col">
            <h2 class="top-6 p2">Our Archive</h2>
			<ul class="list-1">
            	<li><a href="#">April, 2012</a></li>
                <li><a href="#">March, 2012</a></li>
                <li><a href="#">February, 2012</a></li>
                <li><a href="#">January, 2012</a></li>
                <li><a href="#">December, 2011</a></li>
                <li><a href="#">November, 2011</a></li>
                <li><a href="#">October, 2011</a></li>
                <li><a href="#">September, 2011</a></li>
                <li><a href="#">August, 2011</a></li>
                <li><a href="#">July, 2011</a></li>
                <li><a href="#">June, 2011</a></li>
                <li><a href="#">May, 2011</a></li>
            </ul>
          </div>
		</div>
          <div class="col-2-3">
		  <div class="wrap-col">
            <div class="block-1 top-5">
            	<div class="block-1-shadow">
                	<h2 class="clr-6 p4">Our Gallery</h2>
                    <div class="pag">
                      <div class="img-pags">
                        <div class="col-1-2"><div class="wrap-col">
                        	<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-1.jpg" alt="" class="img-border">
	                    		<strong class="text-2">Jennifer, 10 years</strong></span></a>
	                    	</div>
	                    	<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-2.jpg" alt="" class="img-border">
                    		<strong class="text-2">Sebastian, 14 years</strong></span></a>
	                    	</div>
	                    	<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-5.jpg" alt="" class="img-border">
                    		<strong class="text-2">Martin, 13 years</strong></span></a>
	                    	</div>
	                    	<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-6.jpg" alt="" class="img-border">
                    		<strong class="text-2">Fiona, 8 years</strong></span></a>
	                    	</div>
                        </div></div>
                        <div class="col-1-2"><div class="wrap-col">
                        	<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-3.jpg" alt="" class="img-border">
                    		<strong class="text-2">Peter, 9 years</strong></span></a>
                    		</div>
                    		<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-4.jpg" alt="" class="img-border">
                    		<strong class="text-2">Samuel, 15 years</strong></span></a>
                    		</div>
                    		<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-7.jpg" alt="" class="img-border">
                    		<strong class="text-2">Monica, 7 years</strong></span></a>
	                    	</div>
	                    	<div class="row" style="margin-bottom: 20px;">
	                        	<a href="#"><span><img src="images/gallery-8.jpg" alt="" class="img-border">
                    		<strong class="text-2">Fiona, 8 years</strong></span></a>
	                    	</div>
                        </div></div>  
                      </div>								
                  </div>
                    <div class="clear"></div>
                    <div class="pad-2">
                    	<a href="#" class="link-2">Full Gallery</a>
                    </div>
                </div>
            </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
