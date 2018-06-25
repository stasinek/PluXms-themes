<?php include(dirname(__FILE__).'/header.php'); ?>
	<main class="main grid" role="main">

		<section class="col sml-12 med-8">

			<ul class="repertory menu breadcrumb">
				<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
				<li><?php $plxShow->catName(); ?>
				<?php $plxShow->catDescription(' : #cat_description'); ?></li>	
			</ul>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<small>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?>
					</small>
				</header>

				<section>
					<a id="fancybox-manual-c" href="javascript:;"><img width="50%" src="<?php $plxShow->artThumbnail('#img_url'); ?>"></a>				
				<br />
				<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<small>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</small>
				</footer>

			</article>

			<?php endwhile; ?>

			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>

			<span>
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</span>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

	
	<script type="text/javascript">
		$(document).ready(function() {
			
			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
				<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

					
					{
						href : '<?php $plxShow->artThumbnail('#img_url'); ?>',
						title : '<?php $plxShow->artThumbnail('#img_title'); ?>'
					}
					, 
			<?php endwhile; ?>
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>	
	
<?php include(dirname(__FILE__).'/footer.php'); ?>
