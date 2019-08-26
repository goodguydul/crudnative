<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/crudnative/config/koneksi.php';
if($_POST){
	$values = "";
	$myarray = array( $_POST);
	  	foreach ($myarray as $key => $value){
		    foreach ($value as $keyx => $val) {
		    	$values .=  "'".ucwords($val)."',";
		    }
	}	
	try {
		$sql = "INSERT INTO `profile`(`nama`, `tmpLahir`, `tgLahir`, `gender`, `goldar`, `alamat`, `rtrw`, `keldes`, `kec`, `agama`, `mariage`, `job`, `nation`, `exp`) VALUES (".rtrim($values,',').")";
		
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}else{
			echo "DATA SUKSES DISIMPAN!";
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
}
mysqli_close($koneksi);
?>