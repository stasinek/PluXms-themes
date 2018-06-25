<?php if(!defined('PLX_ROOT')) exit; 
/*
Slideshow pour PluXml basé sur s3slider
Par MILLET Maxime
site : http://www.milletmaxime.net
*/
?>
<h2>Aide pour l'utilisation du slider</h2>

<p><strong><span style="color:red">/!\</span> Pour le fonctionnement du plugin, vous devez installer JQuery sur votre site (&gt;1.4), un plugin JQueryest même disponible sur le site de pluxml.</strong></p>
<p>Après avoir activé le plugin vous devez insérer le code suivant dans les pages où vous souhaitez afficher le slide :</p>
<pre style="font-size:13px;font-family:'Lucida Console', Monaco, monospace">
&lt;?php
global $plxShow;<br />eval($plxShow-&gt;callHook('slideHTML'));
?&gt;
</pre>
<p>Il vous reste ensuite à insérer les images grâce au nouveau menu &quot;Slider&quot; qui vient d'apparaitre sur la gauche<strong> ;-)</strong> .</p>
