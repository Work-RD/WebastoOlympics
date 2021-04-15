<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Webasto Olympics</title>
<link rel="stylesheet" href="../../CSS/stylesLink.css">
<style>
input[type=text]{
    color: white;
    width: 10%;
    padding: 16px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: rgb(0,79,159);
}
.registerbtn{
    background-color: green;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
    opacity: 1;
    color: white;
}
select{
  width: 10%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: rgb(0,79,159);
    color: white;
}
</style>
</head>

<body>

<h1><img id=logoMare src="../../Imagini/WebastoLogo.png" width="840" height="240" alt="Logo"></h1>
<img src="../../Imagini/CarLogo.png" class="logoCar" alt="Logo">

    <div style="float:left">
      <h4><a id=a1 title="Acasa" href="../../Index.php"><img id=logoMic src="../../Imagini/Home.png" alt="Logo"></a></h4>
    </div>

<h2>Caută</h2>

<hr>
<h3>Alege tabel și caută</h3>

<div style="float:right">
<a id=a1 title="Mesaje" href="../CHAT/Mesaje.php"><img id=logoMic src="../../Imagini/Mesaj.png" alt="Logo"></a>
</div>

<form action="ParticipantiSearch.php" method="post">
<select required name="searchTabel">
            <option value="">Alege</option>
            <option value="Nume">Nume</option>
            <option value="Prenume">Prenume</option>
            <option value="Telefon">Telefon</option>
            <option value="Email">E-mail</option>
            <option value="Departament">Departament</option>
            <option value="Sport">Sport</option>
            <option value="Dată_Înregistrare">Dată înregistrare</option>
</select>
<input type="text" name="search" autocomplete="off">
<input type="submit" name="submit" value="Caută" class="registerbtn"/>
</form>

</body>
</html>