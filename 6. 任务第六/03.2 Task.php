<!DOCTYPE html>
<html>
    <head>
        <title>View Data Pegawai</title>
    </head>
    <body>
    <?php
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tmpl=$_POST['tmpl'];
        $tgll=$_POST['tgll'];
        $klm=$_POST['klm'];
        $pendidikan=$_POST['pendidikan'];
    ?>
    <table border=1>
    <tr>
    <td align="left">Nama</td>
    <td align="left"><?php echo $nama?></td>
    </tr>
    <tr>
    <td align="left">Alamat</td>
    <td align="left"><?php echo $alamat?></td>
    </tr>
    <tr>
    <td align="left">Tempat Lahir</td>
    <td align="left"><?php echo $tmpl?></td>
    </tr>
    <tr>
    <td align="left">Tanggal Lahir</td>
    <td align="left"><?php echo $tgll?></td>
    </tr>
    <tr>
    <td align="left">Jenis Kelamin</td>
    <td align="left"><?php echo $klm?></td>
    </tr>
    <tr>
    <td align="left">Pendidikan</td>
    <td align="left"><?php echo $pendidikan?></td>
    </tr>
    <tr align="center">
    <td colspan=2><a href="03.1 Task.php">Back To Home</a></td>
    </tr>
    </table>
    </body>
</html>
