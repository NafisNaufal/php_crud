<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;

if ($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id = $id"));

$error =  isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;

?>
<style>
    .login-form__input {
        width: 50%;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 2px solid #dddddd;
        background: #ffffff;
        outline: none;
        transition: border-color 0.5s;
    }

    .login-form__input:focus {
        border-color: #0082e6;
    }

    .login-form__input::placeholder {
        color: #aaaaaa;
    }

    form {
        justify-content: center;
        margin-left: 50px;
    }
</style>
<?php
if ($error == "true") : ?>
    <div style="background-color: red; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
        Proses gagal, pastikan semuar formulir terisi
    </div>
<?php endif; ?>

    <h1 style="text-align: center; color: #185ADB;">Form Edit Pegawai</h1>
    <form method="POST" action="<?= BASE_URL . 'process/process_edit.php' ?>">
        <input name="id" value="<?= $pegawai['id'] ?>" type="hidden">
<br>
        <label for="nama">Nama</label>
        <input type="text" class="login-form__input" id="nama" name="nama" value="<?= $pegawai['nama'] ?>">

<br>
        <label for="noid">Nomor ID</label>
        <input type="number" class="login-form__input" id="noid" name="noid" value="<?= $pegawai['noid'] ?>">

<br>
        <label for="nohp">Nomor HP</label>
        <input type="number" class="login-form__input" id="nohp" name="nohp" value="<?= $pegawai['nohp'] ?>">
<br>

        <label for="email">Email</label>
        <input type="email" class="login-form__input" id="email" name="email" value="<?= $pegawai['email'] ?>">

<br>
        <label for="alamat">Alamat</label>
        <input type="text" class="login-form__input" id="alamat" name="alamat" value="<?= $pegawai['alamat'] ?>">
<br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>