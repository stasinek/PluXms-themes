<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="fh5co-main">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php $plxShow->mainTitle('link'); ?></h1>
						<p class=""><?php $plxShow->subTitle(); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-portfolio">
			<?php $i=1;
			while($plxShow->plxMotor->plxRecord_arts->loop()):
				if ($i % 2 == 0) {  ?>

				<div class="fh5co-portfolio-item ">
					<div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php $plxShow->template(); ?>/img.php?src=<?php $plxShow->artThumbnail('#img_url'); ?>&w=721&h=525&crop-to-fit);"></div>
					<div class="fh5co-portfolio-description">
						<h2><?php $plxShow->artTitle('link'); ?></h2>
						<p><?php $plxShow->artChapo(''); ?></p>
						<p><a href="<?php $plxShow->artUrl(); ?>" class="btn btn-primary">Lire</a></p>
					</div>
				</div>
			<?php $i=$i+1; 
				} else { 	?>

				<div class="fh5co-portfolio-item fh5co-img-right">
					<div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php $plxShow->artThumbnail('#img_url'); ?>);"></div>
					<div class="fh5co-portfolio-description">
						<h2><?php $plxShow->artTitle('link'); ?></h2>
						<p><?php $plxShow->artChapo(''); ?></p>
						<p><a href="<?php $plxShow->artUrl(); ?>" class="btn btn-primary">Lire</a></p>
					</div>
				</div>
				<?php $i=$i+1;
				}	?>
		<?php endwhile; ?>
	</div>

		<div id="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<h2 class="section-lead text-center">Nos derniers articles</h2>
							<?php $plxShow->lastArtList('
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<figure>
								<img src="'.$plxMotor->urlRewrite($plxMotor->aConf['racine_themes'].$plxMotor->style).'/img.php?src=#img_url&w=200&h=200&crop-to-fit" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive">
								</figure>
								<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
								<p>#art_chapo</p>
								<ul class="fh5co-social">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul> 	
							</div>',4); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<h2 class="section-lead text-center">Dans nos catégories</h2>
							
							<?php $plxShow->lastArtList('
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-present"></i></div>
								<div class="fh5co-desc">
									<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
									<p>#art_chapo</p>
								</div>	
							</div>',1); ?>
							
							<?php $plxShow->lastArtList('
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-eye"></i></div>
								<div class="fh5co-desc">
									<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
									<p>#art_chapo</p>
								</div>	
							</div>',1); ?>
							
							
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<?php $plxShow->lastArtList('
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-crop"></i></div>
								<div class="fh5co-desc">
									<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
									<p>#art_chapo</p>
								</div>	
							</div>',1); ?>
							

							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<?php $plxShow->lastArtList('
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-speedometer"></i></div>
								<div class="fh5co-desc">
									<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
									<p>#art_chapo</p>
								</div>	
							</div>',1); ?>

							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<?php $plxShow->lastArtList('
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-heart"></i></div>
								<div class="fh5co-desc">
									<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
									<p>#art_chapo</p>
								</div>	
							</div>',1); ?>
							
							<?php $plxShow->lastArtList('
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-umbrella"></i></div>
								<div class="fh5co-desc">
									<h3><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></h3>
									<p>#art_chapo</p>
								</div>	
							</div>',1); ?>		
							<div class="clearfix visible-sm-block visible-xs-block"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include(dirname(__FILE__).'/footer.php'); ?>
