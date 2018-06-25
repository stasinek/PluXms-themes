<div id="right-col">

 <h3 class="side-title" id="information-title">INFORMATION</h3>
 <div class="information-contents">
Changer ce message et titre dans votre admin et édition de sidebar.php de votre thème. 
 </div>

 <div id="side-top" class="clearfix">
  <div class="side-left-ex">
   <div class="side-box-short">
    <h3 class="side-title">Cat&eacute;gories</h3>
   <ul>
    <?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
   </ul>
   </div>
  </div>
  <div class="side-right-ex">
   <div class="side-box-short">
    <h3 class="side-title">Archives</h3>
        <ul>
            <?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
        </ul>
   </div>
  </div>
 </div>
 <div id="side_middle" class="clearfix">
  <div class="side-left-ex">
   <div class="side-box-short">
    <h3 class="side-title">Derniers articles</h3>
    <ul>
     <?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
    </ul>
   </div>
  </div>
  <div class="side-right-ex">
   <div class="side-box-short">
    <h3 class="side-title">Derniers commentaires</h3>
    <ul>
     <?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit : #com_content(34)</a></li>'); ?>
    </ul>
   </div>
  </div>
 </div>
 <div id="side-bottom-ex">
  <div class="side-box">
   <h3 class="side-title">Mots cl&eacute;s</h3>
   <ul>
<?php $plxShow->tagList('<li class="tags-#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
			<li class="last_li">&nbsp;</li>
   </ul>
  </div>
 </div>

 <div class="side-box">
  <ul id="copyrights">
   <li>Copyright &copy; <?php echo date("Y"); ?> <?php $plxShow->mainTitle('link'); ?>, tous droits r&eacute;serv&eacute;s</li>
   <li>Theme designed by <a href="http://www.mono-lab.net/">mono-lab</a></li>
   <li id="wp">G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">PluXml</a> en <?php $plxShow->chrono(); ?><br />  
		<?php $plxShow->httpEncoding() ?>
   </li>
  </ul>
 </div>

</div><!-- #left-col end -->