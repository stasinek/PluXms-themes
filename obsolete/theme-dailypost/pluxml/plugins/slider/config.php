<?php if(!defined('PLX_ROOT')) exit; 

/*
Slideshow pour PluXml basé sur s3slider
Par MILLET Maxime
site : http://www.milletmaxime.net
*/

if(!empty($_POST))
{
	$plxPlugin->setParam('width', $_POST['width'], 'numeric');
	$plxPlugin->setParam('height', $_POST['height'], 'numeric');
	$plxPlugin->setParam('time', $_POST['time'], 'numeric');
	$plxPlugin->setParam('bcolor', $_POST['bcolor'], 'string');
  $plxPlugin->setParam('tcolor', $_POST['tcolor'], 'string');
	$plxPlugin->setParam('lcolor', $_POST['lcolor'], 'string');
	$plxPlugin->setParam('JSfile', $_POST['JSfile'], 'numeric');
	$plxPlugin->saveParams();

	header('Location: parametres_plugin.php?p=slider');
	exit;
}
?>

<h2><?php echo $plxPlugin->getInfo('title') ?><?php echo $plxPlugin->getLang('L_CONFIG');?></h2>

<form action="parametres_plugin.php?p=slider" method="post">
  <table border="0" cellspacing="0">
    <tr>
      <td><label for="width"><?php echo $plxPlugin->getLang('L_WIDTH');?></label></td>
      <td><input type="text" name="width" id="width" value="<?php echo $plxPlugin->getParam('width'); ?>" /></td>
    </tr>
    <tr>
      <td><label for="height"><?php echo $plxPlugin->getLang('L_HEIGHT');?></label></td>
      <td><input type="text" name="height" id="height" value="<?php echo $plxPlugin->getParam('height'); ?>" /></td>
    </tr>
    <tr>
      <td><label for="time"><?php echo $plxPlugin->getLang('L_TIMER');?></label></td>
      <td><input type="text" name="time" id="time" value="<?php echo $plxPlugin->getParam('time'); ?>" /></td>
    </tr>
    <tr>
      <td><label for="bcolor"><?php echo $plxPlugin->getLang('L_TEXT_BACKGROUND');?></label></td>
      <td><input type="text" name="bcolor" id="bcolor" value="<?php echo $plxPlugin->getParam('bcolor'); ?>" /></td>
    </tr>
    <tr>
      <td><label for="tcolor"><?php echo $plxPlugin->getLang('L_TEXT_COLOR');?></label></td>
      <td><input name="tcolor" type="text" id="tcolor" value="<?php echo $plxPlugin->getParam('tcolor'); ?>" /></td>
    </tr>
    <tr>
      <td><label for="lcolor"><?php echo $plxPlugin->getLang('L_LINK_COLOR');?></label></td>
      <td><input name="lcolor" type="text" id="lcolor" value="<?php echo $plxPlugin->getParam('lcolor'); ?>" /></td>
    </tr>
    <tr>
      <td><label for="JSfile"><?php echo $plxPlugin->getLang('L_JAVASCRIPT_FILE');?></label></td>
      <td><select name="JSfile" id="JSfile">
<?php if($plxPlugin->getParam('JSfile') == 1)echo "\t\t\t<option value=\"1\"  selected=\"selected\">".$plxPlugin->getLang('L_YES')."</option>\n";
											   else echo "\t\t\t<option value=\"1\">".$plxPlugin->getLang('L_YES')."</option>\n";
	  if($plxPlugin->getParam('JSfile') == 0)echo "\t\t\t<option value=\"0\"  selected=\"selected\">".$plxPlugin->getLang('L_NO')."</option>\n";
											   else echo "\t\t\t<option value=\"0\">".$plxPlugin->getLang('L_NO')."</option>\n";
?>		</select></td>
    </tr>
  </table>
  <p>
  	<br/>
    <input type="submit" name="submit" value="<?php echo $plxPlugin->getLang('L_OK_CONFIG');?>" />
  </p>
  <p><br/><?php echo $plxPlugin->getLang('L_EXPLAIN_JS');?></p>
</form>

