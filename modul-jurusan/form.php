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
        Tambah  Data Jurusan
    </h3>

    <form action="proses.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td>
                    Kode Jurusan
                </td>
                <td>
                    <input type="text" name="kode" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Nama Jurusan
                </td>
                <td>
                    <input type="text" name="jurusan" id="">
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