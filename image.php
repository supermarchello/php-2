<?php
  //ini_get("MAX_POST_SIZE");
  include_once 'models/config.php';
?>
<?php
$arData['src'] = PHOTO.$_GET['photo'];
if (!empty($arData)) {
    render('templates/image.php', $arData);
}
?>
