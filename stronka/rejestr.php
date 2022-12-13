<?php

$nick = $_POST['nazwa'];
$mail = $_POST['email'];
$pass1 = $_POST['haslo1'];
$pass2 = $_POST['haslo2'];
$conn = mysqli_connect("127.0.0.1","root","","uzytkownicy");
$rejestr = "INSERT INTO `uzyt`(`nazwa`, `e-mail`, `haslo`) VALUES ($nick, $mail, $pass1);";


if ($pass1 == $pass2)
{
	if ($conn->query($rejestr))
	{
		header('Location: main.html');
    }
}else{
     echo("hasła są nie poprawne");
}



?>