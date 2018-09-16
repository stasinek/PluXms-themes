<?php include(dirname(__FILE__).'/header.php'); ?>

<div id="content" class="site-content">
	<div class="apmag-container">
		<div id="accesspres-mag-breadcrumbs" class="clearfix"><span class="bread-you">Vous êtes ici</span>
			<div class="ak-container">
				<a href=".">
					<?php echo $plxShow->getLang('HOME'); ?>
				</a>
				<span class="bread_arrow"> > </span> 
				<span class="current">
					<?php $plxShow->lang('ERROR'); ?>
				</span>
			</div>
		</div>	
		<div id="primary" class="content-area">
			<header class="page-header">
				<h1 class="page-title">
					<span><?php $plxShow->lang('ERROR'); ?></span>
				</h1>	
			</header><!-- .entry-header -->
			<div class="entry-content">
					<p>
						<?php $plxShow->erreurMessage(); ?>
					</p>
			</div><!-- .entry-content -->
		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div><!-- .entry-content -->
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
