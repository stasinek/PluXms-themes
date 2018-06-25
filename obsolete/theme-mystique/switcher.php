<?php 
/**
 * Sélecteur de Feuille de style avec cookie
 *
 * @package   Theme PluXml
 * @author    Fred
 * @website   http://mypluxml.com
 * @date      14/08/2010 Passage pluxml 5.0.1 url rewrite
 * @update    28/01/2013 Passage pluxml 5.1.7
 **/

function construire_url($css) {
   global $plxMotor;
   return $plxMotor->urlRewrite('themes/'.$plxMotor->style.'/css/color-' .$css. '.css'); 
}
$css = array( 
    'green', // $css[0]
    'red',   // $css[1]
    'grey',  // $css[2]
    'blue'   // $css[3]
); 

$actuel = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES); 
$new_style = (isset($_GET['style'])) ? $_GET['style'] : ''; 
$cookie_style = (isset($_COOKIE['style'])) ? $_COOKIE['style'] : ''; 
 
if(in_array($new_style, $css, true)) 
{ 
    setcookie('style', $new_style, time() + (365 * 24 * 3600), '/'); 
    $url = construire_url($new_style); 
} 
 
else if(in_array($cookie_style, $css, true)) 
{ 
    $url = construire_url($cookie_style); 
} 
 
else 
{ 
    $url = construire_url($css[0]); //On nomme le css "green" par defaut
} 
?>