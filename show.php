<?php

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat'];
$tanggal_lahir = $_POST['lahir'];
$hobi = $_POST['hobi'];
$citacita = $_POST['cita'];
$usia = $_POST['usia'];
$asal_sekolah = $_POST['sekolah'];

echo "Selamat datang, ini biodata anda.";
echo "</br>";
echo "</br>";
echo "Nama : " .$nama;
echo "</br>";
echo "Jenis Kelamin : " .$jenis_kelamin;
echo "</br>";
echo "Agama : " .$agama;
echo "</br>";
echo "Alamat : " .$alamat;
echo "</br>";
echo "TTL : " .$tempat_lahir. ", " .$tanggal_lahir;
echo "</br>";
echo "Hobi : " .$hobi;
echo "</br>";
echo "Cita-cita : " .$citacita;
echo "</br>";
echo "Usia : " .$usia;
echo "</br>";
echo "Asal Sekolah : " .$asal_sekolah;

?>