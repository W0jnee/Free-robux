<?php

$nick = $_POST['nazwa'];
$haslo = $_POST['password'];

$conn = mysqli_connect("127.0.0.1","root","","uzytkownicy");

if(isset($nick) && isset($haslo)){
    $zaloguj = mysqli_query($conn, "SELECT nazwa,haslo FROM uzyt WHERE nazwa = '$nick';");
    $record = mysqli_fetch_assoc($zaloguj);

    if(($nick == $record["nazwa"]) && ($haslo == $record["haslo"])) {
        header("Location:main.html");
    }else{
        echo "spierdalaj żydzie jebany";
    }
}


?>
