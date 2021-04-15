<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Participanți</title>
<link rel="stylesheet" href="../../CSS/stylesLink.css">
<style>
button{
    background-color: transparent;
    width: 59px;
    height: 52px;
    border: 0;
}
</style>
</head>

<body>

    <div style="float:left">
        <h4><button onclick="goBack()" title="Înapoi"><img id=logoMic src="../../Imagini/Back.png" alt="Logo"></button></a></h4>
    </div>
    <div style="float:right">
        <h4><a id=a1 title="Acasa" href="../../Index.php"><img id=logoMic src="../../Imagini/Home.png" alt="Logo"></a></h4>
    </div>
    
<h2>Participanți</h2>

<hr>

<?php

$tabel = $_POST['searchTabel'];
$sport = $_POST['search'];
$conn = mysqli_connect("localhost", "root" ,"", "Inscrieri");
$conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');
if ($conn->connect_error)
{
    die("Connection failed:"). $conn->connect_error;
}

$sql = "SELECT * FROM Înscrieri WHERE $tabel LIKE '%$sport%' ORDER BY $tabel";

$result = $conn->query($sql);
$count = 0;

if ($result->num_rows > 0)
{
    echo "<table><tr><th>Nume</th><th>Prenume</th><th>Telefon</th><th>E-mail</th><th>Departament</th><th>Sport</th><th>Dată înregistrare</th></tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>". $row["Nume"]. "</td><td>". $row["Prenume"] . "</td><td>" . $row["Telefon"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Departament"] . "</td><td>". $row["Sport"] . "</td><td>". $row["Dată_Înregistrare"] . "</td></tr>";
        $count ++;
    }
    echo "</table>";
    echo "<p id=p1>Total participanți: <span style=color:rgb(227,6,19)>$count</p>";
} 
else
{
    echo "<h2>Nici un participant</h2>";
}
    
?>
  
<script>

function goBack()
{
  window.history.back();
}

</script>

</body>

</html>