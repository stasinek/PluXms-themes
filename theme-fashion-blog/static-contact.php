<?php include(dirname(__FILE__).'/header.php'); ?>

      <!-- MAIN SECTION -->                  
      <section id="article-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
               <!-- ARTICLE 1 -->               
               <article class="margin-bottom">
                  <!-- text -->                 
                  <div class="post-text">
                     <h1>Contactez-nous</h1>
                     <div class="line">
                        <div class="margin">
                           <div class="s-12 l-6">
                              <h4>Vision Design - graphic zoo</h4>
                              <address>
                                 <p><i class="icon-home icon"></i> Gallayova 19, 841 02 Bratislava</p>
                                 <p><i class="icon-globe_black icon"></i> Slovakia - Europe</p>
                                 <p><i class="icon-mail icon"></i> info@visiondesign.sk</p>
                              </address>
                              <br />
                              <h4>Social</h4>
                              <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
                              <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                              <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
                           </div>
                           <div class="s-12 l-6">
                              <!--h4>Example contact form (do not use)</h4-->
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
									
									<form class="customform" name="BELLonline_email" method="post" action="">
										<?php echo $info_notice; ?><?php echo $info_error; ?>
										<input placeholder="<?php $plxShow->lang('NAME') ?>" name="senders_name" type="text" class="mailform_input" id="senders_name"  value="<?php echo $senders_name; ?>" maxlength="32">
										<input placeholder="<?php $plxShow->lang('EMAIL') ?>" name="senders_email" type="text" class="mailform_input" id="senders_email"  value="<?php echo $senders_email; ?>" maxlength="64">
										<?php //echo $lang_subject; ?>
										<!--br/>
										<input name="mail_subject" type="text" class="mailform_input" id="mail_subject" style="width: <?php //echo $input_width; ?>;" value="<?php //echo $mail_subject; ?>" maxlength="64"-->
										<textarea placeholder="<?php $plxShow->lang('COMMENT') ?>" name="mail_message" cols="36" rows="5"  class="mailform_input"><?php echo $mail_message; ?></textarea>
										<br/>
										<?php echo $lang_confirmation; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $random_code; ?></b>
										<input name="security_code" type="text" id="security_code" size="5"> 
										
										<input name="randomness" type="hidden" id="randomness" value="<?php echo $random_code; ?>" >
										<br/>
										<br/>
										<button type="submit"><?php echo $lang_submit; ?></button>
										<!--input name="submit" type="submit" id="submit" value="<?php// echo $lang_submit; ?>"-->
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
								<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://bellonline.co.uk/downloads/php-mailer-script/" target="_blank" title="BELLonline PHP mailer">BELLonline PHP mailer</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MAP -->	
                  <div id="map-block">  	  
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d682251.1123056135!2d17.063451638281247!3d48.09010461740988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka%2C+Slovensk%C3%A1+republika!5e0!3m2!1ssk!2s!4v1412519122400" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                  </div>
               </article>
               <!-- AD REGION -->
               <div class="line">
                  <div class="advertising horizontal">
                     <img src="img/banner-horizontal.jpg" alt="ad banner">         
                  </div>
               </div>
            </div>
			<?php include(dirname(__FILE__).'/sidebar.php'); ?>
         </div>
      </section>
<?php include(dirname(__FILE__).'/footer.php'); ?>
