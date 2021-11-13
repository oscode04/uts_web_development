<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function konversi_tgl($tgl){
            list($thn, $bln, $tgl) = explode('-', $tgl);
            return $tgl . '-' . $bln . '-' . $thn;
        }

        if( isset($_POST['sing_up']) ) { 
            $first_name            = isset($_POST['first_name']) ? $_POST['first_name'] : '';
            $surname           = isset($_POST['surname']) ? $_POST['surname'] : '';
            $email_or_number            = isset($_POST['email_or_number']) ? $_POST['email_or_number'] : '';
            $new_pasword         = isset($_POST['new_pasword']) ? $_POST['new_pasword'] : '';
            $tanggallahir          = isset($_POST['tanggallahir']) ? $_POST['tanggallahir'] : '';
            $bulan          = isset($_POST['bulan']) ? $_POST['bulan'] : '';
            $tahun           = isset($_POST['tahun']) ? $_POST['tahun'] : '';
            $jenis_kelamin          = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
        }
    ?>

    <h1>Berhasil Menambah User</h1>

    <table>
        <tr>
            <td>
                First name 
            </td>
            <td>
               : <?= $first_name ?>
            </td>
        </tr>
        <tr>
            <td>
                Surname
            </td>
            <td>
               : <?= $surname ?>
            </td>
        </tr>
        <tr>
            <td>
                Email or Number
            </td>
            <td>
               : <?= $email_or_number ?>
            </td>
        </tr>
        <tr>
            <td>
                New Password
            </td>
            <td>
               : <?= $new_pasword ?>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Lahir
            </td>
            <td>
                : <?= $tanggallahir ?> <?= $bulan ?> <?= $tahun ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
               : <?= $jenis_kelamin ?>
            </td>
        </tr>
    </table>

</body>
</html>