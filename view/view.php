<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>Data Barang</title>

				<link href="style/css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" href="style/style.css">

		</head>
		<body>
				<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container-fluid">
								<div class="navbar-header">
										<a class="navbar-brand" href="index.php">
												<i class="glyphicon glyphicon-check"></i>
													Aplikasi CRUD PHP Menggunakan Metode MVC
										</a>
								</div>
						</div>
				</nav>

				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="page-header">
												<h4>
														<i class="glyphicon glyphicon-user"></i> Data Barang
														<a class="btn btn-success pull-right" href="index.php?t=add" data-target="#modal_tambah" data-toggle="modal">
																<i class="glyphicon glyphicon-plus"></i> Tambah
														</a>
												</h4>
										</div>
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Data Barang</h3>
												</div>
												<div class="panel-body">
														<table class="table table-striped table-hover">
																<thead>
																		<tr>
																				<th>Kode Barang</th>
																				<th>Nama Barang</th>
																				<th>Harga Jual</th>
																				<th>Harga Beli</th>
																				<th>Stok Barang</th>
																				<th>Aksi</th>
																		</tr>
																</thead>

																<?php

																		while($row = $this->model->fetch($data)){
																				echo "

																								<tr>
																										<td>$row[0]</td>
																										<td>$row[1]</td>
																										<td>$row[2]</td>
																										<td>$row[3]</td>
																										<td>$row[4]</td>
																										<td>
																												<div class=''>
																														<a href='index.php?u=$row[0]' data-toggle='tooltip' data-placement='top' title='Update' style='margin-right:5px' class='btn btn-success btn-sm open_modal'>
																																<i class='glyphicon glyphicon-edit'></i>
																														</a>
																														<a href='index.php?d=$row[0]' onClick=\"return confirm('Apakah Anda Yakin Menghapus Data Ini?')\" data-toggle='tooltip' data-placement='top' title='Delete' style='margin-right:5px' class='btn btn-danger btn-sm'>
																																<i class='glyphicon glyphicon-trash'></i>
																														</a>
																												</div>
																										</td>
																								</tr>

																						 ";
																		}

																 ?>

														</table>
												</div>
										</div>
								</div>
						</div>
				</div>

				<footer class="footer">
		      <div class="container-fluid">
		        <p class="text-muted pull-left">&copy; 2017 <a href="https://www.linkedin.com/in/fattahul-akbar-80a109139/" target="_blank">Fattahul Akbar</a></p>
		      </div>
		    </footer>
		</body>
</html>
