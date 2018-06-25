<?php

/**
 * Gestion des images et documents
 *
 * @package PLX
 * @author  Stephane F
 **/

include(dirname(__FILE__).'/../../core/admin/prepend.php');

# Recuperation de l'id de l'éditeur appelant
$editor = (isset($_GET['id']) AND in_array($_GET['id'], array('editor_content', 'editor_chapo','editor_ornament'))) ? $_GET['id'] : die;

$redirect = $plxAdmin->aConf['racine'].'plugins/plxeditor/medias.php?id='.$editor;

# Control du token du formulaire
plxToken::validateFormToken($_POST);

# Sécurisation du chemin du dossier
if(isset($_POST['folder']) AND $_POST['folder']!='.' AND !plxUtils::checkSource($_POST['folder'])) {
	$_POST['folder']='.';
}

# Hook Plugins
eval($plxAdmin->plxPlugins->callHook('plxEditorMediasPrepend'));

# Recherche du type de medias à afficher via la session
if(empty($_SESSION['medias']) OR !empty($_POST['btn_images'])) {
	$_SESSION['medias'] = $plxAdmin->aConf['images'];
	$_SESSION['folder'] = '';
}
elseif(!empty($_POST['btn_documents'])) {
	$_SESSION['medias'] = $plxAdmin->aConf['documents'];
	$_SESSION['folder'] = '';
}
elseif(!empty($_POST['folder'])) {
	$_SESSION['currentfolder']= (isset($_SESSION['folder'])?$_SESSION['folder']:'');
	$_SESSION['folder'] = ($_POST['folder']=='.'?'':$_POST['folder']);
}
# Nouvel objet de type plxMedias
if($plxAdmin->aConf['userfolders'])
	$plxMedias = new plxMedias(PLX_ROOT.$_SESSION['medias'].$_SESSION['user'].'/',$_SESSION['folder']);
else
	$plxMedias = new plxMedias(PLX_ROOT.$_SESSION['medias'],$_SESSION['folder']);

#----

if(!empty($_POST['btn_newfolder']) AND !empty($_POST['newfolder'])) {
	$newdir = plxUtils::title2filename(trim($_POST['newfolder']));
	if($plxMedias->newDir($newdir)) {
		$_SESSION['folder'] = $_SESSION['folder'].$newdir.'/';
	}
	header('Location: '.$redirect);
	exit;
}
elseif(!empty($_POST['btn_delete']) AND !empty($_POST['folder']) AND $_POST['folder']!='.') {
	if($plxMedias->deleteDir($_POST['folder'])) {
		$_SESSION['folder'] = '';
	}
	header('Location: '.$redirect);
	exit;
}
elseif(!empty($_POST['btn_upload'])) {
	$plxMedias->uploadFiles($_FILES, $_POST);
	header('Location: '.$redirect);
	exit;
}
elseif(isset($_POST['selection']) AND ($_POST['selection'][0] == 'delete' OR $_POST['selection'][1] == 'delete') AND isset($_POST['idFile'])) {
	$plxMedias->deleteFiles($_POST['idFile']);
	header('Location: '.$redirect);
	exit;
}
elseif(isset($_POST['selection']) AND ($_POST['selection'][0] == 'move' OR $_POST['selection'][1] == 'move') AND isset($_POST['idFile'])) {
	$plxMedias->moveFiles($_POST['idFile'], $_SESSION['currentfolder'], $_POST['folder']);
	header('Location: '.$redirect);
	exit;
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $plxAdmin->aConf['default_lang'] ?>" lang="<?php echo $plxAdmin->aConf['default_lang'] ?>">
<head>
	<title><?php echo plxUtils::strCheck($plxAdmin->aConf['title']) ?> <?php echo L_ADMIN ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo strtolower(PLX_CHARSET) ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $plxAdmin->aConf['racine'] ?>plugins/plxeditor/medias.css" media="screen" />
	<script type="text/javascript" src="<?php echo $plxAdmin->aConf['racine'] ?>core/lib/functions.js"></script>
	<script type="text/javascript" src="<?php echo $plxAdmin->aConf['racine'] ?>core/lib/visual.js"></script>
	<script type="text/javascript" src="<?php echo $plxAdmin->aConf['racine'] ?>core/lib/multifiles.js"></script>
	<script type="text/javascript">
	function toggle_divs(){
		var medias_back = document.getElementById('medias_back');
		var uploader = document.getElementById('files_uploader');
		var manager = document.getElementById('files_manager');
		if(uploader.style.display == 'none') {
			medias_back.style.display = 'block';
			uploader.style.display = 'block';
			manager.style.display = 'none';
		} else {
			medias_back.style.display = 'none';
			uploader.style.display = 'none';
			manager.style.display = 'block';
		}
	}
	function basename(path){
		return path.replace(/\\/g,'/').replace( /.*\//, '' );
	}
	function formatHTML(p_href, p_src, type) {
		var p_title = document.getElementById('p_title') ? ' title="'+document.getElementById('p_title').value+'"' : ''; // not implemented yet
		var p_rel = document.getElementById('p_rel') ? ' rel="'+document.getElementById('p_rel').value+'"' : ''; // not implemented yet
		var p_class = document.getElementById('p_class') ? ' class="'+document.getElementById('p_class').value+'"' : ''; // not implemented yet
		var alignStart ='';
		var alignEnd = '';
		var alignment = document.forms[1].alignment;
		if(alignment!=undefined || alignment!=null) {
			for(var i = 0; i < 8; i++) {
				if(alignment[i].checked && alignment[i].value!='none') {
					if(alignment[i].value=='center') {
						alignStart = '<div style="text-align:center;">';	
					}else if(alignment[i].value=='noborder') {
						alignStart = '<div class="noborder">';
					}else if(alignment[i].value=='noborderG') {
						alignStart = '<div class="noborder" style="float:left;">';
					}else if(alignment[i].value=='noborderC') {
						alignStart = '<div class="noborder" style="text-align:center;">';	
					}else if(alignment[i].value=='noborderD') {
						alignStart = '<div class="noborder" style="float:right;">';
					} else {
						alignStart = '<div style="float:'+alignment[i].value+';">';
					}
					alignEnd = '</div> ';
					break;
				}
			}
		}
		if(type=='1') {
			if(p_src!='') {
				return alignStart+'<a href="'+p_href+'"'+p_title+p_class+p_rel+' class="zoombox" ><img src="'+p_src+'" alt="" /></a>'+alignEnd;
			} else {
				return alignStart+'<img src="'+p_href+'" alt="" />'+alignEnd;
			}
		} else {
			return alignStart+'<a href="'+p_href+'"'+p_title+p_rel+' class="zoombox" >'+basename(p_href)+'</a>'+alignEnd;
		}

	}
	</script>
	<?php eval($plxAdmin->plxPlugins->callHook('plxEditorMediasEndHead')) ?>
</head>

<body>

<div id="content">

<p id="medias_back" style="display:none"><a href="javascript:void(0)" onclick="toggle_divs();return false"><?php echo L_MEDIAS_BACK ?></a></p>

<?php eval($plxAdmin->plxPlugins->callHook('plxEditorMediasTop')) # Hook Plugins ?>

<p class="path"><?php echo L_MEDIAS_DIRECTORY.' : /'.plxUtils::strCheck(basename($_SESSION['medias']).'/'.$_SESSION['folder']) ?></p>

<div id="files_uploader" style="display:none">
	<p style="margin-bottom:15px"><?php echo L_MEDIAS_MAX_UPOLAD_FILE ?> : <?php echo $plxMedias->maxUpload['display'] ?></p>
	<form action="<?php echo $redirect ?>" method="post" id="form_uploader" class="form_uploader" enctype="multipart/form-data">
		<div class="manager">
			<input id="selector" type="file" name="selector" />
			<div class="files_list" id="files_list"></div>
			<?php if($_SESSION['medias']==$plxAdmin->aConf['images']) : ?>
			<div class="options1">
				<?php echo L_MEDIAS_RESIZE ?>&nbsp;:&nbsp;
				<ul>
					<li><input type="radio" checked="checked" name="resize" value="" />&nbsp;<?php echo L_MEDIAS_RESIZE_NO ?></li>
					<?php
						foreach($img_redim as $redim) {
							echo '<li><input type="radio" name="resize" value="'.$redim.'" />&nbsp;'.$redim.'</li>';
						}
					?>
					<li>
						<input type="radio" name="resize" value="user" />&nbsp;
						<input type="text" size="2" maxlength="4" name="user_w" />&nbsp;x&nbsp;
						<input type="text" size="2" maxlength="4" name="user_h" />
					</li>
				</ul>
			</div>
			<div class="options2">
				<?php echo L_MEDIAS_THUMBS ?>&nbsp;:&nbsp;
				<ul>
					<li><input type="radio" name="thumb" value="" />&nbsp;<?php echo L_MEDIAS_THUMBS_NONE ?></li>
					<?php
						foreach($img_thumb as $thumb) {
							echo '<li><input type="radio" name="thumb" value="'.$thumb.'" />&nbsp;'.$thumb.'</li>';
						}
					?>
					<li>
						<input type="radio" checked="checked" name="thumb" value="<?php echo intval($plxAdmin->aConf['miniatures_l' ]).'x'.intval($plxAdmin->aConf['miniatures_h' ]) ?>" />&nbsp;<?php echo intval($plxAdmin->aConf['miniatures_l' ]).'x'.intval($plxAdmin->aConf['miniatures_h' ]) ?>
						&nbsp;&nbsp;(<a href="parametres_affichage.php"><?php echo L_MEDIAS_MODIFY ?>)</a>
					</li>
					<li>
						<input type="radio" name="thumb" value="user" />&nbsp;
						<input type="text" size="2" maxlength="4" name="thumb_w" />&nbsp;x&nbsp;
						<input type="text" size="2" maxlength="4" name="thumb_h" />
					</li>
				</ul>
			</div>
			<?php endif; ?>
			<?php eval($plxAdmin->plxPlugins->callHook('AdminMediasUpload')) # Hook Plugins ?>
			<input class="button submit" type="submit" name="btn_upload" id="btn_upload" value="<?php echo L_MEDIAS_SUBMIT_FILE ?>" />
			<?php echo plxToken::getTokenPostMethod() ?>
		</div>
	</form>
	<script type="text/javascript">
		var multi_selector = new MultiSelector(document.getElementById('files_list'), -1, '<?php echo $plxAdmin->aConf['racine'] ?>');
		multi_selector.addElement(document.getElementById('selector'));
	</script>
	<div class="clearer"></div>
</div>

<div id="files_manager">
	<form action="<?php echo $redirect ?>" method="post" id="form_medias" class="form_medias">
		<div class="manager">
			<div class="create">
				<?php echo L_MEDIAS_NEW_FOLDER ?>&nbsp;:&nbsp;
				<input class="newfolder" id="id_newfolder" type="text" name="newfolder" value="" maxlength="50" size="10" />
				<input class="button new" type="submit" name="btn_newfolder" value="<?php echo L_MEDIAS_CREATE_FOLDER ?>" />
			</div>
			<input class="button submit<?php echo basename($_SESSION['medias'])=='images'?' select':'' ?>" type="submit" name="btn_images" value="<?php echo L_MEDIAS_IMAGES ?>" />
			<input class="button submit<?php echo basename($_SESSION['medias'])=='documents'?' select':'' ?>" type="submit" name="btn_documents" value="<?php echo L_MEDIAS_DOCUMENTS ?>" />
			<input class="button submit" type="submit" onclick="toggle_divs();return false" value="<?php echo L_MEDIAS_ADD_FILE ?>" />
			<?php echo plxToken::getTokenPostMethod() ?>
		</div>
		<div class="browser">
			<?php echo L_MEDIAS_FOLDER ?>&nbsp;:&nbsp;
			<?php echo $plxMedias->contentFolder() ?>&nbsp;
			<input class="button submit" type="submit" name="btn_ok" value="<?php echo L_OK ?>" />&nbsp;
			<?php if(!empty($_SESSION['folder'])) : ?>
			<input class="button delete" type="submit" name="btn_delete" onclick="Check=confirm('<?php echo L_MEDIAS_DELETE_FOLDER_CONFIRM ?>');if(Check==false) return false;" value="<?php echo L_MEDIAS_DELETE_FOLDER ?>" />
			<?php endif; ?>
		</div>
		<div class="files">
			<?php if($_SESSION['medias']==$plxAdmin->aConf['images']) : ?>
			<p style="float:right;text-align:right;">
				<?php echo L_MEDIAS_ALIGNMENT ?>&nbsp;:&nbsp;
				<input type="radio" name="alignment" value="none" checked="checked" />&nbsp;<?php echo L_MEDIAS_ALIGN_NONE ?>
				<input type="radio" name="alignment" value="left" />&nbsp;<?php echo L_MEDIAS_ALIGN_LEFT ?>
				<input type="radio" name="alignment" value="center" />&nbsp;<?php echo L_MEDIAS_ALIGN_CENTER ?>
				<input type="radio" name="alignment" value="right" />&nbsp;<?php echo L_MEDIAS_ALIGN_RIGHT ?>
				<input type="radio" name="alignment" value="noborder" />&nbsp;NoBorder
			<br/>
				<input type="radio" name="alignment" value="noborderG" />&nbsp;NoBorder Gauche
				<input type="radio" name="alignment" value="noborderC" />&nbsp;NoBorder Centre
				<input type="radio" name="alignment" value="noborderD" />&nbsp;NoBorder Droite
			<p>
			<?php endif; ?>
			<p>
				<?php plxUtils::printSelect('selection[]', array( '' =>L_FOR_SELECTION, 'delete' =>L_DELETE, 'move'=>L_PLXMEDIAS_MOVE_FOLDER), '', false, '', false) ?>
				<input class="button submit" type="submit" name="btn_action" value="<?php echo L_OK ?>" />
			</p>
			<table class="table">
			<thead>
			<tr>
				<th class="checkbox"><input type="checkbox" onclick="checkAll(this.form, 'idFile[]')" /></th>
				<th class="image">&nbsp;</th>
				<th><?php echo L_MEDIAS_FILENAME ?></th>
				<th class="infos"><?php echo L_MEDIAS_EXTENSION ?></th>
				<th class="infos"><?php echo L_MEDIAS_FILESIZE ?></th>
				<th class="infos"><?php echo L_MEDIAS_DIMENSIONS ?></th>
				<th class="date"><?php echo L_MEDIAS_DATE ?></th>
			</tr>
			</thead>
			<tbody>
			<?php
			# Initialisation de l'ordre
			$num = 0;
			# Si on a des fichiers
			if($plxMedias->aFiles) {
				foreach($plxMedias->aFiles as $k=>$v) { # Pour chaque fichier
					$ordre = ++$num;
					echo '<tr class="line-'.($num%2).'">';
					echo '<td><input type="checkbox" name="idFile[]" value="'.$k.'" /></td>';
					echo '<td class="icon"><a onclick="this.target=\'_blank\'" title="'.plxUtils::strCheck($v['name']).'" href="'.$v['path'].'"><img alt="" src="'.$v['.thumb'].'" class="thumb" /></a></td>';
					echo '<td>';
					echo '<a onclick="window.opener.'.$editor.'.execCommand(\'inserthtml\', formatHTML(\''.$v['path'].'\', \'\', \''.($_SESSION['medias']==$plxAdmin->aConf['images']).'\'));self.close();return false;" title="'.L_MEDIAS_ADD.' : '.plxUtils::strCheck($v['name']).'" href="javascript:void(0)">'.plxUtils::strCheck($v['name']).'</a><br />';
					if($v['thumb']) {
						echo '<a onclick="window.opener.'.$editor.'.execCommand(\'inserthtml\', formatHTML(\''.$v['path'].'\', \''.plxUtils::thumbName($v['path']).'\', \''.($_SESSION['medias']==$plxAdmin->aConf['images']).'\'));self.close();return false;" title="'.L_MEDIAS_ADD.' '.L_MEDIAS_THUMB.' : '.plxUtils::strCheck($v['name']).'" href="javascript:void(0)">'.L_MEDIAS_THUMB.'</a> : '.$v['thumb']['infos'][0].' x '.$v['thumb']['infos'][1]. ' ('.plxUtils::formatFilesize($v['thumb']['filesize']).')';
					}
					echo '</td>';
					echo '<td>'.strtoupper($v['extension']).'</td>';
					echo '<td>'.plxUtils::formatFilesize($v['filesize']).'</td>';
					$dimensions = '&nbsp;';
					if(isset($v['infos']) AND isset($v['infos'][0]) AND isset($v['infos'][1])) {
						$dimensions = $v['infos'][0].' x '.$v['infos'][1];
					}
					echo '<td>'.$dimensions.'</td>';
					echo '<td>'.date('d/m/Y', $v['date']).'</td>';
					echo '</tr>';
				}
			}
			else echo '<tr><td colspan="7" class="center">'.L_MEDIAS_NO_FILE.'</td></tr>';
			?>
			</tbody>
			</table>
			<p>
				<?php plxUtils::printSelect('selection[]', array( '' =>L_FOR_SELECTION, 'delete' =>L_DELETE, 'move'=>L_PLXMEDIAS_MOVE_FOLDER), '', false, '', false) ?>
				<input class="button submit" type="submit" name="btn_action" value="<?php echo L_OK ?>" />
			</p>
		</div>
	</form>
	<div class="clear"></div>
</div>

</div><!-- content -->

<?php eval($plxAdmin->plxPlugins->callHook('plxEditorMediasEndBody')) ?>

<script type="text/javascript">
	setMsg();
</script>

</body>
</html>
