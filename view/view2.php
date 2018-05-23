<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<table align="center" border="1">

	<h2 align="center">Data Barang</h2>

	<tr align="center">

		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<td>Harga Jual</td>
		<td>Harga Beli</td>
		<td>Stok</td>
		<td>Aksi</td>

	</tr>

	<?php

		while ($row = $this->model->fetch($data)) {
			echo "

					<tr>

						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td>
							<a href='index.php?u=$row[0]'>Update</a>
							<a href='index.php?d=$row[0]' onClick=\"return confirm('Apakah Anda Yakin Menghapus Data Ini?')\"\>Delete</a>
						</td>

					</tr>

				 ";
		}

	?>

</table>

<center>

	<a href="index.php?t=add">Tambah Data</a>

</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="style/js/jquery.easing.1.3.js"></script>

</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="style/js/bootstrap.min.js"></script>

<script src="style/js/script.js"></script>
