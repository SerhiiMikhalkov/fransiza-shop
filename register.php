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
    <title>Авторизація</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="./media/img/ico.jpg" type="image/x-icon" />
</head>

<body>

    <!-- Форма регістрації -->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФІО</label>
        <input type="text" name="full_name" placeholder="Введіть своє повне ім'я">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введіть свою пошту">
        <label>Аватарка</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
        <button type="submit">Війти</button>
        <p>
            У вас вже є акаун? - <a href="index.php">авторизируйтесь</a>!
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