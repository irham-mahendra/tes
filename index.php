<!DOCTYPE html>
<html>
<head>
	<title>produk arkademy</title>
	<?php include("koneksi.php");
	$result =mysqli_query($koneksi, "select * from produk order by id desc"); ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<table border ="1" cellspacing="0" width="50%" class="table">
		<tr>
			<th colspan="6" height="20px" class="th">Produk Arkademy</th>
		</tr>
			<tr>
				<td>id</td>
				<td>nama produk</td>
				<td>keterangan</td>
				<td>harga</td>
				<td>jumlah</td>
				<td>aksi</td>
			</tr>
			<?php while ($data_produk = mysqli_fetch_array($result)) {
				
			
			echo"<tr>";
					echo "<td>".$data_produk['id']."</td>";
					echo "<td>".$data_produk['nama_produk']."</td>";
					echo "<td>".$data_produk['keterangan']."</td>";
					echo "<td>".$data_produk['harga']."</td>";
					echo "<td>".$data_produk['jumlah']."</td>";
					echo "<td> <a href='update_produk.php?id=$data_produk[id]'>edit</a> <a href='delete.php?id=$data_produk[id]'> hapus</a> </td>";
			echo"</tr>";
		}
			?>
			<tr>
				<td colspan="6" class="td">klik <a href="tambah_produk.php">disini</a> untuk menambah produk</td>
			</tr>
		</table>
	
		
</body>
</html>