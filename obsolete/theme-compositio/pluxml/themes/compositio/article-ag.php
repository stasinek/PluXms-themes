<?php include(dirname(__FILE__).'/header.php'); ?>

<h2 class="title">Les Assemblées Générales</h2>

<?php 
if($aFiles = $plxMotor->plxGlob_arts->query('/^[0-9]{4}.['.$plxMotor->activeCats.',]*.[0-9]{3}.[0-9]{12}.[a-z0-9-]+.xml$/','art','rsort', 0, false, 'before')) {
	
	$plxRecord_arts = false;
	$array=array();
	foreach($aFiles as $k=>$v) { # On parcourt tous les fichiers
		$array[ $k ] = $plxMotor->parseArticle(PLX_ROOT.$plxMotor->aConf['racine_articles'].$v);
	}
	# On stocke les enregistrements dans un objet plxRecord
	$plxRecord_arts = new plxRecord($array);
}
?>
<?php foreach ($plxShow->plxMotor->aCats as $key => $value): $i=0;if ($key == '004') :?>

		<ul>
				<?php
				if($plxRecord_arts) {
					# On boucle sur nos articles
					while($plxRecord_arts->loop()) {
	 					$cat = explode(',',$plxRecord_arts->f('categorie'));
						if (in_array('004',$cat)) {
							$i++;
							$num = intval($plxRecord_arts->f('numero'));
							echo '<li><a href="'.$plxMotor->urlRewrite("?article".$num."/".plxUtils::strCheck($plxRecord_arts->f('url'))).'">'.$plxRecord_arts->f('title').' du '.plxDate::formatDate($plxRecord_arts->f('date'),'#num_day/#num_month/#num_year(4)').'</a></li>'."\n";
						}

					}
					if ($i == 0) {
							echo 'Aucun article';
					}
				}
				?>
				
		</ul>
		<div class="p-det">
		<ul>
			<li class="p-det-com"><?php ob_start();$plxShow->artNbCom('#nb');$artNbCom = ob_get_clean(); echo $artNbCom == '' ? 'Fermés' : $artNbCom; ?></li>
			<li class="p-det-tag"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></li>
		</ul>
		</div>

<?php endif;endforeach; ?>

<?php include(dirname(__FILE__).'/footer.php'); ?>