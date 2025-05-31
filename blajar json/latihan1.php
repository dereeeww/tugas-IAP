<?php 

// $mahasiswa = [
//     "nama" => "Desy reolina sari",
//     "NIM"  => "2217020173",
//     "email" => "dreolinasari@gmail.com"
// ];

$dbh = new PDO('mysql:host=localhost;dbname=perusahaan', 'root', '');
$db = $dbh->prepare('SELECT * FROM target_gaji_karyawan');
$db->execute();
$users = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($users);
echo $data;

?>