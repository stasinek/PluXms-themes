<?php if (!defined('PLX_ROOT')) exit; ?>
		<footer>
            <div class="row">
                <div class="twelve columns content group">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                    <hr />
                    <div class="info">
                        <div class="footer-logo"></div>
                        <p>Un dernier paragraphe qui ferme la boucle.  Il est installé dans le footer.php pour être répété à toutes les pages.  
						On peut évidemment le déplacer dans un ou plusieurs gabarits de pages pour contrôler s'il s'affiche ou non.</p>
                    </div>
                </div>
                <ul class="copyright">
                    <li>&copy; 2015 <?php $plxShow->mainTitle('link'); ?> - 
					<?php $plxShow->subTitle(); ?> - 
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
					<?php $plxShow->httpEncoding() ?></li> - 
                    <li>Design par <a target="_blank" href="http://www.styleshout.com/">Styleshout</a>.</li> - 
                    <li><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
                </ul>
				<?php if($plxShow->mode()=='home') {
				   echo '<div id="go-top">
						<a class="smoothscroll" title="Back to Top" href="#hero">Retour au début<i class="fa fa-angle-up"></i></a>
					</div>';
				} ?>
			</div>
        </footer>

        <div id="preloader">
            <div id="loader"></div>
        </div>

        <script src="<?php $plxShow->template(); ?>/js/jquery-1.11.3.min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery.flexslider-min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery.waypoints.min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery.validate.min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery.fittext.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery.placeholder.min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php $plxShow->template(); ?>/js/main.js"></script>

        <script src="<?php $plxShow->template(); ?>/inc/sendEmail.js"></script>  
        <!--script src="<?php //$plxShow->template(); ?>/mail/captcha.js"></script>
		
		
    </body>
</html>