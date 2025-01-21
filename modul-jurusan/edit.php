<?php
    include("../koneksi.php");

    $id = $_GET['id'];

    $ambil = "SELECT * FROM jurusans WHERE id='$id'";

    $edit = mysqli_query($koneksi, $ambil);

    $data = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jurusan</title>
</head>
<body>
    <?php
        include_once '../navbar.php';
    ?>

    <h3>
        Edit Data Jurusan
    </h3>

    <form action="update.php" method="post">
        <table cellpadding="5px">
            <tr>
            <input type="hidden" name="id" value="<?=$data['id']?>">
                <td>
                    Kode Jurusan
                </td>
                <td>
                    <input type="text" name="kode" id="" readonly value="<?= $data['kode'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Nama Jurusan
                </td>
                <td>
                    <input type="text" name="jurusan" id="" value="<?= $data['jurusan'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">
                        Submit
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>