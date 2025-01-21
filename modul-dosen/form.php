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
                    NIDN
                </td>
                <td>
                    <input type="text" name="nidn" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Nama Dosen
                </td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Jabatan
                </td>
                <td>
                    <select name="jabatan" id="">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
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
                    No Handphone
                </td>
                <td>
                    <input type="text" name="no_hp" id="">
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