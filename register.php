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
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/login.css' ?>">
</head>

<body>
    <?php if ($process == 'failedempty') : ?>
        <div style="background-color: red; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
            Register gagal, terdapat form yang kosong
        </div>
    <?php endif; ?>
    <?php if ($process == 'failedusername') : ?>
        <div style="background-color: red; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
            Register gagal, username sudah terdaftar di database
        </div>
    <?php endif; ?>
    <?php if ($process == 'failedpassword') : ?>
        <div style="background-color: red; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
            Register gagal, password tidak sesuai
        </div>
    <?php endif; ?>
    <form class="login-form" action="<?= BASE_URL . 'process/process_register.php' ?>" method="POST">
        <div class="login-form__content">
            <div class="login-form__header">Register your account</div>
            <input class="login-form__input" type="text" name="username" placeholder="Username" required autocomplete="off">
            <input class="login-form__input" type="password" name="password" placeholder="Password" required autocomplete="off">
            <input type="password" name="repassword" class="login-form__input" autocomplete="off" placeholder="re-enter password">
            <button class="login-form__button" type="submit">Register</button>
            <div class="login-form__links">
                <a class="login-form__link" href="<?= BASE_URL . "index.php" ?>"> Already have an account? login here</a>
            </div>
        </div>
    </form>
 
</body>

</html>