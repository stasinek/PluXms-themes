<?php if(!defined('PLX_ROOT')) exit; ?>
	<div class="abs footer_lower chrome_dark">
			<!--<a href="#" class="float_left button">
				Foo
			</a>
			<a href="#" class="float_left button">
				Bar
			</a>-->
			<a href="#" class="icon icon_pluxml float_right"></a>
			G&eacute;n&eacute;r&eacute; par <a href="http://pluxml.org" title="Blog ou Cms sans base de donn&eacute;es">PluXml</a>
	</div>
</div>
<div id="sidebar" class="abs">
	<span id="nav_arrow"></span>
	<div class="abs header_upper chrome_dark">
	<img src="<?php $plxShow->template(); ?>/img/logo.png" height="50%"/> <?php $plxShow->mainTitle(''); ?>
	</div>
	<!--<form action="" class="abs header_lower chrome_light">
		// <input type="search" id="q" name="q" placeholder="Search..." />
	</form>-->
	
	<div id="sidebar_content" class="abs">
		<div id="sidebar_content_inner">
			<ul id="sidebar_menu">
				<li id="sidebar_menu_home" class="<? if(empty($plxShow->plxMotor->get) AND basename($_SERVER['SCRIPT_NAME'])=="index.php") echo "active"; else echo "noactive"; ?>">
					<a href="<? $plxShow->racine(); ?>"><span class="abs"></span>Accueil</a>
				</li>
				<?php $plxShow->staticList('','<li class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li class="#page_status"><a href="#page_url">#page_name</a></li>'); ?>
				<li>
					<a href="#">Cat&eacute;gories</a>
					<ul>
						<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name (#art_nb)</a> </li>'); ?>
					</ul>				
				</li>
				<li>
					<a href="#">Derniers articles</a>
					<ul>
						<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
					</ul>				
				</li>
				</li>
				<li>
					<a href="#">Archives</a>
					<ul>
						<?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
					</ul>				
				</li>
			</ul>
		</div>

