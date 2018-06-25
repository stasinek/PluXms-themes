<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="footer">

		<div id="pre-footer">
			<p><span class="hb"><a href="http://leloupetlechien.fr" title="« Hesitation Blues » un thème pour PluXml 5.1.2">Hesitation Blues</a></span></p>
		</div>
  
		<div id="footerbloc">
			<div id="footerbloc-left">
				<p>&nbsp;</p>
			</div>
			<div id="footerbloc-center">
				<p>&nbsp;</p>
			</div>
			<div id="footerbloc-right">
				<p>&nbsp;</p>
			</div>
		</div>

		<p id="credits"><?php $plxShow->mainTitle('link'); ?> -
			<?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->version('') ?>
			<?php $plxShow->httpEncoding() ?>
			<span><a class="admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -
			<a class="top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></span>
		</p>

	</div>

</body>
</html>
