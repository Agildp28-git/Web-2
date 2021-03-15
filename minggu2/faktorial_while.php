<?php

$jumlah = 1;
error_reporting(0);
$angka = $_POST["bil1"];
error_reporting(0);
if ($_POST["hitung"])
{
if ($angka<=0) {?>

alert("MasukkanDari Angka 1");

<h1>Mencari Nilai Faktorial</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<b><i>Masukkan Angka Disini</i></b> <input type="text" name="bil1">
<input type="submit" value="Hitung" name="hitung">
</form>

<?php
}
else
{
for ($bil=1; $bil<=$angka; $bil++)
{
$jumlah = $jumlah*$bil;
}
echo "<b>Nilai faktorial dari $angka adalah $jumlah</b>"; ?>
<br /><br />
<a href="https://github.com/Agildp28-git">Git Hub Agil</a>
<?php
}

}
else
{
?>
<h1>Mencari Nilai Faktorial</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<b><i>Masukkan Angka Disini</i></b> <input type="text" name="bil1">
<input type="submit" value="Hitung" name="hitung">
</form>
<?php } ?>