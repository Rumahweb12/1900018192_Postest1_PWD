<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt","a+");//terdpat variabel untuk membuka file
//a+untuk membaca dan menulis, mempertahan kan konten file diakhirfile
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");//mengiput data
fclose($fp);
//terdapat echo untuk mencetak dan menampilkan kalimat dibawah
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=index.html> Isi Buku Tamu </a><br>";//a href berfungsi ketika dimklik maka akan menuju halaman selanjutnya yang ajan dituju
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";


  ?>