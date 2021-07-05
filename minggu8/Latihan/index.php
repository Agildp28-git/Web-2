<html>
<head>
	<title>Latihan 7 Minggu 8/title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Selamat datang Latihan 7 Minggu 8 </h1>
 
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="username .." required="required">
 
			<label>Password</label>
			<input type="Password" name="Password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>username dan Password tidak sesuai !</div>";
		}
	}
	?>
			<br/>
			<br/>
		</form>
	</div>
</body>
</html>