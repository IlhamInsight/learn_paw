<?php 

require_once 'koneksi.php';

$stmt = $DBH->prepare("SELECT * FROM Admin WHERE username = ?");

 ?>