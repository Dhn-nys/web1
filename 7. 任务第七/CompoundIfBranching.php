<?php
$nilai = 90;
if(($nilai >=0) && ($nilai <50))
{$grade = "E";}
elseif(($nilai >=50) && ($nilai <60))
{$grade = "D";}
elseif(($nilai >=60) && ($nilai <75))
{$grade = "C";}
elseif(($nilai >=75) && ($nilai <85))
{$grade = "B";}
elseif(($nilai >=85) && ($nilai <100))
{$grade = "A";}
else
{$grade="Nilai diluar jangkuan";}
echo "Nilai Anda : $nilai, dikonversikan menjadi $grade";
?>
