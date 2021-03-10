<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator Sederhana by EkoNyontek23</title>
</head>
<body>
<form action="" method="POST">
 <table>
 <tr><td>Bilangan 1 </td>
 <td>:</td>
<td><input type="text" name="bilangan1"></td>
</tr>
 <tr>
<td>Aksi</td>
<td>:</td>
 <td><select name="pilih">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
 </select></td></tr>
 <tr>
 <td>Bilangan 2</td>
 <td> : </td>
 <td><input type="text" name="bilangan2"></td></tr>
 <tr><td></td>
 <td>:</td>
 <td><input type="submit" name="hitung" value="Hitung"></td>
 </tr><table></form>
</body>
</html>

<?php
 if(isset($_POST['hitung'])){
  $bil1 = $_POST['bilangan1'];
  $bil2 = $_POST['bilangan2'];
  $pilih = $_POST['pilih'];

  if($pilih){
   if($bil1 == "" || $bil2 == ""){
    ?> <script>alert("Nilai nya belum diisi!"); </script> <?php
   }elseif($pilih == '+'){
    $hasil = $bil1 + $bil2;
    echo "Hasil pertambahan $bil1 dengan $bil2 = ".$hasil;
   }elseif($pilih == '-'){
    $hasil = $bil1 - $bil2;
    echo "Hasil pengurangan $bil1 dengan $bil2 = ".$hasil;
   }elseif($pilih == '*'){
    $hasil = $bil1 * $bil2;
    echo "Hasil perkalian $bil1 dengan $bil2 = ".$hasil;
   }elseif($pilih == '/'){
    $hasil = $bil1 / $bil2;
    echo "Hasil pembagian $bil1 dengan $bil2 = ".$hasil;
   }
  }
 }

?>