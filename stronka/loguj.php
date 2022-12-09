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
    $conn = new mysqli("127.0.0.1","root","",//nazwa bazy danych);
    $sqli = "SELECT * FROM //nazwa_tabeli";
    
    if($conn->connect_error){
        die("Połaczenie nie udane");
    }
    echo "Połaczono pomyślnie z bazą danych;
    ?>
</body>
</html>
