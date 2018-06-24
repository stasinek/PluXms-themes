<?php include(dirname(__FILE__).'/header.php'); ?>
      <div id="main" class="site-main clr container">
            <div id="primary" class="content-area clr">
<div id="content" class="site-content" role="main">
	<div class="boxed clr">
	<header class="page-header clr">
	<h1 class="page-header-title"><?php $plxShow->artTitle(); ?></h1>
		<small>
			<span class="written-by">
				<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
			</span>
			<time class="art-date" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
				<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
			</time>
			<span class="art-nb-com">
				<a href="<?php $plxShow->artUrl(); ?>#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
			</span>
			<span class="art-nb-likes">
				<a href="<?php $plxShow->artUrl(); ?>#comments" title="<?php $plxShow->artNbLikes(); ?>"><?php $plxShow->artNbLikes(); ?></a>
			</span>
			<span class="art-nb-hates">
				<a href="<?php $plxShow->artUrl(); ?>#comments" title="<?php $plxShow->artNbHates(); ?>"><?php $plxShow->artNbLikes(); ?></a>
			</span>
		</small>
	</header>
	<article class="entry clr">

		<?php $plxShow->artThumbnail(); ?>
		<?php $plxShow->artContent(); ?>

			<small>
				<span class="classified-in">
					<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
				</span>
				<span class="tags">
					<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
				</span>
			</small>
	<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

	<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		
	</article>
	</div>
				
</div>               
               
</div>
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>


