<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/crudnative/config/koneksi.php';

if($_POST){
	$values = "";
	$myarray = array( $_POST);
	  	foreach ($myarray as $key => $value){
		    foreach ($value as $keyx => $val) {
		    	$values .=  $keyx ." = '".$val."',";
		    }
	}	
	$sql = "UPDATE profile SET ".rtrim($values,',')."WHERE id=".$_POST['id'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "DATA SUKSES DISIMPAN!";

	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM profile WHERE id=".$_GET['id']);

	if($query->num_rows > 0){
		$data = mysqli_fetch_object($query);
	}else{
		echo "data tidak tersedia";
		die();
	}
}

?>