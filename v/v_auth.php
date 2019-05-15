
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$title?></title>
    <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="v/style.css" />
</head>
<body>
<div id="header">
    <h1><?=$title?></h1>
</div>


<div id="auth">
    <form action="/index.php" method="post">
        <lable>Введите логин</lable>
        <input type="text" name="login">
        <lable>Введите пароль</lable>
        <input type="password" name="pass">
        <input type="submit" value="Войти">
    </form>
</div>
</body>
</html>

