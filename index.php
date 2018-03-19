<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "belajar";


$conn = new mysqli($servername, $username, $password, $db);




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="peach">
	<h1 align="center">
		Daftar Mahasiswa Universitas Potensi Utama
	</h1>
	<table border="2" align="center" bgcolor="pink">
	<tr>
		<th height="30px">ID</th>
		<th height="30px">Nama</th>
		<th height="30px">Kelas</th>
		<th height="30px">Jurusan</th>
		<th height="30px">No Hp</th>
	</tr>
<div>

<center>
<form action="list.php" method="get">
<div>
	<input type="text" placeholder="Masukkan Kata Kunci" name="cari">
	<input type="submit">

</div>
</form>
</center>
<?php
$sql="select*from mahasiswa";
$hasil = $conn->query($sql);
while($row = $hasil->fetch_assoc())
{
 ?>
	<tr>
	
	<td height="30px">
<?php echo $row["id"]; ?>
	</td>

	<td height="30px">
<?php echo $row["nama"]; ?>
	</td>

	<td height="30px">
<?php echo $row["kelas"]; ?>
	</td>

	<td height="30px">
<?php echo $row["jurusan"]; ?>		
	</td>

	<td height="30px">
<?php echo $row["no_hp"]; ?>
	</td>

	</tr>
		
</div>
<?php } ?>

</table></body>
</html>
