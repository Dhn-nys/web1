<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Mahasiswa</title>
    </head>
    <body bgcolor="green">
        <form action="01.2 FormInputMahasiswa.php" method="post">
            <b>Pengelolaan Data Mahasiswa</b>
            <br />
            <pre>
                Nama : <input type="text" name="nama" size="25" maxlength="50" />
                Alamat : <input type="text" name="alamat" size="25" maxlength="50" />
            </pre>
            Jenis Kelamin :
            <input type="radio" name="jeniskel" value="Laki-Laki" />Laki - Laki
            <input type="radio" name="jeniskel" value="Perempuan" />Perempuan

            <p>
                Pekerjaan :
                <select name="pekerjaan">
                    <option value="-Pilih-"></option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select>
