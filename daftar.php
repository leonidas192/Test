<?php
// isi file daftar.php
 
// cara menangkap data GET
$nama1   = $_GET['nama'];
$TanggalLahir1 = $_GET['TanggalLahir'];
$email1  = $_GET['email'];
$pass1   = $_GET['pass'];
$umur1 = $_GET['umur'];
$jam1 = $_GET['jam'];
$color1 = $_GET['warna'];
$file1 = $_GET['file'];
$range1 = $_GET['range'];
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$op3 = $_GET['op3'];
$jenis = $_GET['jenis'];
 
// cara menangkap data POST
$nama2   = $_POST['nama'];
$TanggalLahir2 = $_POST['TanggalLahir'];
$email2  = $_POST['email'];
$pass2   = $_POST['pass'];
 
echo "Data yang dikirim dengan GET : <br/> Nama : $nama1<br>Tanggal Lahir = $TanggalLahir1 <br> Email : $email1<br> Pass=$pass1<br>Umur = $umur1<br>Jam = $jam1<br> Warna = $color1<br>File = $file1<br>Range = $range1<br>Option1 = $op1<br> Option2=$op2<br> Option3=$op3<br> Jenis=$jenis";
echo "<br/><br/>";
echo "Data yang dikirim dengan POST : <br/>$nama2, $TanggalLahir2, $email2, $pass2";
?>