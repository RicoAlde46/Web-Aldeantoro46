<html>
<body>
 <body bgcolor="black">
<font color="yellow">
<?php
echo "Welcome: "; 
echo $_POST["name"];
echo "<br>";
echo "Your Email Address Is: ";
echo $_POST["email"];
echo "<br>";
?>

<br>

<!DOCTYPE html>
<html>
<head>
<title>Page Title: Master Rico Aldeantoro</title>
</head>
<body>
<center><h2>Nama: Master Rico Aldeantoro</h2>
<p></p>
<h1>This is a Heading: Hello Rico</h1>
<p>This is a paragraph: Hello Alde</p>
<div>Carolus Rico Aldeantro</div></center>
</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="demo">JavaScript can change HTML content.</p>

<button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>Click Me!</button>
<a href="login.html">Back</a>

</body>
</html>

<!DOCTYPE html>
<html>
<body>
<h2>Input Formulir Loop</h2>
<p></p>
<form action="action.php" method="post">
Jumlah Loop  : <input type="text" name="jml"><br>
<input type="submit">
</form>

</body>
</html>

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


<!DOCTYPE html>
<html>
<body>

<h1>The select element</h1>

<p>The select element is used to create a drop-down list.</p>

<form action="action.php" method="post">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the 
server called "action_page.php".</p>

</body>
</html>

<!DOCTYPE html>
<html>
<body>
<h1>The s element</h1>

<p><s>Only 50 tickets left!</s></p>
<p>SOLD OUT!</p>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>The picture element</h1>

<p>Resize the browser window to load different images.</p>

<picture>
  <source media="(min-width:650px)" srcset="img_pink_flowers.jpg">
  <source media="(min-width:465px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Flowers" style="width:auto;">
</picture>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h1>The param element</h1>

<object data="horse.wav">
<param name="autoplay" value="true">
</object>

</body>
</html>

</font>