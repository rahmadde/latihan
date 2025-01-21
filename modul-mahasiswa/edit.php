<?php
    include("../koneksi.php");

    $id = $_GET['id'];

    $ambil = "SELECT * FROM dosens WHERE id='$id'";

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
                    NIDN
                </td>
                <td>
                    <input type="text" name="nidn" id="" readonly value="<?= $data['nidn'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Nama Dosen
                </td>
                <td>
                    <input type="text" name="nama" id="" value="<?= $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Jabatan
                </td>
                <td>
                    <select name="jabatan" id="">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="email" name="email" id="" value="<?= $data['email'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    No Handphone
                </td>
                <td>
                    <input type="text" name="no_hp" id="" value="<?= $data['no_hp'] ?>">
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