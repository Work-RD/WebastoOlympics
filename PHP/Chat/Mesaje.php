<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Mesaje</title>
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
    
<h2>Mesaje</h2>

<hr>

<?php

$file = explode("~", substr(file_get_contents("../../Text/Mesaje.txt"), 0, -5));

if (substr(file_get_contents("../../Text/Mesaje.txt"), 3) != "")
{
  echo "<table><tr><th>Nume</th><th>Prenume</th><th>Data</th><th>E-mail</th><th>Mesaj</th></tr>";
  foreach ( $file as $content )
  { 
    echo "<tr>";
  	$col = explode('|',$content);
  
    foreach($col as $data)
    {
  		echo "<td>". trim($data)."</td>";
  	}
    echo "</tr>";
  }
  echo "</table>";
}
else
{
  echo "<h2>Nici un mesaj</h2>";
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