<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <form action="formProses.php" method="POST">
    <table>
        <tr>
            <td><input type="text" name="first_name" id="first_name" placeholder="First name"></td>
            <td><input type="text" name="surname" id="surname" placeholder="Surname"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" name="email_or_number" id="email_or_number" placeholder="Mobile number or email address"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="password" name="new_pasword" id="new_pasword" placeholder="New Password"></td>
        </tr>
        <tr>
            <td>Date of birth</td>
        </tr>
            <tr>
                <td>
                    <select name="tanggallahir" class="tgl">
                        <?php
                            for ($i=1; $i<=31 ; $i++) {
                        ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                            }
                        ?>
                    </select>

                    <select name="bulan">
                    <?php
                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        foreach ($bulan as $value) {
                    ?>
                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                    <select name="tahun">
                    <?php
                        for ($i=1980; $i<=2021 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>       
        <tr>
            <td>Gender</td>
        </tr>
    </table>
    <div class="pilihan-jenis-kelamin">
        <div class="nama-jenis-kelamin">
            <input type="radio" name="jenis_kelamin" value="female" id="female"><label for="female">Female</label>
        </div>
        <div class="nama-jenis-kelamin">
            <input   type="radio" name="jenis_kelamin" value="male" id="male"><label for="male">Male</label>
        </div>
        <div class="nama-jenis-kelamin">
            <input  type="radio" name="jenis_kelamin" value="custom" id="custom"><label for="custom">Custom</label>
        </div>
    </div>
        <br>
        <button type="submit" name="sing_up" id="submit" class="sing_up">Sign Up</button>
    </form>
</body>
</html>