<?php
    include("../koneksi.php");

    $id = $_POST['id'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $sunting = "UPDATE dosens SET nidn='$nidn', nama='$nama', jabatan='$jabatan', email='$email', no_hp='$no_hp' WHERE id='$id'";

    $proses = mysqli_query($koneksi, $sunting);

    header("location:index.php");
?>