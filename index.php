<?php

require_once('function/helper.php');
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/login.css' ?>">
</head>

<body>
    <?php if ($process == 'successregister') : ?>
        <div style="background-color: green; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
            Register berhasil, silahkan masuk dengan akun anda
        </div>
    <?php endif; ?>
    <form class="login-form" action="<?= BASE_URL . 'process/process_login.php' ?>" method="POST">
        <div class="login-form__content">
            <div class="login-form__header">Login to your account</div>
            <input class="login-form__input" type="text" name="username" placeholder="Username" required autocomplete="off">
            <input class="login-form__input" type="password" name="password" placeholder="Password" required>
            <button class="login-form__button" type="submit">Login</button>
            <div class="login-form__links">
                <a class="login-form__link" href="<?= BASE_URL . "register.php" ?>">Register</a>
            </div>
        </div>
    </form>
</body>

</html>