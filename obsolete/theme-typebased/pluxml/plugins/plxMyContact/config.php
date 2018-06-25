<?php if(!defined('PLX_ROOT')) exit; ?>
<?php

# Control du token du formulaire
plxToken::validateFormToken($_POST);

if(!empty($_POST)) {
	$plxPlugin->setParam('mnuDisplay', $_POST['mnuDisplay'], 'numeric');
	$plxPlugin->setParam('mnuName', $_POST['mnuName'], 'string');
	$plxPlugin->setParam('mnuPos', $_POST['mnuPos'], 'numeric');
	if(!plxUtils::checkMail($_POST['email'])) {
		$_POST['email']='';
		plxMsg::Error($plxPlugin->getLang('L_ERROR_EMAIL'));
	}
	$plxPlugin->setParam('email', $_POST['email'], 'string');
	$plxPlugin->setParam('subject', $_POST['subject'], 'string');
	$plxPlugin->setParam('thankyou', $_POST['thankyou'], 'string');
	$plxPlugin->setParam('template', $_POST['template'], 'string');
	$plxPlugin->saveParams();
	header('Location: parametres_plugin.php?p=plxMyContact');
	exit;
}
$mnuDisplay =  $plxPlugin->getParam('mnuDisplay')=='' ? 1 : $plxPlugin->getParam('mnuDisplay');
$mnuName =  $plxPlugin->getParam('mnuName')=='' ? $plxPlugin->getLang('L_DEFAULT_MENU_NAME') : $plxPlugin->getParam('mnuName');
$mnuPos =  $plxPlugin->getParam('mnuPos')=='' ? 2 : $plxPlugin->getParam('mnuPos');
$email = $plxPlugin->getParam('email')=='' ? '' : $plxPlugin->getParam('email');
$subject = $plxPlugin->getParam('subject')=='' ? $plxPlugin->getLang('L_DEFAULT_OBJECT') : $plxPlugin->getParam('subject');
$thankyou = $plxPlugin->getParam('thankyou')=='' ? $plxPlugin->getLang('L_DEFAULT_THANKYOU') : $plxPlugin->getParam('thankyou');
$template = $plxPlugin->getParam('template')=='' ? 'static.php' : $plxPlugin->getParam('template');

# On récupère les templates des pages statiques
$files = plxGlob::getInstance(PLX_ROOT.'themes/'.$plxAdmin->aConf['style']);
if ($array = $files->query('/^static(-[a-z0-9-_]+)?.php$/')) {
	foreach($array as $k=>$v)
		$aTemplates[$v] = $v;
}

?>

<h2><?php echo $plxPlugin->getInfo('title') ?></h2>
<?php
if(function_exists('mail')) {
	echo '<p style="color:green"><strong>'.$plxPlugin->getLang('L_MAIL_AVAILABLE').'</strong></p>';
} else {
	echo '<p style="color:#ff0000"><strong>'.$plxPlugin->getLang('L_MAIL_NOT_AVAILABLE').'</strong></p>';
}
?>
<form id="form_plxmycontact" action="parametres_plugin.php?p=plxMyContact" method="post">
	<fieldset>
		<p class="field"><label for="id_mnuDisplay"><?php echo $plxPlugin->lang('L_MENU_DISPLAY') ?>&nbsp;:</label></p>
		<?php plxUtils::printSelect('mnuDisplay',array('1'=>L_YES,'0'=>L_NO),$mnuDisplay); ?>
		<p class="field"><label for="id_mnuName"><?php $plxPlugin->lang('L_MENU_TITLE') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('mnuName',$mnuName,'text','20-20') ?>
		<p class="field"><label for="id_mnuPos"><?php $plxPlugin->lang('L_MENU_POS') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('mnuPos',$mnuPos,'text','2-5') ?>
		<p class="field"><label for="id_email"><?php $plxPlugin->lang('L_EMAIL') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('email',$email,'text','50-120') ?>
		<p class="field"><label for="id_subject"><?php $plxPlugin->lang('L_EMAIL_SUBJECT') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('subject',$subject,'text','100-120') ?>
		<p class="field"><label for="id_thankyou"><?php $plxPlugin->lang('L_THANKYOU_MESSAGE') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('thankyou',$thankyou,'text','100-120') ?>
		<p class="field"><label for="id_template"><?php $plxPlugin->lang('L_TEMPLATE') ?>&nbsp;:</label></p>
		<?php plxUtils::printSelect('template', $aTemplates, $template) ?>
		<p>
			<?php echo plxToken::getTokenPostMethod() ?>
			<input type="submit" name="submit" value="<?php $plxPlugin->lang('L_SAVE') ?>" />
		</p>
	</fieldset>
</form>
