<?php
// function salam($waktu, $nama)
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Latihan Function</title>

    <style>
        .warna-baris {
            background-color: yellow;
        }
    </style>

</head>

<body>
    <h1>Selamat Datang, Admin!</h1>

    <h1><?= salam("Pagi", "ALDE "); ?></h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <!-- <tr class="warna-baris"> -->
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>

</html>