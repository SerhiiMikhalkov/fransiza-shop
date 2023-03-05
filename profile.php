<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>


                            <!-- Тут пиши код html знизу -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизація</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="./media/img/ico.jpg" type="image/x-icon" />
</head>

<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Вихід</a>
        
    </form>

</body>

</html>