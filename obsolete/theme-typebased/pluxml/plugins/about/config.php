<?php
/**
 * Plugin about
 *
 * @package     PLX
 * @version     1.1
 * @date        11/05/2012
 * @author      Cyril MAGUIRE, rockyhorror
 **/
 
	if(!defined('PLX_ROOT')) exit; 
	
	# Control du token du formulaire
	plxToken::validateFormToken($_POST);
	
	if(!empty($_POST)) {
		$plxPlugin->setParam('about', $_POST['about'], 'cdata');
		$plxPlugin->setParam('pub_title', $_POST['pub_title'], 'cdata');
		$plxPlugin->setParam('width', $_POST['width'], 'numeric');
		$plxPlugin->setParam('height', $_POST['height'], 'numeric');
		$plxPlugin->saveParams();
		header('Location: parametres_plugin.php?p=about');
		exit;
	}
?>

<h2><?php $plxPlugin->lang('L_TITLE') ?></h2>
<p><?php $plxPlugin->lang('L_CONFIG_DESCRIPTION') ?></p>

<form action="parametres_plugin.php?p=about" method="post">
	<fieldset class="withlabel">
		<p><?php echo $plxPlugin->getLang('L_CONFIG_ROOT_PATH') ?></p>
		<?php plxUtils::printInput('about', $plxPlugin->getParam('about'), 'text'); ?>
		
		<p><?php echo $plxPlugin->getLang('L_CONFIG_PUB_TITLE') ?></p>
		<?php plxUtils::printInput('pub_title', $plxPlugin->getParam('pub_title'), 'text'); ?>

		<p><?php echo $plxPlugin->getLang('L_CONFIG_WIDTH') ?></p>
		<?php plxUtils::printInput('width', $plxPlugin->getParam('width'), 'numeric'); ?>

		<p><?php echo $plxPlugin->getLang('L_CONFIG_HEIGHT') ?></p>
		<?php plxUtils::printInput('height', $plxPlugin->getParam('height'), 'numeric'); ?>
	</fieldset>
	<br />
	<?php echo plxToken::getTokenPostMethod() ?>
	<input type="submit" name="submit" value="<?php echo $plxPlugin->getLang('L_CONFIG_SAVE') ?>" />
</form>
