<?php include(dirname(__FILE__).'/header.php'); ?>
<body>
  <div class="main" role="article" id="post-<?php echo $plxShow->artId(); ?>">
	<!--==============================header=================================-->
    <header class="zerogrid">
        <h1><a href="index.html"><img src="<?php $plxShow->template(); ?>/images/logo.png" alt=""></a></h1>
        <nav>  
            <div id="slide">		
				<img src="img.php?src=<?php eval($plxShow->callHook("showVignette", "true")); ?>&w=920&h=429&crop-to-fit">	
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
					<div class="block-1-shadow">

						<h2 class="clr-6 p4"><?php $plxShow->artTitle(); ?></h2>
						<div class="row">
							<p class="clr-6"><strong><?php $plxShow->artChapo(''); ?></strong></p>
						</div>
						<br>
						<div class="row">
							<?php $plxShow->artContent(); ?>
						</div>
				</div>
			</div>

  

<?php include(dirname(__FILE__).'/footer.php'); ?>
