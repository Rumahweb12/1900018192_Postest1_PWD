<?php
$filecounter="counterr.txt"; // terdapat sebuah variabel yang berisikan counterr,txt
$fl=fopen($filecounter,"r+"); //terdapat variabel fl untuk membuka file yang akan kita tuju yaitu file
//fungsi r+ sendiri untuk membaca dan menulis di awal file
$hit=fread($fl,filesize($filecounter));//terdapat variabel hit untuk membaca fl dan ada ukuran filenya yang
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");// disinih untuk menampilkan tabel dan terdapat uuran tabelnya terus ada bordder untuk menampilkan ketebalan garis ,dan align untuk menampilkan tabel agar ditengah
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");//untuk mengantur font dan wakrna nya
echo("Anda pengunjung yang ke:");//agar kalimat tersebut dapat tampil dengan perintah echo
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);//untuk menutup proses
$fl=fopen($filecounter,"w+");
$hit=$hit+1;// untuk fungsi agar ketika di refresh daftar pengunjung akan nambah secara otomatis, fungsi w+ untuk membaca,menulis,dan membuat file baru  
fwrite($fl,$hit,strlen($hit));//fungsi untuk menulis, strlen untuk panjangnya
fclose($fl);//terdpaat variabel close unuk menutup program
?>