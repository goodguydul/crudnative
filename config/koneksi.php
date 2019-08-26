<?php
$koneksi = new mysqli('localhost', 'root', '','crudnative');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>