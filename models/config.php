<?php
//define('MY','VALUE');

CONST PHOTO = './images/';
CONST PHOTO_SMALL = './img/';

function render($template, $arData)
{
    foreach ($arData as $key => $value) {
        $$key = $value;
    }
    ob_start();
    include $template;
    return ob_get_contents();
}

?>
