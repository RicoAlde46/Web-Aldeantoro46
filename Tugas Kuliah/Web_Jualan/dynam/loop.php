<!DOCTYPE html>
<html>
<body>

<h2>Ini adalah Hasil Jumlah Loop</h2>
<p>
<?php  
$x = 1;
 
while($x <= $_POST["jml"]) {
  echo "The Number Is: $x <br>";
  $x++;
} 
?>  

</body>
</html>
