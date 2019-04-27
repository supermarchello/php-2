<?php
  include_once 'models/config.php';
  include_once 'models/photo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>ГАЛЕРЕЯ ФОТО</h1>
  </header>
<?php
if (!empty($arData)) {
    render('templates/index.php', $arData);
}
?>
</body>
</html>
