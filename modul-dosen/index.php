<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>
    <?php
        include_once '../navbar.php';
    ?>

    <h3>
        Data Dosen
    </h3>
    <a href="form.php">
        <button type="submit">Tambah Data</button>
    </a>
    <hr>
    <table border="1" width="1000px" cellpadding="5px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Action</th>
        </tr>
        <?php
            include("../koneksi.php");

            $tampil = "SELECT * FROM dosens";

            $proses = mysqli_query($koneksi, $tampil);

            $nomor = 1;

            foreach($proses as $data){
        ?>
        <tr>
            <th><?= $nomor++ ?></th>
            <td><?= $data['nidn'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jabatan'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['no_hp'] ?></td>
            <th>
                <a href="edit.php?id=<?= $data['id'] ?>">
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