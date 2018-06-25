<?php
/**
 * Plugin plxMyPluginDownloader
 *
 * @author	Stephane F
 **/
class plxMyPluginDownloader extends plxPlugin {

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

        # appel du constructeur de la classe plxPlugin (obligatoire)
        parent::__construct($default_lang);

		# déclaration des hooks
        $this->addHook('AdminSettingsPluginsTop', 'AdminSettingsPluginsTop');
        $this->addHook('AdminPrepend', 'AdminPrepend');
        $this->addHook('AdminTopBottom', 'AdminTopBottom');

    }

	public static function is_cURL() {
		return in_array("curl", get_loaded_extensions());
	}

	public static function is_RemoteFileExists($remotefile) {

		return true;
		# code suivant ne fonctionne pas chez 1&1
		$h = get_headers($remotefile);
		$status = array();
		preg_match('/HTTP\/.* ([0-9]+) .*/', $h[0] , $status);
		return ($status[1] == 200);

	}

	public static function downloadRemoteFile($remotefile, $destination) {

		if($fp = fopen($destination, 'w')) {
			$curl = curl_init($remotefile);
			curl_setopt($curl, CURLOPT_FILE, $fp);
			curl_exec($curl);
			curl_close($curl);
			fclose($fp);
		}
		else return false;

		return (is_file($destination));

	}

	/**
	 * Méthode qui traite le formulaire de téléchargement
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
    public function AdminPrepend() {

		if(isset($_POST['download']) AND !empty($_POST['url'])) {

			$remoteFile = $_POST['url'];
			$destination = PLX_PLUGINS.basename($remoteFile);

			# on reteste que l'extension cURL est dispo
			if(!plxMyPluginDownloader::is_cURL())
				return plxMsg::Error($this->getLang('L_CURL_NOT_AVAILABLE'));

			# on teste si le fichier distant est dispo
			if(!plxMyPluginDownloader::is_RemoteFileExists($remoteFile))
				return plxMsg::Error($this->getLang('L_ERR_REMOTE_FILE'));

			# téléchargement du fichier distant
			if(!plxMyPluginDownloader::downloadRemoteFile($remoteFile, $destination))
				return plxMsg::Error($this->getLang('L_ERR_DOWNLOAD'));

			# dezippage de l'archive
			require_once(PLX_PLUGINS."plxMyPluginDownloader/dUnzip2.inc.php");
			$zip = new dUnzip2($destination); // New Class : arg = fichier à dézipper
			$zip->unzipAll(PLX_PLUGINS); // Unzip All  : arg = dossier de destination

			# redirection
			header('Location: parametres_plugins.php');
			exit;
		}

	}


	/**
	 * Méthode qui affiche le formulaire de téléchargement
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
    public function AdminSettingsPluginsTop() {?>

<div style="margin:15px 0 15px 0; padding:10px 0 10px 5px; background-color:#efefef">
<form action="parametres_plugins.php" method="post" id="form_MyPluginDownloader">
	<p><?php echo plxToken::getTokenPostMethod() ?></p>
	<p>
		<?php $this->lang('L_URL') ?> : <input type="text" name="url" value="" maxlength="255" size="80"/>&nbsp;
		<input class="button" type="submit" name="download" value="<?php $this->lang('L_DOWNLOAD') ?> " />&nbsp;<?php $this->lang('L_EXTENSION') ?>
	</p>
</form>
</div>

	<?php
	}


	/**
	 * Méthode qui effectue les controles pour le fonctionnement du plugin
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function AdminTopBottom() {

		$string = '

			$test1 = plxMyPluginDownloader::is_cURL();
			$test2 = is_dir(PLX_PLUGINS);
			$test3 = is_writable(PLX_PLUGINS);

			if(!test1 OR !test2 OR !test3) {

				echo "<p class=\"warning\">Plugin MyPluginDownloader<br />";
				if(!test1) echo "<br />'.$this->getLang('L_ERR_CURL').'";
				if(!test2) echo "<br />'.$this->getLang('L_ERR_PLX_PLUGINS').'";
				if(test2 AND !test3) echo "<br />'.$this->getLang('L_ERR_WRITE_ACCESS').'";
				echo "</p>";
				plxMsg::Display();

			}
		';
		echo '<?php '.$string.' ?>';

	}
}
?>