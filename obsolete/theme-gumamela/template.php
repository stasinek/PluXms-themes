
		
					<?php # En mode 'home' ou 'catégorie' # ?>
	<?php if($pluxml->mode == 'home' || $pluxml->mode =='cat') : ?>
			<?php # Liste d'articles # ?>
		<?php while($pluxml->result->loop()):?>
		<div class="post">
			<h2 class="title"><?php __('title', 'link'); ?></h2>
			<h3 class="posted">Catégorie : <?php __('categorie'); ?></h3>
			<div class="story">
				<p><?php __('chapo'); ?></p>
			</div>
			<div class="meta">
				<p><?php __('nb_com'); ?></p>
			</div>
		</div>		
		<?php endwhile; ?>

		<?php __('pagination'); ?>
			<?php endif; ?>
<?php # Fin mode 'home'/'catégorie' # ?>

<?php # En mode 'article' # ?>
		<?php if($pluxml->mode == 'article') : ?>
				<?php # Liste d'articles # ?>
		<?php while($pluxml->result->loop()):?>
		<div class="post">
			<h2 class="title"><?php __('title'); ?></h2>
			<h3 class="posted">Catégorie : <?php __('categorie'); ?></h3>
			<div class="story">
				<p><?php __('content'); ?></p>
			</div>
			<div class="meta">
				<p>Par <?php __('author'); ?>, le <?php __('date'); ?> à <?php __('hour'); ?></p>
			</div>
				<?php endwhile; ?>
		

		<?php if($pluxml->coms):?>	
		<div id="comments">
			<h2>Commentaires</h2>
		<?php while($pluxml->coms->loop()):?>
		<div class="comment <?php echo 'ligne'.$pluxml->coms->i%2 ?>">
			<p>Par <?php __('com_author', 'link'); ?> le <?php __('com_date'); ?></p>
			<blockquote><p><?php __('com_content'); ?></p></blockquote>
		</div>
		<?php endwhile; ?>
	</div>
		<?php endif; ?>
	
	<?php if($pluxml->config['allow_com'] == 1 && $pluxml->result->f('allow_com') == 1) : ?>
	<div id="form">
		<h2>Ecrire un commentaire</h2>
		<form action="index.php?<?php echo $pluxml->get; ?>" method="post">
			<fieldset>
				<label>Nom&nbsp;:</label>
				<input name="name" type="text" size="30" value="" /><br />
				<label>Site (facultatif)&nbsp;:</label>
				<input name="site" type="text" size="30" value="http://" /><br />
				<label>E-mail (facultatif)&nbsp;:</label>
				<input name="mail" type="text" size="30" value="" /><br />
				<label>Commentaire&nbsp;:</label>
				<textarea name="message" cols="35" rows="8"></textarea>
				
				<?php # affichage du capcha anti-spam
				if($pluxml->config['capcha'] == 1){
					echo '<label><strong>Vérification anti-spam</strong>&nbsp;:</label>';
					echo '<p>'.$capcha->q().'<input name="rep" type="text" size="10" /></p>';
					echo '<input name="rep2" type="hidden" value="'.$capcha->r().'" />';
				} ?>
				
				<p><input type="submit" value="Envoyer" /></p>
			</fieldset>
		</form>
	</div></div>
	<?php endif; ?>
		<?php endif; ?>
<?php # Fin mode 'article' # ?>

	</div>
	<div id="colTwo">
		<ul>
			<li id="menu">
				<h2>Pages</h2>
				<ul>
		<li class="active"><a href="index.php" accesskey="1" title="">Accueil</a></li>
		<li><a href="http://hybrids-square.com" accesskey="2" title="">Hybrid's Square</a></li>
		<li><a href="http://hybrids-square.com" accesskey="2" title="">Hybrid's Square</a></li>
		<li><a href="http://hybrids-square.com" accesskey="2" title="">Hybrid's Square</a></li>
		<li><a href="http://hybrids-square.com" accesskey="2" title="">Hybrid's Square</a></li>
				</ul>
			</li>
<li>
			<h2>Catégories</h2>
			<?php __('catlist'); ?>
			</li>
			<li>
		<div id="syndication">
			<h2>Syndication</h2>
			<ul>
				<li><?php __('rss'); ?></li>
				<li><?php __('atom'); ?></li>
			</ul>
		</div>
			</li>
			<li>
				<h2>Meta</h2>
				<ul>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="#" title="This page validates as CSS 2.0">Valid <abbr title="Cascading Style Sheets">CSS</abbr></a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div style="clear: both;">&nbsp;</div>

