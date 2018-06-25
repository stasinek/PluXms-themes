<?php if(!defined('PLX_ROOT')) exit; ?>
<?php
if(!empty($_POST)) {
	if (strpos($_POST['htmlgoogle'],'.html') !== false) {
		$_POST['htmlgoogle'] = str_replace('.html','',$_POST['htmlgoogle']);
	}
	$string = '';
	$rules = array();
	
	$plxPlugin->setParam('metagoogle', $_POST['metagoogle'], 'string');
	$plxPlugin->setParam('htmlgoogle', $_POST['htmlgoogle'], 'string');
	$plxPlugin->setParam('metabing', $_POST['metabing'], 'string');
	
	$plxPlugin->setParam('All_check', $_POST['All_check'], 'string');
	$plxPlugin->setParam('All_action', $_POST['All_action'], 'string');
	$plxPlugin->setParam('All_rules', $_POST['All_rules'], 'string');
	
	if ($_POST['All_check'] == 'on') {
		$string .= 'User-agent: *'."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['All_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['All_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /'."\n\n";
	}
	
	$plxPlugin->setParam('Googlebot_check', $_POST['Googlebot_check'], 'string');
	$plxPlugin->setParam('Googlebot_action', $_POST['Googlebot_action'], 'string');
	$plxPlugin->setParam('Googlebot_rules', $_POST['Googlebot_rules'], 'string');
	
	if ($_POST['Googlebot_check'] == 'on') {
		$string .= 'User-agent: Googlebot'."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['Googlebot_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['Googlebot_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /'."\n\n";
	}
	
	$plxPlugin->setParam('Googlebot-Mobile_check', $_POST['Googlebot-Mobile_check'], 'string');
	$plxPlugin->setParam('Googlebot-Mobile_action', $_POST['Googlebot-Mobile_action'], 'string');
	$plxPlugin->setParam('Googlebot-Mobile_rules', $_POST['Googlebot-Mobile_rules'], 'string');
	
	if ($_POST['Googlebot-Mobile_check'] == 'on') {
		$string .= 'User-agent: Googlebot-Mobile'."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['Googlebot-Mobile_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['Googlebot-Mobile_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /'."\n\n";
	}
	
	$plxPlugin->setParam('Googlebot-Image_check', $_POST['Googlebot-Image_check'], 'string');
	$plxPlugin->setParam('Googlebot-Image_action', $_POST['Googlebot-Image_action'], 'string');
	$plxPlugin->setParam('Googlebot-Image_rules', $_POST['Googlebot-Image_rules'], 'string');
	
	if ($_POST['Googlebot-Image_check'] == 'on') {
		$string .= 'User-agent: Googlebot-Image'."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['Googlebot-Image_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['Googlebot-Image_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /'."\n\n";
	}
	
	$plxPlugin->setParam('Mediapartners-Google_check', $_POST['Mediapartners-Google_check'], 'string');
	$plxPlugin->setParam('Mediapartners-Google_action', $_POST['Mediapartners-Google_action'], 'string');
	$plxPlugin->setParam('Mediapartners-Google_rules', $_POST['Mediapartners-Google_rules'], 'string');
	
	if ($_POST['Mediapartners-Google_check'] == 'on') {
		$string .= 'User-agent: Mediapartners-Google'."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['Mediapartners-Google_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['Mediapartners-Google_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /'."\n\n";
	}
	
	$plxPlugin->setParam('Adsbot-Google_check', $_POST['Adsbot-Google_check'], 'string');
	$plxPlugin->setParam('Adsbot-Google_action', $_POST['Adsbot-Google_action'], 'string');
	$plxPlugin->setParam('Adsbot-Google_rules', $_POST['Adsbot-Google_rules'], 'string');
	
	if ($_POST['Adsbot-Google_check'] == 'on') {
		$string .= 'User-agent: Adsbot-Google'."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['Adsbot-Google_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['Adsbot-Google_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /'."\n\n";
	}
	
	$plxPlugin->setParam('otherbot', $_POST['otherbot'], 'string');
	$plxPlugin->setParam('otherbot_action', $_POST['otherbot_action'], 'string');
	$plxPlugin->setParam('otherbot_rules', $_POST['otherbot_rules'], 'string');
	
	if ($_POST['otherbot_check'] == 'on') {
		$string .= 'User-agent: '.$_POST['otherbot']."\n";
		$rules = explode("\n",trim(plxUtils::strRevCheck($_POST['otherbot_rules'])));
		foreach ($rules as $key => $value) {
			if (!empty($value)){
				$string .= $_POST['otherbot_action'].': '.$value."\n";}
		}
		$string .= 'Allow: /';
	}
																
	$plxPlugin->saveParams();
	@file_put_contents(PLX_ROOT.'robots.txt',$string);
	@file_put_contents(PLX_ROOT.$_POST['htmlgoogle'].'.html','google-site-verification: '.$_POST['htmlgoogle'].'.html');
	@file_put_contents(PLX_ROOT.'BingSiteAuth.xml','<?xml version="1.0"?>
<users>
	<user>'.plxUtils::strCheck($_POST['metabing']).'</user>
</users>');
	chmod(PLX_ROOT.'robots.txt',0755);
	chmod(PLX_ROOT.$_POST['htmlgoogle'].'.html',0755);
	chmod(PLX_ROOT.'BingSiteAuth.xml',0755);
	header('Location: parametres_plugin.php?p=plxMetaVerif');
	exit;
}

?>
<div id="metaverif">
	<h2><?php $plxPlugin->lang('L_TITLE_CONFIG'); ?></h2>
	<p><?php $plxPlugin->lang('L_DESCRIPTION_CONFIG'); ?></p>
	<div class="clearer"></div>
	<h3><?php $plxPlugin->lang('L_OPTIONS_CONFIG'); ?></h3>
	<form action="parametres_plugin.php?p=plxMetaVerif" method="post">
		<fieldset>
			<label><?php $plxPlugin->lang('L_GOOGLE_META'); ?></label>
			<br/>
			<?php echo plxUtils::printInput('metagoogle',plxUtils::strCheck($plxPlugin->getParam('metagoogle')),'text',70); ?>
			<br/>
			<label><?php $plxPlugin->lang('L_GOOGLE_HTML'); ?></label>
			<br/>
			<?php echo plxUtils::printInput('htmlgoogle',plxUtils::strCheck($plxPlugin->getParam('htmlgoogle')).(($plxPlugin->getParam('htmlgoogle') == '') ? '' : '.html'),'text',70); ?>
			<br/>
			<label><?php $plxPlugin->lang('L_BING_META'); ?></label>
			<br/>
			<?php echo plxUtils::printInput('metabing',plxUtils::strCheck($plxPlugin->getParam('metabing')),'text',70); ?>
			<br/>
			
			<h3><?php $plxPlugin->lang('L_ROBOTS_TXT'); ?></h3>
			<?php $plxPlugin->lang('L_SUMMARY_RULES'); ?>
			
			<label for="All_check"><?php $plxPlugin->lang('L_ROBOTS_ALL'); ?></label>
				<input type="checkbox" id="All_check" name="All_check" <?php echo $plxPlugin->getParam('All_check') == 'on' ? 'checked="checked"' : ''; ?>/>
			<br/>
			<label for="All_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="All_action" id="All_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('All_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('All_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
				</select>
			<br/>
			<label for="All_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('All_rules', $plxPlugin->getParam('All_check') == 'on' ? plxUtils::strCheck($plxPlugin->getParam('All_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			<label for="Googlebot_check">Googlebot</label>
				<input type="checkbox" id="Googlebot_check" name="Googlebot_check" <?php echo $plxPlugin->getParam('Googlebot_check') == 'on' ? 'checked="checked"' : ''; ?>/>
			<br/>
			<label for="Googlebot_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="Googlebot_action" id="Googlebot_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('Googlebot_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('Googlebot_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
			</select>
			<br/>
			<label for="Googlebot_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('Googlebot_rules', $plxPlugin->getParam('Googlebot_check') == 'on' ? plxUtils::strCheck($plxPlugin->getParam('Googlebot_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			
			<label for="Googlebot-Mobile_check">Googlebot-Mobile</label>
				<input type="checkbox" id="Googlebot-Mobile_check" name="Googlebot-Mobile_check" <?php echo $plxPlugin->getParam('Googlebot-Mobile_check') == 'on' ? 'checked="checked"' : '';  ?>/>
			<br/>
			<label for="Googlebot-Mobile_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="Googlebot-Mobile_action" id="Googlebot-Mobile_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('Googlebot-Mobile_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('Googlebot-Mobile_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
				</select>
			<br/>
			<label for="Googlebot-Mobile_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('Googlebot-Mobile_rules', $plxPlugin->getParam('Googlebot-Mobile_check') == 'on' ? plxUtils::strCheck($plxPlugin->getParam('Googlebot-Mobile_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			<label for="Googlebot-Image_check">Googlebot-Image</label>
				<input type="checkbox" id="Googlebot-Image_check" name="Googlebot-Image_check" <?php echo $plxPlugin->getParam('Googlebot-Image_check') == 'on' ? 'checked="checked"' : '';  ?>/>
			<br/>
			<label for="Googlebot-Image_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="Googlebot-Image_action" id="Googlebot-Image_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('Googlebot-Image_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('Googlebot-Image_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
				</select>
			<br/>
			<label for="Googlebot-Image_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('Googlebot-Image_rules', $plxPlugin->getParam('Googlebot-Image_check') == 'on' ? plxUtils::strCheck($plxPlugin->getParam('Googlebot-Image_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			<label for="Mediapartners-Google_check">Mediapartners-Google</label>
				<input type="checkbox" id="Mediapartners-Google_check" name="Mediapartners-Google_check" <?php echo $plxPlugin->getParam('Mediapartners-Google_check') == 'on' ? 'checked="checked"' : '';  ?>/>
			<br/>
			<label for="Mediapartners-Google_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="Mediapartners-Google_action" id="Mediapartners-Google_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('Mediapartners-Google_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('Mediapartners-Google_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
				</select>
			<br/>
			<label for="Mediapartners-Google_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('Mediapartners-Google_rules', $plxPlugin->getParam('Mediapartners-Google_check') == 'on' ? plxUtils::strCheck($plxPlugin->getParam('Mediapartners-Google_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			<label for="Adsbot-Google_check">Adsbot-Google</label>
				<input type="checkbox" id="Adsbot-Google_check" name="Adsbot-Google_check" <?php echo $plxPlugin->getParam('Adsbot-Google_check') == 'on' ? 'checked="checked"' : ''; ?>/>
			<br/>
			<label for="Adsbot-Google_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="Adsbot-Google_action" id="Adsbot-Google_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('Adsbot-Google_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('Adsbot-Google_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
				</select>
			<br/>
			<label for="Adsbot-Google_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('Adsbot-Google_rules', $plxPlugin->getParam('Adsbot-Google_check') == 'on' ?  plxUtils::strCheck($plxPlugin->getParam('Adsbot-Google_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			<label><?php $plxPlugin->lang('L_OTHER_BOT'); ?></label>
			<br/>
			<?php echo plxUtils::printInput('otherbot',plxUtils::strCheck($plxPlugin->getParam('otherbot')),'text',70); ?>
			<br/>
			<label for="otherbot_action"><?php $plxPlugin->lang('L_ACTIONS'); ?></label>
				<select name="otherbot_action" id="otherbot_action">
					<option value="Allow" <?php echo $plxPlugin->getParam('otherbot_action') == 'Allow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_ALLOW'); ?></option>
					<option value="Disallow" <?php echo $plxPlugin->getParam('otherbot_action') == 'Disallow' ? 'selected="selected"' : '';?>><?php $plxPlugin->lang('L_ROBOTS_DISALLOW'); ?></option>
				</select>
			<br/>
			<label for="otherbot_rules"><?php $plxPlugin->lang('L_RULES'); ?></label>
			<br/>
				<?php echo plxUtils::printArea('otherbot_rules', $plxPlugin->getParam('otherbot') != '' ? plxUtils::strCheck($plxPlugin->getParam('otherbot_rules')) : '', '5', '5',false,'smallArea'); ?>
			<br/>
			
			<input type="submit" name="submit" value="OK" />
		</fieldset>
	</form>
	<div class="clearer"></div>
</div>
