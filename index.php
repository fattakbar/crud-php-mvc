<?php

		include 'controller/control.php';

		$main = new controller();

		if(isset($_GET['t'])){
				$main->viewInsert();
		}else if(isset($_GET['u'])){
				$kode_barang = $_GET['u'];
				$main->viewUpdate($kode_barang);
		}else if(isset($_GET['d'])){
				$kode_barang = $_GET['d'];
				$main->hapus($kode_barang);
		}else{
				$main->index();
		}

?>
