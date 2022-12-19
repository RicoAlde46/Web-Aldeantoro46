<?php
// // https://youtu.be/mNgOuUUp1I0?t=812

// //array
// //membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];

// //menampilkan array
// // versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// //menampilkan 1 elemen pada array
// echo $arr[0];


?>
<!DOCTYPE html>
<html>

<head>
    <title>Latihan Array</title>
    <style>
        .warna-baris {
            background-color: yellow;
        }

        .kotak {
            width: 40px;
            height: 40px;
            background-color: #BADA55;
            text-align: center;
            line-height: 40px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak :hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <!-- <h1>Selamat Datang, Admin!</h1> -->
    <?php $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
        [0, 00]
    ];
    ?>

    <?php foreach ($angka as $r) : ?>
        <?php foreach ($r as $a) : ?>
            <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>