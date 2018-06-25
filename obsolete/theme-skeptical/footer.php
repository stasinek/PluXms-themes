<?php if(!defined('PLX_ROOT')) exit; ?>
<div id="footer-secondary">
	<div class="col-full">
		<div id="previous-posts">
		<h3>Derniers articles de la catégorie 1<span class="bg">&nbsp;</span></h3>
		<?php $plxShow->lastArtList(
			'<div class="previous-post fl last">
			<h4><a href="#art_url" title="#art_title">#art_title</a></h4>
			<p>#art_content(200)</p>
			<a class="more" href="#art_url" title="#art_title">Continuer la lecture</a>
			</div>','3','1'); ?>
		<div class="fix"></div>
		</div>
	</div>
</div>
<div id="footer-widgets">
		
		<div class="col-full">
		
			<div class="block">
				<div id="archives-3" class="widget"><h3>Archives</h3>
					<ul>
						<?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>   
					</ul>
				</div>
			</div>
			<div class="block">
				<div id="meta-3" class="widget"><h3>Mots clés</h3>
					<ul>
					<?php $plxShow->tagList('<li class="#tag_status"><a href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
					</ul>
				</div>
			</div>
			<div class="block">
				<div id="recent-comments-3" class="widget"><h3>Derniers commentaires</h3>
					<ul>
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author a dit : #com_content(34)</a></li>'); ?>
					</ul>
				</div>
			</div>
			<div class="block last">
				<div id="recent-posts-3" class="widget"><h3>Derniers articles</h3>
					<ul>
					<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>

					</ul>
				</div>
			</div>
			<div class="fix"></div>
		
		</div>
	<div id="footer">
		<div class="footer-inside">
			<div id="copyright" class="col-left">
				<p>&copy; <?php $plxShow->mainTitle('link'); ?></p>
			</div>
			<div id="credit" class="col-right">
				G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">PluXml</a> en <?php $plxShow->chrono(); ?> - <a class="admin" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="Administration">Administration</a> 
				<br />Designed by <a href="http://www.woothemes.com"><img src="http://demo.woothemes.com/skeptical/wp-content/themes/skeptical/images/woothemes.png" width="74" height="19" alt="Woo Themes" /></a> - Adapté par <a href="http://www.favrecreation.fr">FavreCréation</a></p>
			</div>

			
			<div class="fix"></div>
			
		</div>
		
	</div>
</div>
</body>
</html>
