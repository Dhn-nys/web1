<!DOCTYPE html>
    <html>
        <head>
            <title>Input Komentar</title>
        </head>
        <body>
            <h3>BUKU TAMU</h3>
            <p>Komentar dan Saran Anda Sangat Kami Butuhkan.<br />
            Untuk Meningkatkan Kualitas Situs Kami.</p>
            <form action="04.2 Task.php" method="post">
                 Nama Anda : <input type="text" name="nama" size="50px" placeholder="Jhon Doe"><br />
                 Email Anda : <input type="email" name="email" size="50px" placeholder="jhondoe@email.com"><br />
                 Komentar : <textarea rows="px" cols="50px" name="komentar"></textarea>
                <br />
                <input type="reset" value="Batal"><input type="submit" value="Kirim">
            </form>
        </body>
    </html>