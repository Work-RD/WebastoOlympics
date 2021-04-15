<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Webasto Olympics</title>
<link rel="stylesheet" href="../../CSS/styles.css">
</head>

<body>
<h1><img id=logoMare src="../../Imagini/WebastoLogo.png" width="640" height="240" alt="Logo"></h1>
<br>
<br>
<br>
<hr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Inscrieri";

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$departament =  $_POST['departament'];
$sport = null;

if(!empty($_POST['sport']))
{
    foreach($_POST['sport'] as $selected)
    {
        $sport = $sport. "$selected ";
    }
}

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Înscrieri (Nume, Prenume, Telefon, Email, Departament, Sport)
VALUES ('$nume', '$prenume', '$telefon', '$email', '$departament', '$sport')";

if ($conn->query($sql) === TRUE)
{
    echo "<h2>V-ați înscris cu succes.</h2>";
} else
    {
        echo "Nu s-a efectuat înscrierea: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

header( "refresh:2;url=../../Index.php");

?>
</body>
</html>