<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Webasto Olympics</title>
<style>
h1 {
  text-align:center;
  color: rgb(0,79,159);
  font-size:50px;
}
h2 {
  text-align:center;
  color: rgb(227,6,19);
  font-size:50px;
}
.wrong {
    height: 100px;
    width: 100px;
    top: 44%;
    left: 46.5%;
    background-color: white;
    position: absolute;
}
.wrong:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: "\274c";
    font-size: 100px; 
    color: rgb(227,6,19);
    line-height: 100px;
    text-align: center;
}
.check {
  position: absolute;
  left: 48.5%;
  top: 40%;
  transform: rotate(45deg);
  height: 96px;
  width: 48px;
  border-bottom: 28px solid green;
  border-right: 28px solid green;
}
</style>
</head>

<body>

<?php

$cont = $_POST['cont'];
$parola = $_POST['parola'];
$succes = false;

$conn = mysqli_connect("localhost", "root" ,"", "Inscrieri");
$conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');
if ($conn->connect_error)
{
    die("Connection failed:"). $conn->connect_error;
}

$sql = "SELECT * FROM Conturi";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if ($row["Cont"] == $cont && $row["Parolă"] == $parola)
        {
            $succes = true;
            break;
        }
    }
}

if ($succes)
{
    $cont = ucfirst($cont);
    echo "<br><br><h1>Salut, $cont !<br>Te-ai logat cu succes.</h1>";
    echo "<h3 class='check'></h3>";
    header( "refresh:1.5;url=Search.php");
}
else
{
    echo "<br><br><h2>Ai introdus un cont sau o parolă greșită.<br>Încearcă din nou.</h2>";
    echo "<h3 class='wrong'></h3>";
    header( "refresh:1.5;url=../../Index.php");
}
    
?>

</body>

</html>