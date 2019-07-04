<?php
echo "<head><title>GUEST BOOK</title></head>";

$fp = fopen("tamu.txt", "a+");
$nama		= $_POST['nama'];
$tanggal	= $_POST['tanggal'];
$jk			= $_POST['jk'];
$alamat		= $_POST['alamat'];
$agama		= $_POST['agama'];

fputs($fp, "$nama|$tanggal|$jk|$alamat|$agama\n");
fclose($fp);
if($fp!=0){
	header("location: lihat_tamu.php");
}
else{
	echo "Data Tidak Masuk !!!";
}
//echo "<table>
//<tr><td>Nama</td><td>:</td><td>$nama</td><tr>
//<tr><td>Password</td><td>:</td><td>$pass</td><tr>
//<tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td><tr>
//<tr><td>Alamat</td><td>:</td><td>$alamat</td><tr>
//<tr><td>Asal Kota</td><td>:</td><td>$asal</td><tr>
//<table>";



?>