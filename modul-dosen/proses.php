<?php
    include("../koneksi.php");

    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $simpan = "INSERT INTO dosens (nidn, nama, jabatan, email, no_hp) VALUES ('$nidn', '$nama', '$jabatan', '$email', '$no_hp')";

    $proses = mysqli_query($koneksi, $simpan);
?>

<script>
    document.location="index.php";
</script>