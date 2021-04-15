<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Webasto Olympics</title>
<link rel="stylesheet" href="../../CSS/stylesMesaj.css">
</head>

<body>

<h2 id="check"></h2>

<h1 id="trimitere">Mesajul se trimite</h1>

<div id="cssload-wrapper">
	<div id="cssload-border">
		<div id="cssload-whitespace">
			<div id="cssload-line">
			</div>
		</div>
	</div>
</div>
    
<?php
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];
$mesaje = fopen("../../Text/Mesaje.txt", 'a');

$array = array("|","~");
$nume = str_ireplace($array, '', $nume);
$prenume = str_ireplace($array, '', $prenume);
$email = str_ireplace($array, '', $email);
$mesaj = str_ireplace($array, '', $mesaj);

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$email = null; 
}

if($mesaj && $nume && $prenume && $email)
{
	fwrite($mesaje, "");
	$data =filemtime("../../Text/Mesaje.txt");
	$data =date ("d.m.Y H:i:s", strtotime("1 hour"));
	clearstatcache();
	fwrite($mesaje, $nume . " | " . $prenume . " | ");
	fwrite($mesaje, $data . " | ");
	fwrite($mesaje, $email . " |\r\n");
	fwrite($mesaje, $mesaj . " ~\r\n\r\n");
}

fclose($mesaje); 

if($mesaj && $nume && $prenume && $email)
{ 
    echo "<script type='text/javascript' src=../../JS/MesajTrimis.js></script>";
}
else
{
    echo "<script type='text/javascript' src=../../JS/MesajError.js></script>";
}


header( "refresh:4;url=../../Index.php");
?>

</body>
</html>