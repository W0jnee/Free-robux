<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title> 
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="login">


    <form method="post" action="">

       <input placeholder="Login" type="text" name="login"><br>
        <input placeholder="Password" type="password" name="pass"><br>
        <input value="Zaloguj" type="submit">
    
    </form>
    </div>

 <?php
if(isset($_POST['login']) && isset($_POST['pass'])){
    echo "Login POST: ". $_POST['login']."<br>";
    $login = $_POST['login'];
    $password = $_POST['pass'];
    echo "Password POST: ". $_POST['pass']."<br>";
    $du = mysqli_connect("127.0.0.1","root","","users");
    $wynik = mysqli_query($du, "SELECT login, password FROM us WHERE login = '$login';");
    
    $record = mysqli_fetch_assoc($wynik);
    if(($_POST["login"] == $record["login"]) &&
    ($_POST["password"] == $record["pass"])){
        echo "Zalogowałeś się <br>";
        header('Location: index.html');
    }else{
        echo "Nie masz konta";
    }
}


    
    ?>
</body>
</html>