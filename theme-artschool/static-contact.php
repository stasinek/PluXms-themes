<?php include(dirname(__FILE__).'/header.php'); ?>
<body>
  <div class="main">
  <!--==============================header=================================-->
    <header class="zerogrid">
        <h1><a href="."><img src="<?php $plxShow->template(); ?>/images/logo.png" alt=""></a></h1>
        <nav>  
            <div id="slide">		
                <div class="slider">
                    <ul class="items">
						<?php eval($plxShow->callHook("vignetteArtList", array('
						<li><img src="img.php?src=#art_vignette&w=920&h=429&crop-to-fit" alt="#art_title"/>
						</li>', 3, "", "...", "sort"))); ?>	
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
            <h2 class="top-6">Contactez-nous</h2>
            <div class="map">
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
            <dl>
                <dt>8901 Marmora Road, <br>Glasgow, D04 89GR.</dt>
                <dd><span>Telephone: </span>+1 800 603 6035</dd>
                <dd><span>E-mail: </span><a href="#" class="link">mail@demolink.org</a></dd>
            </dl> 
          </div></div>
          <div class="col-2-3"><div class="wrap-col">
            <div class="block-1 top-5">
            	<div class="block-1-shadow">
                	<h2 class="clr-6">Formulaire</h2>
                    <div id="contact_form">
						<strong>Pour nous écrire</strong>
						<form name="form1" id="ff" method="post" action="contact.php">
							 <label>
							 Name*:
							 <input type="text" placeholder="Please enter your name" name="name" id="name" required>
							 </label>
						 
							 <label>
							 Email*:
							 <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
							 </label>
								
							 <label>
							 Message*:
							 <textarea name="message" id="message">Please enter your message</textarea>
							 </label>
						 
							 <div class="btns pad-2"><a href="#" class="link-2">Clear</a><a href="#" class="link-2" onClick="document.getElementById('ff').submit()">Send</a></div>
						</form>
					</div>
                </div>
            </div>
  

<?php include(dirname(__FILE__).'/footer.php'); ?>
