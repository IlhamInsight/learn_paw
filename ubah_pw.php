<?php
// Ganti 'admin123' dengan password yang Anda mau
$password_admin = 'admin123';

// Generate hash
$hash_admin = password_hash($password_admin, PASSWORD_DEFAULT);

// Tampilkan di layar
echo "<h1>Password Asli: " . $password_admin . "<br></h1>";
echo "<h1>Hash untuk Database: " . $hash_admin . "<br></h1>";

echo "<hr>";


$password_siswa = 'siswa123';

// Generate hash
$hash_siswa = password_hash($password_siswa, PASSWORD_DEFAULT);

// Tampilkan di layar
echo "<h1>Password Asli: " . $password_siswa . "<br></h1>";
echo "<h1>Hash untuk Database: " . $hash_siswa . "<br></h1>";
