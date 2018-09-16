<?php if (!defined('PLX_ROOT')) exit; ?>
      <!-- FOOTER -->       
      <div class="line">
         <footer>
            <div class="s-12 l-8">
               <p>
					&copy; <?php echo date("Y"); ?> <?php $plxShow->mainTitle('link'); ?> - 
					<?php $plxShow->subTitle(); ?> - 
					<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
					<?php $plxShow->httpEncoding() ?>
					<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
               </p>
            </div>
            <div class="s-12 l-4">		                            
               <a class="right" href="https://www.myresponsee.com/fashion/" title="My Responsee" target = "_blank">Design par<br>
               Responsee
               </a>                       
            </div>
         </footer>      </div>
   </body>
</html>