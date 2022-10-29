<?php
$mahasiswa = [
    ["Carolus Rico Aldeantoro", "205314011", "carolusricoaldeantoro@gmail.com", "Informatika"],
    ["Aldeantoro", "20534567", "aldeantoro@gmail.com", "Informatika"]
];

//Array Associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "NIM" => "205314011",
        "Nama" => "Rico Alde",
        "Email" => "carolusricoaldeantoro@gmail.com",
        "Prodi" => "Informatika",
        "Gambar" => "1.jpg"
    ],
    [
        "Nama" => " Alde",
        "NIM" => "205314023",
        "Email" => "carolus@gmail.com",
        "Prodi" => "Informatika",
        "Gambar" => "2.jpg"
    ]
];
// echo $mahasiswa[1]["Tugas"][2];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Selamat Datang, Admin!</h1>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["Gambar"]; ?>">
            </li>
            <li>Nama : <?php echo $mhs["Nama"]; ?></li>
            <li>NIM : <?php echo $mhs["NIM"]; ?></li>
            <li>Prodi : <?php echo $mhs["Prodi"]; ?></li>
            <li>Email : <?php echo $mhs["Email"]; ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>