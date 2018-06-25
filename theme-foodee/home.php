<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<html lang="<?php $plxShow->defaultLang() ?>">
	<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
  <!-- 
	DESIGNED & DEVELOPED by FREEHTML5.CO
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co
	 -->

	<meta property="og:title" content="<?php $plxShow->pageTitle(); ?>"/>
	<meta property="og:image" content="<?php $plxShow->template(); ?>/img/favicon.png"/>
	<meta property="og:site_name" content="<?php $plxShow->pageTitle(); ?>"/>
	<meta name="twitter:title" content="<?php $plxShow->pageTitle(); ?>" />
	<meta name="twitter:image" content="<?php $plxShow->template(); ?>/img/favicon.png" />

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/icomoon.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/flexslider.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css">

	<script src="<?php $plxShow->template(); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php $plxShow->template(); ?>/js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">
			<div class="flexslider">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate" style="font-size: 4em;"><?php $plxShow->pageTitle(); ?></h1>
							<h2 class="to-animate"><?php $plxShow->subTitle(); ?></h2>
						</div>
					</div>
				</div>
			  	<ul class="slides">
					<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
						<li style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>);" data-stellar-background-ratio="0.5"></li>
					<?php endwhile; ?>
			  	</ul>
			</div>
		</div>
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home"><?php echo $plxShow->getLang('HOME');?></a>
						<a href="#" data-nav-section="apropos">À propos</a>
						<a href="#" data-nav-section="enspecial">Nos spéciaux</a>
					</div>
					<div class="fh5co-logo">
						<a href=".">Foodee</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu">Menu</a>
						<a href="#" data-nav-section="events">Événements</a>
						<a href="#" data-nav-section="reservation">Réservation</a>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-about" data-section="apropos">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(<?php $plxShow->template(); ?>/images/res_img_1.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">À propos</h2>
				<p class="to-animate">
					<span class="firstcharacter">B</span>ienvenue dans le thème Foodee, un gabarit à page unique créé pour le restaurateur qui veut un outil simple et rapide pour afficher ses talents.  Tous les plats et autres sont des articles séparés et faciles à gérer.  Les catégories sont à déterminer et identifier dans le code, une seule fois. Le carrousel tire ses images des articles identifiés pour la page d'accueil.  Ce paramètre a été choisi pour sa simplicité mais peut être changé si désiré, comme tout le reste.
				</p>
				<p class="text-center to-animate"><a href="#contact" class="btn btn-primary btn-outline">Contactez-nous</a></p>
			</div>
		</div>
		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">
					<div class="flexslider">
						<ul class="slides">
							<?php $plxShow->lastArtList('
							<li>
								<blockquote>
									<p>&ldquo;#art_content&rdquo;</p>
									<p class="quote-author">&mdash; #art_title</p>
								</blockquote>
							</li>',99,'7'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-featured" data-section="enspecial">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Nos spéciaux</h2>
						<p class="sub-heading to-animate">En plus de notre table d'hôte, voici nos produits vedettes</p>
					</div>
				</div>
				<div class="row">
					<div class="fh5co-grid">
					
						<?php 
						$position=1;
						while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
							<?php
							if (in_array($position, array(1,7,13,20))){ ?>
								<div class="fh5co-v-half to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>)"></div>
									<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
										<h2><?php $plxShow->artTitle(); ?></h2>
										<span class="pricing"><?php $plxShow->artChapo(''); ?></span>
										<p><?php $plxShow->artContent(false); ?></p>
									</div>
								</div>
							
						<?php } elseif (in_array($position, array(2,8,14,21))) { ?>
							<div class="fh5co-v-half">
								<div class="fh5co-h-row-2 to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>)"></div>
									<div class="fh5co-v-col-2 fh5co-text arrow-left">
										<h2><?php $plxShow->artTitle(); ?></h2>
										<span class="pricing"><?php $plxShow->artChapo(''); ?></span>
										<p><?php $plxShow->artContent(false); ?></p>
									</div>
								</div>
							<?php } elseif (in_array($position, array(3,9,15,22))) { ?>
								<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>)"></div>
									<div class="fh5co-v-col-2 fh5co-text arrow-right">
										<h2><?php $plxShow->artTitle(); ?></h2>
										<span class="pricing"><?php $plxShow->artChapo(''); ?></span>
										<p><?php $plxShow->artContent(false); ?></p>
									</div>
								</div>
							</div>
							<?php } elseif (in_array($position, array(4,10,16,23))) { ?>
							<div class="fh5co-v-half">
								<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>)"></div>
									<div class="fh5co-v-col-2 fh5co-text arrow-right">
										<h2><?php $plxShow->artTitle(); ?></h2>
										<span class="pricing"><?php $plxShow->artChapo(''); ?></span>
										<p><?php $plxShow->artContent(false); ?></p>
									</div>
								</div>
							<?php } elseif (in_array($position, array(5,11,17,24))) { ?>
								<div class="fh5co-h-row-2 to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>)"></div>
									<div class="fh5co-v-col-2 fh5co-text arrow-left">
										<h2><?php $plxShow->artTitle(); ?></h2>
										<span class="pricing"><?php $plxShow->artChapo(''); ?></span>
										<p><?php $plxShow->artContent(false); ?></p>
									</div>
								</div>
							</div>
							<?php } else { ?>
							<div class="fh5co-v-half to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>)"></div>
									<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
										<h2><?php $plxShow->artTitle(); ?></h2>
										<span class="pricing"><?php $plxShow->artChapo(''); ?></span>
										<p><?php $plxShow->artContent(false); ?></p>
									</div>
								</div>
							<?php 
							}
							$position=$position+1;
						endwhile; ?>
					</div>
				</div>
			</div>
		</div>



		<div id="fh5co-type" style="background-image: url(<?php $plxShow->template(); ?>/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-1">Spécialité1</h3>
							<p>Texte supportant cette spécialité, il est codé en dur pour simplifier mais pourrait être inséré par une catégorie.</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-2">Spécialité2</h3>
							<p>Texte supportant cette spécialité, il est codé en dur pour simplifier mais pourrait être inséré par une catégorie.</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-3">Spécialité3</h3>
							<p>Texte supportant cette spécialité, il est codé en dur pour simplifier mais pourrait être inséré par une catégorie.</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-4">Spécialité4</h3>
							<p>Texte supportant cette spécialité, il est codé en dur pour simplifier mais pourrait être inséré par une catégorie.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Menu détaillé</h2>
						<p class="sub-heading to-animate">Nos cuisines sont notre fierté, nos serveurs se feront un plaisir de vous renseigner si vous avez des besoins particuliers.</p>
					</div>
				</div>
				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Entrées</h2>
							<ul>
								<?php $plxShow->lastArtList('
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=89&h=59&crop-to-fit" class="img-responsive" title="#img_title" alt="#img_alt">
										</figure>
										<div>
											<h3>#art_title</h3>
											<p>#art_content</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										#art_chapo
									</div>
								</li>',99,'3'); ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Plats principaux</h2>
							<ul>
								<?php $plxShow->lastArtList('
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=89&h=59&crop-to-fit" class="img-responsive" title="#img_title" alt="#img_alt">
										</figure>
										<div>
											<h3>#art_title</h3>
											<p>#art_content</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										#art_chapo
									</div>
								</li>',99,'3'); ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Desserts</h2>
							<ul>
								<?php $plxShow->lastArtList('
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=89&h=59&crop-to-fit" class="img-responsive" title="#img_title" alt="#img_alt">
										</figure>
										<div>
											<h3>#art_title</h3>
											<p>#art_content</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										#art_chapo
									</div>
								</li>',99,'3'); ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Breuvages</h2>
							<ul>
								<?php $plxShow->lastArtList('
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=89&h=59&crop-to-fit" class="img-responsive" title="#img_title" alt="#img_alt">
										</figure>
										<div>
											<h3>#art_title</h3>
											<p>#art_content</p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										#art_chapo
									</div>
								</li>',99,'3'); ?>
							</ul>
						</div>
					</div>
				<!--div class="row">
					<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
						<p><a href="#" class="btn btn-primary btn-outline">More Food Menu</a></p>
					</div>
				</div-->
			</div>
		</div>

		<div id="fh5co-events" data-section="events" style="background-image: url(<?php $plxShow->template(); ?>/images/slide_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading">Événements à venir</h2>
						<p class="sub-heading">Voici un aperçu des soirées pleines d'activités pendant la saison.</p>
					</div>
				</div>
				<div class="row">
					<?php $plxShow->lastArtList('
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>#art_title</h3>
							<span class="fh5co-event-meta">#art_date</span>
							<p>#art_content</p>
							<p><a href="#contact" class="btn btn-primary btn-outline">Réservez tôt</a></p>
						</div>
					</div>',3,'3'); ?>
				</div>
			</div>
		</div>

		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Réservez votre table</h2>
						<p class="sub-heading to-animate">Pour un tête-à-tête ou un groupe (jusqu'à 12 personnes)</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Notre adresse</h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address ">
								<i class="icon-home"></i>
								5555 Love Paradise 56 New Clity 5655, <br>Excel Tower United Kingdom
							</li>
							<li><i class="icon-phone"></i> (123) 465-6789</li>
							<li><i class="icon-envelope"></i>info@freehtml5.co</li>
							<li><i class="icon-globe"></i> <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></li>
						</ul>
					</div>
					<div class="col-md-6 to-animate-2">
						<?php extract($_POST);

						/* 
						BELLonline PHP MAILER SCRIPT v1.5
						Copyright 2006 Gavin Bell 
						http://www.bellonline.co.uk 
						gavin@bellonline.co.uk
						*/

						// changer le courriel ci-dessous pour votre adresse personnelle qui recevra les messages
						$sendto_email = "changez-moi@example.com";

						// Disable email addresses from the same domain as your email from being sent? 
						// This will often reduce spam but will not allow antone to send from anything@yourdomain. 
						$checkdomain = "yes";
						// Language variables
						$lang_title = "Envoyer un courriel";
						$lang_notice = "N'hésitez pas à remplir le formulaire pour nous contacter par courriel (tous les champs sont obligatoires)";
						$lang_name = "Votre nom";
						$lang_youremail = "Votre de courriel";
						$lang_subject = "Sujet";
						$lang_message = "Message";
						$lang_confirmation = "Recopiez le code de validation";
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
					/*if (empty ($mail_subject)) {
						$error = "1";
						$info_error .= $lang_nosubject . "<br>";  
					}
					*/	
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
							<div class="form-group ">
							<br/>
							<input name="senders_name"  placeholder="<?php $plxShow->lang('NAME') ?>"  type="text" class="form-control" id="senders_name"  value="<?php echo $senders_name; ?>" maxlength="32">
							<br/>
							<input name="senders_email" placeholder="<?php $plxShow->lang('EMAIL') ?>" type="text" class="form-control" id="senders_email"  value="<?php echo $senders_email; ?>" maxlength="64">
							<br/>
							<?php //echo $lang_subject; ?>
							<!--br/>
							<input name="mail_subject" type="text" class="mailform_input" id="mail_subject" style="width: <?php //echo $input_width; ?>;" value="<?php //echo $mail_subject; ?>" maxlength="64"-->
							<textarea name="mail_message" cols="36" rows="5"  class="form-control"><?php echo $mail_message; ?></textarea>
							<br/>
							<?php echo $lang_confirmation; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $random_code; ?></b>
							<input name="security_code" type="text" id="security_code" size="5"> 
							
							<input name="randomness" type="hidden" id="randomness" value="<?php echo $random_code; ?>" >
							<br/>
							<input name="submit" style="background: #fb6e14; color: #fff; border: 2px solid #fb6e14;" type="submit" id="submit" value="<?php echo $lang_submit; ?>">
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
					//	mail($sendto_email, $mail_subject, $mail_message, $headers); 
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
						<?php //echo $lang_subject; ?>
						<?php// echo $mail_subject; ?>
						<br/>
						<br/>
						<?php echo $lang_message.': '; ?>
						<br/>
						<?php echo $mail_message; ?>
						<br/>
					<?php 
					}
	//				print $link;
					?>
					
					<br/>
					<br/>
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://bellonline.co.uk/downloads/php-mailer-script/" target="_blank" title="BELLonline PHP mailer">BELLonline PHP mailer</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; 2016 <?php $plxShow->mainTitle('link'); ?> 
						<br> 
					<?php $plxShow->subTitle(); ?> - 
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
					<?php $plxShow->httpEncoding() ?>
					Design par <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> 
						<br> 
						<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Remonter</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php $plxShow->template(); ?>/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="<?php $plxShow->template(); ?>/js/moment.js"></script>
	<script src="<?php $plxShow->template(); ?>/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="<?php $plxShow->template(); ?>/js/main.js"></script>

	</body>
</html>
