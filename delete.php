<?php
	include("koneksi.php");
	
	//get id
	$id = $_GET['id'];

	//query hapus
	$result = mysqli_query($koneksi, "delete from produk where id=$id ");

	//after delete redirect to home
	header("Location:index.php");
?>