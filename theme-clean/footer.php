<?php if (!defined('PLX_ROOT')) exit; ?>
	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					&copy; <?php echo date("Y"); ?> <?php $plxShow->mainTitle('link'); ?> - 
					Design par <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a>
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
					<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php $plxShow->template(); ?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="<?php $plxShow->template(); ?>/js/main.js"></script>

	
	</body>
</html>
