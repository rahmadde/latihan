<?php
    include("../koneksi.php");

    $id = $_GET['xyz'];

    $hapus = "DELETE FROM mahasiswas WHERE nim='$id'";

    $proses = mysqli_query($koneksi, $hapus);

    header("location:index.php");
?>