<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>

<form method="POST" action="">
<input type="text" name="liczba1" size="10">
<select name="znak">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="text" name="liczba2" size="10">
<input type="submit" value="Oblicz" name="submit">
</form>
<?php 


$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";
$date = NULL;
switch ($znak)
{
 case "+":
   $wynik = $liczba1+$liczba2;
   break;
 case "-":
   $wynik = $liczba1-$liczba2;
   break;
 case "*":
   $wynik = $liczba1*$liczba2;
   break;
 case "/":
   $wynik = $liczba1/$liczba2;
   break;
}
echo $liczba1, $znak ,$liczba2,("="),$wynik;

$conn = mysqli_connect("localhost","root","", "allegro");


if(isset($_POST['liczba2']))
{ 

$sql = "INSERT INTO allegro(nazwa) VALUES('$wynik')";
if (mysqli_query($conn, $sql)) {
  echo "New record has been added successfully !";
} else {
  echo "Error: " . $sql . ":-" . mysqli_error($conn);
}

}

echo "<br>";
var_dump($wynik);
echo " <br>";






//$conn = mysqli_query($baza, "SELECT id, nazwa, data FROM allegro /*WHERE id = '3'*/");
?>
</body>
</html>