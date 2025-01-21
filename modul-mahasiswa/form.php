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
        Tambah  Data Dosen
    </h3>

    <form action="proses.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    <input type="text" name="nim" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Nama Mahasiswa
                </td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Tempat Lahir
                </td>
                <td>
                    <input type="text" name="tempat">
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Lahir
                </td>
                <td>
                    <input type="date" name="tanggal" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <input type="radio" name="jk" id="" value="L">Laki-laki
                    <input type="radio" name="jk" id="" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>
                    Jurusan
                </td>
                <td>
                    <select name="jur" id="">
                        <?php
                            include('../koneksi.php');
                            $sql_jur = "SELECT * FROM jurusans";
                            $qry_jur = mysqli_query($koneksi,$sql_jur);
                            foreach($qry_jur as $data_jur){
                        ?>
                         <option value="<?=$data_jur['id']?>"><?=$data_jur['jurusan']?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Dosen Wali
                </td>
                <td>
                    <select name="dos" id="">
                        <?php
                            include("..koneksi/php");
                            $sql_dos = "SELECT * FROM dosens";
                            $qry_dos = mysqli_query($koneksi,$sql_dos);
                            foreach($qry_dos as $data_dos){
                        ?>
                        <option value="<?= $data_dos['id'] ?>"><?= $data_dos['nama'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Foto
                </td>
                <td>
                    <input type="file" name="foto" id="" accept="image/*">
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