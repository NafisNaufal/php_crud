<?php
require_once('function/helper.php');

session_start();

$page = isset($_GET['page']) ? ($_GET['page']) : false;
if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css' ?>">

    <title>PHP CRUD</title>
</head>

<body>
<nav>
        <label ><a href="<?= BASE_URL . 'dashboard.php?page=home' ?>" class="logo">CRUD</a></label>
        <label ><a class="navbar_list" href="<?= BASE_URL . 'process/process_logout.php' ?>">Logout</a></label>
        <label ><a class="navbar_list" href="<?= BASE_URL . 'dashboard.php?page=create' ?>">Add</a></label>
    </nav>

            <div class="content">
                <?php
                $filename = "page/$page.php";

                if (file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "404";
                }

                ?>
            </div>
</body>

</html>