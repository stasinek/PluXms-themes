<?php if(!defined('PLX_ROOT')) exit;
/*
Slideshow pour PluXml basé sur s3slider
Par MILLET Maxime
site : http://www.milletmaxime.net
*/
$plxMotor = plxMotor::getInstance();
$slider = $plxMotor->plxPlugins->getInstance('slider');
plxToken::validateFormToken($_POST);
if(isset($_GET['del']) && sha1($_GET['del']+date('YzH'))==$_GET['h']) 
{
	$slider->delPic($_GET['del']);
}
if(isset($_POST['name']) && isset($_POST['uri']) && isset($_POST['geo']) && $_POST['action']=="edit") 
{
	$slider->editPic($_POST['idp'],$_POST['name'],$_POST['uri'],$_POST['geo'],$_POST['span']);
}
if(isset($_POST['name']) && isset($_POST['uri']) && isset($_POST['geo']) && $_POST['action']=="new") 
{
	$slider->newPic($_POST['name'],$_POST['uri'],$_POST['geo'],$_POST['span']);
}
if(isset($_GET['idp'])) $idp = $_GET['idp'];
else $idp=-1;
?>
<h2><?php echo $plxPlugin->getLang('L_ADMIN');?></h2>

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<td><?php echo $plxPlugin->getLang('L_ID');?></td>
			<td><?php echo $plxPlugin->getLang('L_PIC');?></td>
			<td><?php echo $plxPlugin->getLang('L_TITLE');?></td>
			<td><?php echo $plxPlugin->getLang('L_TEXT');?></td>
			<td><?php echo $plxPlugin->getLang('L_PIC');?></td>
			<td><?php echo $plxPlugin->getLang('L_TEXT_POSITION');?></td>
			<td><?php echo $plxPlugin->getLang('L_ACTIONS');?></td>
		</tr>
	</thead>

<?php
		$getPics=$slider->getPictures();
		$n=count($getPics);
		if($n > 0)
		{
			for($i=0;$i!=count($getPics);$i++)
			{
				if($idp == $i) {
					$id=$i+1;
?>

		<form action="plugin.php?p=slider&idp=<?php echo $i;?>" method="post">
	<tr>
		<td>
			<input name="action" type="hidden" value="edit"/>
			<input name="idp" type="hidden" value="<?php echo $i;?>"/><?php echo $id;?>
		</td>
		<td>
			<?php if (!empty($getPics[$i]['uri'])): ?>

			<img src="<?php echo $getPics[$i]['uri'];?>" width="54" height="54" alt="<?php echo $plxPlugin->getLang('L_VERIF');?>"/>
			<?php endif; ?>

		</td>
		<td>
			<input name="name" type="text" id="name" style="width:90%" value="<?php echo $getPics[$i]['name'];?>"/>
		</td>
		<td width="40%">
			<input type="text" name="span" id="span" style="width:90%" value="<?php echo htmlentities($getPics[$i]['span'], ENT_QUOTES, 'UTF-8');?>"/>
		</td>
		<td>
			<input type="text" name="uri" id="uri" style="width:90%" value="<?php echo $getPics[$i]['uri'];?>"/>
		</td>
		<td>
			<select name="geo" id="geo">

<?php
					if($getPics[$i]['geo'] == "top") {
?>

				<option value="top" selected="selected"><?php echo $plxPlugin->getLang('L_TOP');?></option>

<?php
					}else{
?>
	
				<option value="top"><?php echo $plxPlugin->getLang('L_TOP');?></option>

<?php
					}if($getPics[$i]['geo'] == "left") {
?>

				<option value="left" selected="selected"><?php echo $plxPlugin->getLang('L_LEFT');?></option>

<?php
					}else{
?>

				<option value="left"><?php echo $plxPlugin->getLang('L_LEFT');?></option>

<?php
					}if($getPics[$i]['geo'] == "right") {
?>
	
				<option value="right" selected="selected"><?php echo $plxPlugin->getLang('L_RIGHT');?></option>

<?php
					}else{
?>

				<option value="right"><?php echo $plxPlugin->getLang('L_RIGHT');?></option>

<?php
					}if($getPics[$i]['geo'] == "bottom"){
?>

				<option value="bottom" selected="selected"><?php echo $plxPlugin->getLang('L_BOTTOM');?></option>

<?php
					}else {
?>

				<option value="bottom"><?php echo $plxPlugin->getLang('L_BOTTOM');?></option>
<?php 
					}if($getPics[$i]['geo'] == "null"){
?>

				<option value="null" selected="selected"><?php echo $plxPlugin->getLang('L_NULL');?></option>

<?php
					}else {
?>

				<option value="null"><?php echo $plxPlugin->getLang('L_NULL');?></option>
<?php 
					}
?>
			</select>
		</td>
		<td>
			<input name="edit" type="submit" value="<?php echo $plxPlugin->getLang('L_MODIFY');?>"/>
		</td>
	</tr>
	</form>

<?php
				}
			else {
				$id=$i+1;
?>
	
	<tr>
		<td><?php echo $id;?></td>
		<td><img src="<?php echo $getPics[$i]['uri'];?>" width="54" height="54" alt="<?php echo $plxPlugin->getLang('L_VERIF');?>"/></td>
		<td><?php echo $getPics[$i]['name'];?></td>
		<td><?php echo $getPics[$i]['span'];?></td>
		<td><?php echo $getPics[$i]['uri'];?></td>
		<td><?php echo ($getPics[$i]['geo'] == 'top' ? $plxPlugin->getLang('L_TOP') : ($getPics[$i]['geo'] == 'bottom' ? $plxPlugin->getLang('L_BOTTOM') : ($getPics[$i]['geo'] == 'right' ? $plxPlugin->getLang('L_RIGHT') : ($getPics[$i]['geo'] == 'left' ? $plxPlugin->getLang('L_LEFT') : $plxPlugin->getLang('L_NULL')))));?></td>
		<td>
			<a href="plugin.php?p=slider&del=<?php echo $i;?>&h=<?php echo sha1($i+date('YzH'));?>" onclick="return(confirm('<?php echo $plxPlugin->getLang('L_CONFIRM').$getPics[$i]['name'];?> ?'));">
				<img src="<?php echo PLX_PLUGINS ?>/slider/img/delete.gif" alt="<?php echo $plxPlugin->getLang('L_DEL');?>" title="<?php echo $plxPlugin->getLang('L_DEL');?>"/>
			</a>
			&nbsp;&nbsp;&nbsp;
			<a href="plugin.php?p=slider&idp=<?php echo $i;?>">
				<img src="<?php echo PLX_PLUGINS ?>/slider/img/pencil.png" alt="<?php echo $plxPlugin->getLang('L_MODIFY');?>" title="<?php echo $plxPlugin->getLang('L_MODIFY');?>"/>
			</a>
		</td>
	</tr>

<?php
				}
			}
	   }else{
?>

	  <tr>
		<td colspan="6" valign="middle">
			<strong><?php echo $plxPlugin->getLang('L_NO_PIC');?></strong>
		</td>
	</tr>
	
<?php
			}
?>
	
	<form action="plugin.php?p=slider" method="post">
	<tr>
		<td colspan="2"><input name="action" type="hidden" value="new"/></td>
		<td><input type="text" name="name" id="name" style="width:90%"/></td>
		<td><input type="text" name="span" id="span" style="width:90%"/></td>
		<td><input type="text" name="uri" id="uri" style="width:90%"/></td>
		<td>
			<select name="geo" id="geo">
				<option value="top"><?php echo $plxPlugin->getLang('L_TOP');?></option>
				<option value="left"><?php echo $plxPlugin->getLang('L_LEFT');?></option>
				<option value="right"><?php echo $plxPlugin->getLang('L_RIGHT');?></option>
				<option value="bottom"><?php echo $plxPlugin->getLang('L_BOTTOM');?></option>
				<option value="null"><?php echo $plxPlugin->getLang('L_NULL');?></option>
			</select>
		</td>
		<td><input name="new" type="submit" value="<?php echo $plxPlugin->getLang('L_ADD');?>"/></td>
	</tr>
	</form>
</table>
