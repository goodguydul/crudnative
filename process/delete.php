<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/crudnative/config/koneksi.php';
try {
	$sql = "DELETE FROM profile WHERE id=".$_GET['id'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "Data Berhasil Di Hapus";
?>