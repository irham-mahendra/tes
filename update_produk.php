<?php
	include("koneksi.php");
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$result = mysqli_query($koneksi, "update produk set id='$id', nama_produk='$nama_produk',
		keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where id=$id ");
		
		header("Location: index.php");
	}
?>

<?php
	$id = $_GET['id'];

	$result = mysqli_query($koneksi,"select * from produk where id=$id");

	while ($data_produk = mysqli_fetch_array($result)) {
		$id = $data_produk ['id'];
		$nama_produk = $data_produk['nama_produk'];
		$keterangan = $data_produk['keterangan'];
		$harga = $data_produk['harga'];
		$jumlah = $data_produk['jumlah'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update produk</title>
</head>
<body>
<form name="update_produk" method="post" action="update_produk.php">
		<table >
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?> autocomplete="off"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value=<?php echo $keterangan;?> autocomplete="off"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" required="required" value=<?php echo $harga;?> autocomplete="off"></td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td><input type="text" name="jumlah" required="required" value=<?php echo $jumlah;?> autocomplete="off"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>	
	</form>
	<a href="index.php">kembali</a>

</body>
</html>