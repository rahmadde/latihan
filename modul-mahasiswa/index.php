<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php
        include_once '../navbar.php';
    ?>

    <h3>
        Data Mahasiswa
    </h3>
    <a href="form.php">
        <button type="submit">Tambah Data</button>
    </a>
    <hr>
    <table border="1" width="1000px" cellpadding="5px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Dosen Wali</th>
            <th>Action</th>
        </tr>
        <?php
            include("../koneksi.php");

            $tampil = "SELECT *, mahasiswas.nama as nm_mhs, dosens.nama as nm_dosen FROM mahasiswas INNER JOIN jurusans on mahasiswas.jurusans_id=jurusans.id INNER JOIN dosens on mahasiswas.dosens_id=dosens.id";

            $proses = mysqli_query($koneksi, $tampil);

            $nomor = 1;

            foreach($proses as $data){
        ?>
        <tr>
            <th><?= $nomor++ ?></th>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nm_mhs'] ?></td>
            <td><?= $data['jk'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <td><?= $data['nm_dosen'] ?></td>
            <th>
                <a href="detail.php?id=<?= $data['id'] ?>">
                    <button type="submit">Detail</button>
                </a>
                <a href="edit.php?id=<?= $data['id'] ?>">
                    <button type="submit">Edit</button>
                </a>
                <a href='hapus.php?xyz=<?= $data['nim'] ?>' onclick="return confirm('Yakin ingin menghapus data ini?')">
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