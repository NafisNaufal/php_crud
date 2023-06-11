<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? ($_GET['status']) : false;
?>


<?php if ($process == 'success') : ?>
    <div style="background-color: green; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
        Data behasil dimasukan
    </div>

<?php endif; ?>
<?php if ($status == 'success') : ?>
    <div style="background-color: green; padding: 1em; color: white;border-radius: 20px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
        Data behasil dihapus
    </div>

<?php endif; ?>

<!-- ambil data -->
<?php

$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>
    <div class="siswa">
        
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>No. HP</th>
                    <th>email</th>
                    <th>Alamat</th>
                    <th>img</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $no = 1; ?>
                    <?php foreach ($pegawai as  $p) : ?>
                <tr>
                    <td>
                        <center><?= $no++; ?></center>
                    </td>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['nohp'] ?></td>
                    <td><?= $p['email'] ?></td>
                    <td><?= $p['alamat'] ?></td>
                    <td><img src="img/<?= $p['img']; ?>" alt="<?php echo $p['img']; ?>"></td>
                    <td style="text-align: center;">
                        <a href="<?= BASE_URL . 'dashboard.php?page=edit&id=' . $p['id'] ?>"> <button style=" width: 30px; height:30px; padding:0; background: green;"><img src="img/edit.png" alt="" style=" width: 20px; "></button></a>
                        <a href="<?= BASE_URL . 'process/process_delete.php?id=' . $p['id'] ?>"> <button style=" width: 30px; height:30px; padding:0; background: red;"><img src="img/trash.png" alt="" style=" width: 20px; "></button></a>
                        <a href=""> <button style=" width: 30px; height:30px; padding:0; background: black;"><img src="img/detail.png" alt="" style=" width: 20px; "></button></a>
                    </td>
                </tr>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>