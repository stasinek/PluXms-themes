<?php if(!defined('PLX_ROOT')) exit; ?>
  <div id="footer">
    <p class="alignleft">
    Copyright &copy; <?php $plxShow->mainTitle('link'); ?> |   
    G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">PluXml</a> en <?php $plxShow->chrono(); ?>  
    </p>
    <p class="alignright">
      <a class="admin" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="Administration">Administration</a> | 
      <a class="top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="Remonter en haut de page">Haut de page</a>
    </p>
  </div>
</div>
</body>
</html>
