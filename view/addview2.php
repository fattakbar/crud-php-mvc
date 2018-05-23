<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tambah Data</title>
    </head>
    <body>
        <form action="" method="POST"><br><br>
            <div align="center">
                <label >Kode Barang :</label>
                <input type="text" name="kode_barang" placeholder="Kode Barang" size="30">
            </div><br>
            <div align="center">
                <label >Nama Barang :</label>
                <input type="text" name="nama_barang" placeholder="Nama Barang" size="30">
            </div><br>
            <div align="center">
                <label >Harga Jual :</label>
                <input type="text" name="harga_jual" placeholder="Harga Jual" size="30">
            </div><br>
            <div align="center">
                <label >Harga Beli :</label>
                <input type="text" name="harga_beli" placeholder="Harga Beli" size="30">
            </div><br>
            <div align="center">
                <label >Stok :</label>
                <input type="text" name="stok" placeholder="Stok" size="30">
            </div><br>
            <div align="center">
                <input type="submit" name="simpan" value="Simpan">
            </div><br>
        </form>
    </body>
</html>


<?php

    if(isset($_POST['simpan'])){
		    $main = new controller();
		    $main->insert();
	  }

?>
