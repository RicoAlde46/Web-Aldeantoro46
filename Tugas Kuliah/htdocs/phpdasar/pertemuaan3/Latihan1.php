<?php
//video pas awal
//Pengulangan
//for
//while
//do.. while
//foreach : pengulangan khusus array

// for ($i = 0; $i < 5; $i++)
//     echo " Hello World!!! <br>";

// $i = 0;
// while ($i < 5) {
//     echo " Hello World!!! <br>";
//     $i++;
// }

// $i = 0;
// do {
//     echo " Hello World!!! <br>";
//     $i++;
// } while ($i < 5);
//========================================

//video pas tengah" https://youtu.be/9gpAJPWD-xI?t=895
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <title>Latihan 1</title>
// </head>
// <body>

//     <table border="1" cellpadding="10" cellspacing="0">
// <tr>
//             <td>1</td>
//             <td>2</td>
//             <td>3</td>
//             <td>4</td>
//             <td>5</td>
//         </tr>
//         <tr>
//             <td>1</td>
//             <td>2</td>
//             <td>3</td>
//             <td>4</td>
//             <td>5</td>
//         </tr>
//     </table>

// </body>
// </html>
// =====================================================

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <title>Latihan 1</title>
// </head>
// <body>
//     <table border="1" cellpadding="10" cellspacing="0">

//         <?php
//         for ($i = 1; $i <= 5; $i++) {
//             echo "<tr>";
//             for ($j = 1; $j <= 5; $j++) {
//                 echo "<td>$i,$j</td>";
//             }
//             echo "</tr>";
//         }
//         ?tnda>OKEY
//     </table>

// </body>
// </html>
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>

    <style>
        .warna-baris {
            background-color: yellow;
        }
    </style>
</head>

<body>
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