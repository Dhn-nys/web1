<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Pegawai</title>
    </head>
    <body>
    <h1>Formulir Pegawai Negeri Konoha</h1>
    <form action="03.2 Task.php" method="post">
    <table border=1>
    <tr>
    <th colspan="2">Isi Data Di Bawah ini :</th>
    </tr>
    <tr>
    <th align="left">Nama</th>
    <th align="left"><input type="text" name="nama"></th>
    </tr>
    <tr>
    <th align="left">Alamat</th>
    <th align="left"><textarea name="alamat"></textarea></th>
    </tr>
    <tr>
    <th align="left">Tempat Lahir</th>
    <th align="left"><input type="text" name="tmpl"></th>
    </tr>
    <tr>
    <th align="left">Tanggal Lahir</th>
    <th align="left"><input type="date" name="tgll"></th>
    </tr>
    <tr>
    <th align="left">Jenis Kelamin</th>
    <th align="left"><input type="radio" name="klm" value="Laki-Laki">Laki-Laki<input type="radio" name="klm" value="Perempuan">Perempuan</th>
    </tr>
    <tr>
    <th align="left">Pendidikan</th>
    <th align="left"><select name="pendidikan">
                    <option>-Pilih-</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select></th>
    </tr>
    <tr align="center">
    <td colspan=2><input type="submit"value="Submit">
    <input type="reset" value="Cancel"></td>
    </tr>
    </table>
    </form>
    </body>
</html>
