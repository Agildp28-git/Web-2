<?php
$nim = "A11.2020.02824";
$nama = 'Agil Dwi Putra';
$umur = 19;
$nilai = 95.6;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>