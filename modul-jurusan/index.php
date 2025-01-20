<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan

    </title>
</head>
<body>
    <?php
        include_once '../navbar.php';
    ?>

    <h3>
        Data Jurusan
    </h3>
    <a href="">
        <button type="submit">Tambah Data</button>
    </a>
    <hr>
    <table border="1" width="500px" cellpadding="5px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Jurusan</th>
            <th>Action</th>
        </tr>
        <tr">
            <th>1</th>
            <td>Kode</td>
            <td>Jurusan</td>
            <th>
                <a href="">
                    <button type="submit">Edit</button>
                    <button type="submit">Hapus</button>
                </a>
            </th>
        </tr>
    </table>
</body>
</html>