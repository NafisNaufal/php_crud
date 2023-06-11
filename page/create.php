<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div style="background-color: red; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
        Semua formulir harus diisi
    </div>
<?php endif; ?>
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
<h1 style="text-align: center; color: #185ADB;">Form Tambah Pegawai</h1>
<form method="POST" action="<?= BASE_URL . 'process/process_add.php' ?>" enctype="multipart/form-data">

    <label for="nama">Nama</label>
    <input type="text" class="login-form__input" id="nama" name="nama">
    <br>
    <label for="noid">Nomor ID</label>
    <input type="number" class="login-form__input" id="noid" name="noid">
    <br>
    <label for="nohp">Nomor HP</label>
    <input type="number" class="login-form__input" id="nohp" name="nohp">
    <br>
    <label for="email">Email</label>
    <input type="email" class="login-form__input" id="email" name="email">
    <br>
    <label for="alamat">Alamat</label>
    <input type="text" class="login-form__input" id="alamat" name="alamat">
    <br>
    <label for="image"></label>
    <br>
    <img src="" alt="Empty Image" width="150" id="preview"><br>
    <label class="form-label">Gambar</label>
    <input type="file" name="image" id="img" accept="image/*" onchange="previewImage()">
    <br>
    <button type="submit">Submit</button>
    <script>
        function previewImage() {
            var file = document.getElementById('img').files[0];
            var reader = new FileReader();


            reader.onload = function(e) {
                var previewImage = document.getElementById('preview');
                previewImage.src = e.target.result;
            }

            reader.readAsDataURL(file);

        }
    </script>
</form>