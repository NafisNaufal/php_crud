<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$noid = $_POST['noid'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$img       = $_FILES['image']['name'];
$dir         = "../img/";
$tmpFile    = $_FILES['image']['tmp_name'];
move_uploaded_file($tmpFile, $dir . $img);


// Pengecekan kelengkapan data
if (empty($nama) || empty($noid) || empty($nohp) || empty($email) || empty($alamat)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO pegawai(nama, noid, nohp, email, alamat, img) VALUES ('$nama', '$noid', '$nohp', '$email', '$alamat', '$img')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}
