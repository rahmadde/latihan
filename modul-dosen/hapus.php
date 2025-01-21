<?php
    include("../koneksi.php");

    $id = $_GET['xyz'];

    $hapus = "DELETE FROM dosens WHERE id='$id'";

    $proses = mysqli_query($koneksi, $hapus);

    header("location:index.php");
?>