<?php
//ini adalah komentar
//ini juga komentar
/* ini juga komentar untuk semua*/
//Pertemuan 2 - PHP Dasar
// Sintaks PHP
//Standar Output
//echo,print
//print_r
//var_dump

echo "CAROLUS RICO ALDEANTORO ";
print_r(" CAROLUS RICO ALDEANTORO ");
var_dump(" CAROLUS RICO ALDEANTORO "); //String
echo 461;
echo " kosong ";

/*Penulisan sintaks PHP
1.PHP di dalam HTML
2.HTML didalam PHP

Variabel dan Tipe Data
Variabel
tidak boleh diawali deangan angka,tapi boleh mengandung angka
*/
// $nama = "ALDE";
// echo " Hallo, nama Saya $nama";

/*Operator 
arimatika
+ - * / %
*/
$x = 10;
$y = 20;
echo $x * $y;

//penggabung string /concatenation /concat
//.
$nama_depan = " Rico";
$nama_belakang = "Alde ";
echo $nama_depan . " " . $nama_belakang;

//Assignment
// =,+=,-=,*=,/=,%=,.=,!=
$x = 10;
$y += 20;
echo $x;

$nama = " Rico";
$nama .= " ";
$nama .= "Alde ";
echo $nama;

//Perbandingan
//<,>,<=,>=,==
var_dump(1 == "1");

//identitas
// ===,!==
var_dump(1 === "1");

//logika
//&&,||,!
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
$x = 30;
var_dump($x < 20 || $x % 2 == 0);


/*$nama = 'ALDE';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Hallo,Selamat Datang <?php echo "RICO"; ?></h1>
    <!-- echo "<h1>Hallo,Selamat Datang RICO</h1>" -->
    <h1>Hallo,Selamat Datang <?php echo $nama; ?></h1>
</body>

</html>
*/
