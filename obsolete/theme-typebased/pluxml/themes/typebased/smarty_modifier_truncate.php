<?php function smarty_modifier_truncate($string, $length = 80, $etc = '...',$break_words = false, $middle = false, $link = false)
{
    if ($length == 0)
        return '';

    if ($link != false) {
    	$etc = '<a href="'.$link.'">'.$etc.'</a>';
    }

    if (strlen($string) > $length) {
        $length -= min($length, strlen($etc));
        if (!$break_words && !$middle) {
            $string = preg_replace('/\s+?(\S+)?$/', '', strip_tags(substr($string, 0, $length+1)));
        }
        if(!$middle) {
            return strip_tags(substr($string, 0, $length)) . $etc;
        } else {
            return strip_tags(substr($string, 0, $length/2)) . $etc . strip_tags(substr($string, -$length/2));
        }
    } else {
        return $string;
    }
}?>