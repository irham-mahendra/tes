<!DOCTYPE html>
<html>
<head>
	<title>tambah produk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<form name=form1 method="post" action="tambah_produk.php">
		<table class="table">
			<tr>
				<td>nama produk</td>
				<td><input type="text" name="nama_produk" autocomplete="off" required="required"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan" autocomplete="off" required="required"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga" autocomplete="off" required="required"></td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td><input type="text" name="jumlah" autocomplete="off" required="required"></td>
			</tr>
			
		</table>
		<br>
			<input type="submit" name="submit" value="tambah">
			<input type="reset" name="reset">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
	
	include("koneksi.php"); 
	$result = mysqli_query($koneksi,"insert into produk (id,nama_produk,keterangan,harga,jumlah)values('','$nama_produk','$keterangan','$harga','$jumlah')");
	echo "berhasil ditambahkan <a href=index.php>lihat disini</a>";
}
	?>
</body>
</html>