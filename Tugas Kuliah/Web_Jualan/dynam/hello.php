<!DOCTYPE html>
<html>
<head>
<title>Page Title: HELLO PHP</title>
</head>

<body>
<center>
<h1>Hello PHP</h1>
<p>Bagian ini dicetak oleh html</p> 

<?php 
echo "Bagian ini dicetak / echo oleh php<br>";

$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?>

<br></center>
<p>Bagian tersebut dicetak oleh HTML</p> 
<br>
<a href="index.html">Home</a>
</body>
</html>