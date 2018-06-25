<?php if(!defined('PLX_ROOT')) exit; ?>
<?php

# Control du token du formulaire
plxToken::validateFormToken($_POST);

if(!empty($_POST)) {
	$plxPlugin->setParam('mnuName', $_POST['mnuName'], 'string');
	$plxPlugin->setParam('mnuPos', $_POST['mnuPos'], 'numeric');
	$plxPlugin->setParam('sortby', $_POST['sortby'], 'string');
	$plxPlugin->setParam('sort', $_POST['sort'], 'string');
	$plxPlugin->setParam('format', $_POST['format'], 'string');
	$plxPlugin->setParam('exclude', implode(',',$_POST['catId']), 'string');
	$plxPlugin->setParam('template', $_POST['template'], 'string');
	$plxPlugin->saveParams();
	header('Location: parametres_plugin.php?p=plxMyAllArchive');
	exit;
}
$mnuName =  $plxPlugin->getParam('mnuName')=='' ? $plxPlugin->getLang('L_DEFAULT_MENU_NAME') : $plxPlugin->getParam('mnuName');
$mnuPos =  $plxPlugin->getParam('mnuPos')=='' ? 2 : $plxPlugin->getParam('mnuPos');
$sortby =  $plxPlugin->getParam('sortby')=='' ? 'by_year_desc' : $plxPlugin->getParam('sortby');
$sort =  $plxPlugin->getParam('sort')=='' ? 'rsort' : $plxPlugin->getParam('sort');
$format =  $plxPlugin->getParam('format')=='' ? $plxPlugin->getLang('L_DEFAULT_FORMAT') : $plxPlugin->getParam('format');
$exclude =  $plxPlugin->getParam('exclude')=='' ? '' : $plxPlugin->getParam('exclude');
$template = $plxPlugin->getParam('template')=='' ? 'static.php' : $plxPlugin->getParam('template');

# On récupère les templates des pages statiques
$files = plxGlob::getInstance(PLX_ROOT.'themes/'.$plxAdmin->aConf['style']);
if ($array = $files->query('/^static(-[a-z0-9-_]+)?.php$/')) {
	foreach($array as $k=>$v)
		$aTemplates[$v] = $v;
}

$aSortBy = array();
$aSortBy['by_year_desc'] = $plxPlugin->getLang('L_SORT_BY_YEAR_DESC');
$aSortBy['by_year_asc'] = $plxPlugin->getLang('L_SORT_BY_YEAR_ASC');
$aSortBy['by_category']	= $plxPlugin->getLang('L_SORT_BY_CATEGORY');

$aSort = array('rsort'=>$plxPlugin->getLang('L_SORT_DESCENDING_DATE'), 'sort'=>$plxPlugin->getLang('L_SORT_ASCENDING_DATE'));

?>

<h2><?php echo $plxPlugin->getInfo('title') ?></h2>

<form id="form_plxmycontact" action="parametres_plugin.php?p=plxMyAllArchive" method="post">
	<fieldset>
		<p class="field"><label for="id_mnuName"><?php $plxPlugin->lang('L_MENU_TITLE') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('mnuName',$mnuName,'text','20-20') ?>
		<p class="field"><label for="id_mnuPos"><?php $plxPlugin->lang('L_MENU_POS') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('mnuPos',$mnuPos,'text','2-5') ?>
		<p class="field"><label for="id_sortby"><?php $plxPlugin->lang('L_MENU_SORT_BY') ?>&nbsp;:</label></p>
		<?php plxUtils::printSelect('sortby', $aSortBy, $sortby) ?>
		<p class="field"><label for="id_sort"><?php $plxPlugin->lang('L_MENU_SORT') ?>&nbsp;:</label></p>
		<?php plxUtils::printSelect('sort', $aSort, $sort) ?>
		<p class="field"><label for="id_format"><?php $plxPlugin->lang('L_MENU_FORMAT') ?></label></p>
		<?php plxUtils::printInput('format',$format,'text','50-50') ?>

		<p class="field"><label><?php $plxPlugin->lang('L_MENU_EXCLUDE_CATEGORIES') ?>&nbsp;:</label></p>
		<p style="margin:0;padding:0;float:left">
		<?php
			$catId = explode(',', $exclude);
			$selected = (is_array($catId) AND in_array('000', $catId)) ? ' checked="checked"' : '';
			echo '<input type="checkbox" id="cat_unclassified" name="catId[]"'.$selected.' value="000" /><label for="cat_unclassified">&nbsp;'. L_UNCLASSIFIED .'</label><br />';
			$selected = (is_array($catId) AND in_array('home', $catId)) ? ' checked="checked"' : '';
			echo '<input type="checkbox" id="cat_home" name="catId[]"'.$selected.' value="home" /><label for="cat_home">&nbsp;'. L_CATEGORY_HOME_PAGE .'</label><br />';
			foreach($plxAdmin->aCats as $cat_id => $cat_name) {
				$selected = (is_array($catId) AND in_array($cat_id, $catId)) ? ' checked="checked"' : '';
				echo '<input type="checkbox" id="cat_'.$cat_id.'" name="catId[]"'.$selected.' value="'.$cat_id.'" />';
				if($plxAdmin->aCats[$cat_id]['active'])
					echo '<label for="cat_'.$cat_id.'">&nbsp;'.plxUtils::strCheck($cat_name['name']).'</label><br />';
				else
					echo '<label for="cat_'.$cat_id.'">&nbsp;<em>'.plxUtils::strCheck($cat_name['name']).'</em></label><br />';
			}
		?>
		</p>
		<p class="field"><label for="id_template"><?php $plxPlugin->lang('L_MENU_TEMPLATE') ?>&nbsp;:</label></p>
		<?php plxUtils::printSelect('template', $aTemplates, $template) ?>
		<p>
			<?php echo plxToken::getTokenPostMethod() ?>
			<input type="submit" name="submit" value="<?php $plxPlugin->lang('L_SAVE') ?>" />
		</p>
	</fieldset>
</form>
