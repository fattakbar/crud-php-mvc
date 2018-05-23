<?php

		class model{

				function __construct(){
						$koneksi = mysql_connect("localhost", "root", "");
						$db = mysql_select_db("db_toko");
				}

				function execute($query){
						return mysql_query($query);
				}

				function selectAll(){
						$query = "select * from barang";
						return $this->execute($query);
				}

				function selectBarang($kode_barang){
					$query = "select * from barang where kode_barang='$kode_barang'";
					return $this->execute($query);
				}

				function insertBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok){
						$query = "insert into barang values ('$kode_barang', '$nama_barang', '$harga_jual', '$harga_beli', '$stok')";
						return $this->execute($query);
				}

				function updateBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok){
					$query = "update barang set kode_barang='$kode_barang', nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', stok='$stok' where kode_barang='$kode_barang'";
					return $this->execute($query);
				}

				function hapus($kode_barang){
					$query = "delete from barang where kode_barang='$kode_barang'";
					return $this->execute($query);
				}

				function fetch($var){
						return mysql_fetch_array($var);
				}

				function __destruct(){
				}

	}

?>
