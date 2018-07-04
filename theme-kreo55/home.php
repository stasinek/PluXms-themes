<?php include(dirname(__FILE__).'/header.php'); ?>

	<section id="hero" style="background: #0F1215 url(<?php $plxShow->lastArtList($plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=2000&h=630&crop-to-fit&f=grayscale&f0=brightness,-77&f1=contrast,-22',1,'','',$sort='random'); ?>) no-repeat center;">
		<div class="row hero-content">
			<div class="twelve columns hero-container">
				<div id="hero-slider" class="flexslider">
					<ul class="slides">
						<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
							<li role="article" id="post-<?php echo $plxShow->artId(); ?>">
								<div class="flex-caption">
									<h1 class=""><?php $plxShow->artTitle('link'); ?></h1>
									<h3 class=""><?php $plxShow->artChapo(''); ?></h3>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="more">
			<a class="smoothscroll" href="#section2">Section 2<i class="fa fa-angle-down"></i></a>
		</div>
	</section>

	<section id="portfolio">
		<div class="row section-head">
			<div class="twelve columns">
				<h1><?php $plxShow->lang('LATEST_ARTICLES'); ?><span>.</span></h1>
				<hr />
				<p>Texte explicatif sur les articles présentés juste en-dessous.</p>
			</div>
		</div>
		<div class="row items">
			<div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">
				<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
					<div class="bgrid folio-item"  role="article" id="post-<?php echo $plxShow->artId(); ?>">
						<div class="item-wrap">
							<a href="#modal-<?php echo $plxShow->artId(); ?>">
								<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=800&h=800&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>">
								<div class="overlay"></div>
								<div class="portfolio-item-meta">
									<h5><?php $plxShow->artTitle(); ?></h5>
									<p><?php $plxShow->artCat(); ?></p>
								</div>
								<div class="link-icon"><i class="fa fa-plus"></i></div>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<div id="modal-<?php echo $plxShow->artId(); ?>" class="popup-modal mfp-hide">
					<div class="media">
						<img src="<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=550&h=300&crop-to-fit" alt="<?php $plxShow->artThumbnail('#img_alt'); ?>" />
					</div>
					<div class="description-box">
						<h4><?php $plxShow->artTitle(); ?></h4>
						<p><?php $plxShow->artChapo(''); ?></p>
						<span class="categories"><?php $plxShow->artCat(); ?></span>
					</div>
					<div class="link-box group">
						<a href="index.php?article<?php echo $plxShow->artId(); ?>">Details</a>
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>

	<section id="section1">
		<div class="row section-head">
			<div class="twelve columns">
				<h1>Section 1<span>.</span></h1>
				<hr />
				<p>Une section qui peut avoir plusieurs usages.  Au départ, on y énumère la catégorie numéro 1, celle qui a le plus de chances d'avoir des articles.</p>
			</div>
		</div>
		<div class="row mobile-no-padding">
			<div class="service-list bgrid-third s-bgrid-half tab-bgrid-whole group">
				<?php $plxShow->lastArtList('
				<div class="bgrid">
					<h3><a href="#art_url">#art_title.</a></h3>
					<div class="service-content">
						<p>#art_content</p>
					</div>
				</div>',6,'1'); ?>
			</div>
		</div>
	</section>

	<section id="section2">
		<div class="row team section-head">
			<div class="twelve columns">
				<h1>Section 2<span>.</span></h1>
				<hr />
			</div>
		</div>
		<div class="row">
			<div id="team-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half mob-bgrid-whole group">
				<?php $plxShow->lastArtList('
				<div class="bgrid member #art_status">
					<div class="member-pic">
						<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=600&h=600&crop-to-fit" alt="#img_alt" />
						<div class="mask"></div>
					</div>
					<div class="member-name">
						<h3><a href="#art_url">#art_title.</a></h3>
						<span>#art_chapo</span>
					</div>
					<p>#art_content</p>
					<ul class="member-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-skype"></i></a></li>
					</ul>
				</div>',99,'1'); ?>				
			</div>
		</div>
		<div id="call-to-action">
			<div class="row section-ads">
				<div class="twelve columns">
					<h2><a href=".">Gros titre à déterminer<span>.</span></a></h2>
					<p>
						Petit texte marketing qui supporte le <a href="."><span>gros titre</span></a>.
					</p>
					<div class="action">
						<a href=".">Abonnez-vous sans tarder!</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="row content flex-container">
			<div id="testimonial-slider" class="flexslider">
				<ul class="slides">
					<?php $plxShow->lastArtList('
					<li>
						<p>#art_content</p>

						<div class="testimonial-author">
							<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=150&h=150&crop-to-fit" alt="Author image">
							<div class="author-info">
								#art_title
								<span class="position">#art_chapo</span>
							</div>
						</div>
					</li>',99,'1'); ?>
				</ul>
			</div>
		</div>
	</section>

	<!-- contact
	================================================== -->
	<section id="contact">

	<div class="row section-head">

		<div class="twelve columns">

			 <h1>Contactez-nous<span>.</span></h1>

			 <hr />	        

		  </div>

	  </div> <!-- end section-head -->

	  <div class="row">
		
		<div id="contact-form" class="six columns tab-whole left">


					<?php				
					extract($_POST);

					/* 
					BELLonline PHP MAILER SCRIPT v1.5
					Copyright 2006 Gavin Bell 
					http://www.bellonline.co.uk 
					gavin@bellonline.co.uk
					*/

					// changer le courriel ci-dessous pour votre adresse personnelle qui recevra les messages
					$sendto_email = "votreadresse@serveur.com";

					// Disable email addresses from the same domain as your email from being sent? 
					// This will often reduce spam but will not allow antone to send from anything@yourdomain. 
					$checkdomain = "yes";
					// Language variables
					$lang_title = "Envoyer un courriel";
					$lang_notice = "N'hésitez pas à remplir le formulaire pour nous contacter par courriel.  Tous les champs sont obligatoires.";
					$lang_name = "Votre nom";
					$lang_youremail = "Votre de courriel";
					$lang_subject = "Sujet";
					$lang_message = "Message";
					$lang_confirmation = "Entrez le code de validation";
					$lang_submit = "Envoyer le courriel";
					// Error messages
					$lang_error = "Votre courriel n'a pas été envoyé, les erreurs suivantes sont à corriger:";
					$lang_noname = "Votre nom n'a pas été inscrit";
					$lang_noemail = "Votre courriel n'a pas été inscrit correctement";
//						$lang_nosubject = "You did not enter a subject";
					$lang_nomessage = "Vous devez inclure un message";
					$lang_nocode = "Vous n'avez pas inscrit le code de validation";
					$lang_wrongcode = "Le code de validation entré est erroné.  SVP prendre note que la casse est prise en compte.";
					$lang_invalidemail = "Le courriel que vous avez inscrit ne semble pas valide, SVP vérifier.";
					// Success
					$lang_sent = "Votre message a été envoyé.  Le message suivant a été posté par courriel:";
					// Width of form inputs. Must include unites, e.g px 
					$input_width = "300px";
					// How do you want the title aligned?
					$title_align = "left"; // Can be left, center or right
					// To format the title text. If you are not confident with css then probably best left as it is
					$title_css = "font-weight: bold; font-size: 120%;";
					// Colour of error message
					$error_colour = "red"; // Must use HTML compatible colour
					// You can choose whether to display Powered by BELLonline PHP mailer script at the bottom of the mail form
					// I understand that some peopme might not want to show our link, but we would appreciate it if you could 
					// Possible options are yes or no
					$showlink = "no";
					// Thanks for using the PHP mailer script, I hope you find it useful!
					
				if ($sendto_email == "changeme@example.com") {
					print "N'oubliez pas de changer l'adresse de courriel dans le fichier config.php.  Attention, pas le config.php de PluXml mais bien celui au sous-répertoire /mail";
					exit;
				} 
					
				if (empty ($senders_name)) 	{
					$error = "1";
					$info_error .= $lang_noname . "<br>"; 
				}
				if (empty ($senders_email))	{
					$error = "1";
					$info_error .= $lang_noemail . "<br>";  
				}
				if (empty ($mail_message)) 	{
					$error = "1";
					$info_error .= $lang_nomessage . "<br>";  
				}
				if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $senders_email))	{
					$error = "1";
					$info_error .= $lang_invalidemail . "<br>"; 
				}
				if (empty ($security_code))  {
					$error = "1";
					$info_error .= $lang_nocode . "<br>";  
				}
				elseif ($security_code != $randomness)	{
					$error = "1";
					$info_error .= $lang_wrongcode . "<br>";  
				}
				if ($showlink != "no")	{
					$link = "<br><span style=\"font-size: 10px;\">Powered by <a href=\"http://bellonline.co.uk/downloads/php-mailer-script/\" title=\"free PHP mailer script\">BELLonline PHP mailer script</a></span>";
				}
				if ($error == "1") {
					$info_notice = "<span style=\"color: " . $error_colour . "; font-weight: bold;\">" . $lang_error . "</span><br>"; 
					
					if (empty ($submit)) {
						$info_error = "";
						$info_notice = $lang_notice;
					}	

					function Random() {
						$chars = "ABCDEFGHJKLMNPQRSTUVWZYZ23456789";
						srand((double)microtime()*1000000);
						$i = 0;
						$pass = '' ;
						while ($i <= 4) {
							$num = rand() % 32;
							$tmp = substr($chars, $num, 1);
							$pass = $pass . $tmp;
							$i++; 
						} 
						return $pass; 
					}

					$random_code = Random();
					$mail_message = stripslashes($mail_message); ?>
					
					<form name="BELLonline_email" method="post" action="">
						<?php echo $info_notice; ?><?php echo $info_error; ?>
						<br/>
						<br/>
						<input name="senders_name" type="text" class="mailform_input" id="senders_name"  placeholder="<?php $plxShow->lang('NAME') ?>"  value="<?php echo $senders_name; ?>" maxlength="32">
						
						<input name="senders_email" type="text" class="mailform_input" id="senders_email"  placeholder="<?php $plxShow->lang('EMAIL') ?>"  value="<?php echo $senders_email; ?>" maxlength="64">
						
						<textarea name="mail_message" cols="36" rows="5" placeholder="<?php $plxShow->lang('COMMENT') ?>"  class="mailform_input"><?php echo $mail_message; ?></textarea>
						<?php echo $lang_confirmation; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $random_code; ?></b>
						<input name="security_code" type="text" id="security_code" size="5"> 
						<input name="randomness" type="hidden" id="randomness" value="<?php echo $random_code; ?>" >
						<input name="submit" type="submit" id="submit" value="<?php echo $lang_submit; ?>">
					</form>
				<?php 	
				}else{
					if ($checkdomain == "yes") 	{
						$sender_domain = substr($senders_email, (strpos($senders_email, '@')) +1);
						$recipient_domain = substr($sendto_email, (strpos($sendto_email, '@')) +1);
						if ($sender_domain == $recipient_domain){
							print "Désolé, il ne sera pas possible d'envoyer votre message de ce domaine ($sender_domain)";
							exit;
						}		
					}
					$info_notice = $lang_sent;
					$mail_message = stripslashes($mail_message);
					$senders_email = preg_replace("/[^a-zA-Z0-9s.@-_]/", "-", $senders_email);
					$senders_name = preg_replace("/[^a-zA-Z0-9s]/", " ", $senders_name);
					$headers = "From: $senders_name <$senders_email> \r\n";
					$headers .= "X-Mailer: BELLonline.co.uk PHP mailer \r\n";
					mail($sendto_email, "Un message de votre site web", $mail_message, $headers); 
					?>
					
					<?php echo $info_notice; ?>
					<br/>
					<br/>
					<?php echo $lang_name.': '; ?>
					<br/>
					<?php echo $senders_name; ?>
					<br/>
					<br/>
					<?php echo $lang_youremail.': '; ?>
					<br/>
					<?php echo $senders_email; ?>
					<br/>
					<br/>
					<?php echo $lang_message.': '; ?>
					<br/>
					<?php echo $mail_message; ?>
					<br/>
				<?php 
				}
				?>

		 </div>

		 <div class="six columns tab-whole right">

			<p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 

			 <h3 class="address">Come Visit</h3>

			 <p>
			1600 Amphitheatre Parkway<br>
			Mountain View, CA<br>
			94043 US
			</p>

			<h3>Contact Numbers:</h3>
			   <p>Phone: (000) 555 1212<br>
				Mobile: (000) 555 0100<br>
					Fax: (000) 555 0101
			   </p>
				
		 </div>     	

	  </div> <!-- end row -->     

	</section>  <!-- end contact -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
