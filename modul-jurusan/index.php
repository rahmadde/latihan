<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
</head>
<body>
    <?php
        include_once '../navbar.php';
    ?>

    <h3>
        Data Jurusan
    </h3>
    <a href="form.php">
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
        <?php
            include("../koneksi.php");

            $tampil = "SELECT * FROM jurusans";

            $proses = mysqli_query($koneksi, $tampil);

            $nomor = 1;

            foreach($proses as $data){
        ?>
        <tr>
            <th><?= $nomor++ ?></th>
            <td><?= $data['kode'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <th>
                <a href=''>
                    <button type="submit">Edit</button>
                </a>
                <a href='hapus.php?xyz=<?= $data['id'] ?>' onclick="return confirm('Yakin ingin menghapus data ini?')">
                    <button type="submit">Hapus</button>
                </a>
            </th>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>