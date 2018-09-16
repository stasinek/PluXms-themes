<?php include(dirname(__FILE__).'/header.php'); ?>

<body id="top" class="fl-builder has-post-thumbnail is-singular not-front-page single single-format-standard single-post">
<style id='receptar-stylesheet-inline-css' type='text/css'>
	.entry-media { background-image: url('<?php $plxShow->lastArtList('#img_url',1,'','',$sort='random'); ?>'); }
	body{background-color:#f5f7f9}.site-header {background-color:rgba(0,0,0,0.2);color:#ffffff;}.not-scrolled.is-posts-list .site-header,.not-scrolled.paged .site-header {background-color:#2a2c2e;color:#ffffff;}.secondary {background-color:#1a1c1e;color:#9a9c9e;border-color:#3a3c3e;}.secondary-controls,.secondary h1,.secondary h2,.secondary h3,.secondary h4,.secondary h5,.secondary h6,.current-menu-item > a{color:#ffffff}.hamburger-item{background-color:#ffffff}.main-navigation a:hover,.current-menu-item > a{background-color:#3a3c3e}body,code{color:#6a6c6e}h1, h2, h3, h4, h5, h6,.h1, .h2, .h3, .h4, .h5, .h6{color:#1a1c1e}.site,.home .content-area,.posts .hentry{background-color:#ffffff}.site-content{border-color:#eaecee}hr,code,pre,.entry-meta-bottom{background-color:#eaecee}.site-content .pagination,.site-content .comments-area-wrapper {background-color:#2a2c2e;color:#9a9c9e;border-color:#3a3c3e;}.posts,.posts .entry-inner:after{background-color:#2a2c2e}.comments-area-wrapper h1,.comments-area-wrapper h2,.comments-area-wrapper h3,.comments-area-wrapper h4,.comments-area-wrapper h5,.comments-area-wrapper h6{color:#ffffff}.site-footer {background-color:#f5f7f9;color:#9a9c9e;}a,.accent-color{color:#e53739}mark,ins,.highlight,pre:before,.pagination .current,.button,button,form button,.fl-node-content button,input[type="button"],input[type="reset"],input[type="submit"],.post-navigation .post-title,.bypostauthor > .comment-body .comment-author:before,.comment-navigation a,.widget_calendar tbody a,.widget .tagcloud a:hover,body #infinite-handle span,.site-content div.sharedaddy .sd-content ul li a.sd-button:not(.no-text) {background-color:#e53739;color:#ffffff;}.site-content div.sharedaddy .sd-content ul li a.sd-button:not(.no-text){color:#ffffff !important}.infinite-loader .spinner > div > div{background:#e53739 !important}input:focus,select:focus,textarea:focus,.post-navigation .post-title,.widget .tagcloud a:hover{border-color:#e53739}mark,ins,.highlight {-webkit-box-shadow:.38em 0 0 #e53739, -.38em 0 0 #e53739;  box-shadow:.38em 0 0 #e53739, -.38em 0 0 #e53739;}@media only screen and (max-width:960px) {.site-header{background-color:#2a2c2e}}
</style>

<div id="page" class="hfeed site">
        <div class="site-inner">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <h1 class="site-title logo type-text">
						<a href="." title="<?php $plxShow->mainTitle(); ?> | <?php $plxShow->subTitle(); ?>">
							<span class="text-logo">
								<?php $plxShow->mainTitle(); ?>
							</span>
						</a>
					</h1>
                    <h2 class="site-description">
						<?php $plxShow->subTitle(); ?>
					</h2>
				</div>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				
                <div id="site-header-widgets" class="widget-area site-header-widgets">
					<?php	
					$placeholder = '';
					# récupération d'une instance de plxMotor
					$plxMotor = plxMotor::getInstance();
					$plxPlugin = $plxMotor->plxPlugins->getInstance('plxMySearch');
					$searchword = '';
					if(!empty($_POST['searchfield'])) {
						$searchword = plxUtils::strCheck(plxUtils::unSlash($_POST['searchfield']));
					}
					if($plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang)!='') {
						$placeholder=' placeholder="'.$plxPlugin->getParam('placeholder_'.$plxPlugin->default_lang).'"';
					}
					?>
					<div class="searchform">
						<form class="form-search" action="<?php echo $plxMotor->urlRewrite('?'.$plxPlugin->getParam('url')) ?>" method="post">
								<label for="search-field" class="screen-reader-text">Recherche</label>
								<input type="search"  placeholder="Mot-clé" class="search-field" name="searchfield" value="<?php echo $searchword ?>" />
						</form>
                </div>

            </header>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<article  class=" post type-post  format-standard has-post-thumbnail hentry  static" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">
			<div class="entry-media">
				<figure class="post-thumbnail" itemprop="image">
				<img width="960" height="640" src="<?php $plxShow->lastArtList('#img_url',1,'',$sort='random'); ?>" class="attachment-receptar-featured size-receptar-featured wp-post-image" alt="meals-668482_1920" srcset="<?php $plxShow->lastArtList('#img_url',1,'',$sort='random'); ?>" />
				</figure>
			</div>
			<div class="entry-inner">
				<header class="entry-header">
					<h1 class="entry-title" itemprop="name"><?php $plxShow->staticTitle(); ?></h1>
					<div class="entry-category">
						<span class="cat-links entry-meta-element"></span>
					 </div>
				 </header>
				 
				<div class="entry-content" >
					<div class="fl-rich-text">
					<?php				
					extract($_POST);

					/* 
					BELLonline PHP MAILER SCRIPT v1.5
					Copyright 2006 Gavin Bell 
					http://www.bellonline.co.uk 
					gavin@bellonline.co.uk
					*/

					// changer le courriel ci-dessous pour votre adresse personnelle qui recevra les messages
					$sendto_email = "courriel@serveur.com";

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
						<br/>
						<br/>
						<?php $plxShow->lang('NAME') ?>
						<br/>
						<input name="senders_name" type="text" class="mailform_input" id="senders_name"  value="<?php echo $senders_name; ?>" maxlength="32">
						<br/>
						<?php $plxShow->lang('EMAIL') ?>
						<br/>
						<input name="senders_email" type="text" class="mailform_input" id="senders_email"  value="<?php echo $senders_email; ?>" maxlength="64">
						<br/>
						<?php //echo $lang_subject; ?>
						<!--br/>
						<input name="mail_subject" type="text" class="mailform_input" id="mail_subject" style="width: <?php //echo $input_width; ?>;" value="<?php //echo $mail_subject; ?>" maxlength="64"-->
						<br/>
						<?php $plxShow->lang('COMMENT') ?>
						<br/>
						<textarea name="mail_message" cols="36" rows="5"  class="mailform_input"><?php echo $mail_message; ?></textarea>
						<br/>
						<br/>
						<?php echo $lang_confirmation; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $random_code; ?></b>
						<input name="security_code" type="text" id="security_code" size="5"> 
						
						<input name="randomness" type="hidden" id="randomness" value="<?php echo $random_code; ?>" >
						<br/>
						<br/>
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
		</article>
	</div><!-- /#primary -->
</div><!-- /#content -->


<?php include(dirname(__FILE__).'/footer.php'); ?>
