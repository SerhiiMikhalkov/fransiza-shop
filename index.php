<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизація </title>
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="./media/img/ico.jpg" type="image/x-icon" />
</head>

<body>

    <!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit">Війти</button>
        <p>
            У вас немає акунту? - <a href="register.php">зарейструйтеся</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>

</html>