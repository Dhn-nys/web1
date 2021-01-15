<!-- Task 
1. Buat script menggunakan bahasa pemrograman PHP untuk menghitung volume kubus menggunakan fungsi operator aritmatika dan operator string dengan ketentuan ebagai berikut :
a. Panjang sisi kubus = 15cm
b. Hitung volume kubus <d>balok<d> dengan rumus = sisi x sisi x sisi
c. Buat variable teks1 yang berisi = "Belajar Menghitung" dan teks2 yang berisi = "Volume Kubus". Buat perintah untuk menggabungkan nilai dari variable teks1 dan teks2 menggunakan operator string.

Exampe : https://imgur.com/a/oS1Qp6z
End -->

<?php
# Answer

# Title text.
$tesk1="Belajar Menghitung ";
$tesk2="Volume Kubus";

# Value cobe.
$value=15;

# Title Answer.
$hasil = $tesk1.$tesk2;
echo "$hasil<br />";

# Value Answer.
$hasil = $value;
echo "Panjang Sisi Kubus = $hasil<br />";

#Volume Answer.
$hasil = $value*$value*$value;
echo "Volume Kubus = $hasil cm³";


?>
