<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Webasto Olympics</title>
<link rel="stylesheet" href="CSS/styles.css?v=1.1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<?php setcookie("Vizitat", "1", time()+300); ?>
</head>

<body>

<h1><img id=logoMare src="Imagini/WebastoLogo.png" width="640" height="240" alt="Logo"></h1>
<img src="Imagini/CarLogo.png" class="logoCar" alt="Logo">

<br>
<p id="countdown"></p>
<br>

<div id="myModal" class="firework">
    <span class="close-firework cursor" onclick="closeModal()">&times;</span>
    <canvas id="canvas">Browser-ul nu suportă canvas.</canvas>
    <script src="JS/Fireworks.js"></script>
</div>

<div class="topnav">
  <div class="topnav-left">
    <h2><a href="PHP/Inscrieri/Inscrieri.php"><img id=logoMediu src="Imagini/InscrieriLogo.png" alt="Logo">Înscrieri</a></h2>
  </div>
  <div class="topnav-right">
    <h2><button id=cauta onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img id=logoMediu src="Imagini/SearchLogo.png" alt="Logo"><b>Caută</b></button></h2>
  </div>
  <h2 style="color:rgb(0,79,159)">Sporturi</h2>
</div>

<br>
<hr>

<div class="sporturi">
    <a href="PHP/Sporturi/Minifotbal.php"><img id=logoMic src="Imagini/MinifotbalLogo.png" alt="Logo">Minifotbal</a>
    <a href="PHP/Sporturi/Streetball.php"><img id=logoMic src="Imagini/StreetballLogo.png" alt="Logo">Streetball</a>
    <a href="PHP/Sporturi/MountainBikeRace.php"><img id=logoMic src="Imagini/MountainBikeRaceLogo.png" alt="Logo">Mountain Bike Race</a>
    <a href="PHP/Sporturi/Alergare.php"><img id=logoMic src="Imagini/AlergareLogo.png" alt="Logo">Alergare</a>
    <a href="PHP/Sporturi/PingPong.php"><img id=logoMic src="Imagini/PingPongLogo.png" alt="Logo">Ping Pong</a>
    <br>
    <a href="PHP/Sporturi/Victoria.php"><img id=logoMic src="Imagini/VictoriaLogo.png" alt="Logo">Victoria</a>
    <a href="PHP/Sporturi/Badminton.php"><img id=logoMic src="Imagini/BadmintonLogo.png" alt="Logo">Badminton</a>
    <a href="PHP/Sporturi/Volei.php"><img id=logoMic src="Imagini/VoleiLogo.png" alt="Logo">Volei</a>
    <a href="PHP/Sporturi/PlayStation4.php"><img id=logoMic src="Imagini/PlayStation4Logo.png" alt="Logo">Play Station 4</a>
    <a href="PHP/Sporturi/Zumba.php"><img id=logoMic src="Imagini/ZumbaLogo.png" alt="Logo">Zumba</a>
</div>

<div class="sporturi2">
<table>
  <tr>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/MinifotbalLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Minifotbal.php">Minifotbal</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/StreetballLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Streetball.php">Streetball</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/MountainBikeRaceLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/MountainBikeRace.php">Mountain Bike Race</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/AlergareLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Alergare.php">Alergare</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/PingPongLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/PingPong.php">Ping Pong</a></h5>
            </div>
          </div>
        </div>
    </td>
  </tr>
  <tr>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/VictoriaLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Victoria.php">Victoria</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/BadmintonLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Badminton.php">Badminton</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/VoleiLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Volei.php">Volei</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/PlayStation4Logo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/PlayStation4.php">Play Station 4</a></h5>
            </div>
          </div>
        </div>
    </td>
    <td><div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Imagini/ZumbaLogo.png" alt="Logo" style="width:100%">
            </div>
            <div class="flip-card-back">
              <h5><a href="PHP/Sporturi/Zumba.php">Zumba</a></h5>
            </div>
          </div>
        </div>
    </td>
  </tr>
</table>
</div>

<hr>

<h4>Informații generale: </h4>

  <div class="tab">
    <button class="tablinks" onmouseover="openTab(event, 'Despre'), scrollTab('Despre')"><span style=color:white;font-weight:bold;>Despre</span></button>
    <button class="tablinks" onmouseover="openTab(event, 'Program'), scrollTab('Program')"><span style=color:white;font-weight:bold;>Program</span></button>
    <button class="tablinks" onmouseover="openTab(event, 'Locatie'), scrollTab('Locatie')"><span style=color:white;font-weight:bold;>Locație</span></button>
    <button class="tablinks" onmouseover="openTab(event, 'Participanti'), scrollTab('Participanti')"><span style=color:white;font-weight:bold;>Participanți</span></button>
    <button class="tablinks" onmouseover="openTab(event, 'Prezentare'), scrollTab('Prezentare')"><span style=color:white;font-weight:bold;>Prezentare</span></button>
    <button class="tablinks" onmouseover="openTab(event, 'Contact'), scrollTab('Contact')"><span style=color:white;font-weight:bold;>Contact</span></button>
  </div>

  <div id="Despre" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times;</span>
    <h3>Despre</h3>
    <p>În luna Septembrie se va organiza Olimpiada de sport Webasto, iar pe această cale dorim să vă invităm cu drag să luați parte într-un mod activ la probele și concursurile menționate.<br>
    Fiecare sport va avea un arbitru pus la dispoziție, participanții vor beneficia de vouchere de mâncare și băutură, întocmai ca și la Webasto Day, iar la finalul evenimentului, caștigătorii vor fi premiați.<br>
    Vom reveni pe parcurs cu alte detalii și ulterioare modificări.</p>
  </div>

  <div id="Program" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times;</span>
    <h3>Program</h3>
    <p>Probele și concursurile se vor desfășura în perioada 14-15 Septembrie 2019.</p> 
  </div>

  <div id="Locatie" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times;</span>
    <h3>Locație</h3>
    <p>Probele și concursurile se vor desfășura pe terenurile de sport “Liga Desavoia” (Bendea).</p>
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="100%" src="https://maps.google.com/maps?q=serie%20a%20club%20arad&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>
  </div>
  
  <div id="Participanti" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times;</span>
    <div id='myChart'></div>
  </div>

  <div id="Prezentare" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times;</span>
    <h3>Prezentare Olimpiadă</h3>
     <video  width="640" height="360" controls autoplay muted loop>
     <source src="Video/trailer.mp4" type="video/mp4">
     </video>
  </div>

  <div id="Contact" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times;</span>
    <h3>Contact</h3>
    <p>Cei care doresc să se înscrie la concursuri, sunt rugați să o facă până în data de 31.08.2019 la oricare dintre membrii echipei ONE Webasto – Andreia Gyorgy, Ciprian Herțe, Alin Avram.<br>
    Pentru detalii referitoare la următoarele activități, vă rugăm să luați legătura cu : Dan Groza - Minifotbal; Raul Mocuta - Mountain Bike Race; Ernest Pager – Alergare.</p>
    <button class="open-button" onclick="openForm()">Chat</button>
    <br>

    <div class="chat-popup" id="myForm">
      <form action="PHP/Chat/DateMesaj.php" class="form-container" method="post">
        <h3 style=color:white;font-weight:bold;>Chat</h3>

        <label for="nume"><span style=color:white;font-weight:bold;>Nume</span></label>
        <input placeholder="Introdu nume..." name="nume" autocomplete="off"></textarea>

        <label for="prenume"><span style=color:white;font-weight:bold;>Prenume</span></label>
        <input placeholder="Introdu prenume..." name="prenume" autocomplete="off"></textarea>

        <label for="email"><span style=color:white;font-weight:bold;>E-mail</span></label>
        <input placeholder="Introdu e-mail..." name="email" autocomplete="off"></textarea>

        <label for="mesaj"><span style=color:white;font-weight:bold;>Mesaj</span></label>
        <textarea placeholder="Introdu mesaj..." name="mesaj"></textarea>
            
        <button type="submit" class="btn">Trimite</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Închide</button>
      </form>
    </div>
  </div>

  <div id="id01" class="modal">
  
    <form class="modal-content animate" action="PHP/Participanti/LogOnDataBase.php" name="login" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Imagini/WebastoLogo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <i class="fa fa-user icon"></i>
      <label for="cont"><b style="color:rgb(0,79,159)">Cont</b></label>
      <input type="text" placeholder="Introdu cont" name="cont" autocomplete="off" required>

      <i class="fa fa-key icon"></i>
      <label for="parola"><b style="color:rgb(0,79,159)">Parolă</b></label>
      <input type="password" placeholder="Introdu parolă" name="parola" required>

      <input type="submit" class="registerbtn" value="Conectează-te"/>
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ieșire</button>
    </div>
    </form>
  </div>

<iframe id="iframe" allow="autoplay" style="display:none"></iframe>
<audio id="myAudio" autoplay muted loop>
<source src="Audio/firework.mp3" type="audio/mpeg">
</audio>

<script>

var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

if (isChrome)
{
  document.getElementById("iframe").src = "Audio/silence.mp3";
}

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var countDownDate = new Date("Sep 15, 2019 00:00:00").getTime();

var x = setInterval(function()
{
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    document.getElementById("countdown").innerHTML ="<span style=font-family:Century>Zile rămase: </span>" + days + " <span style=color:rgb(227,6,19);font-family:Century>z</span> " + hours + " <span style=color:rgb(227,6,19);font-family:Century>o</span> " + minutes + " <span style=color:rgb(227,6,19);font-family:Century>m</span> " + seconds + " <span style=color:rgb(227,6,19);font-family:Century>s</span> ";
        
    if (distance < 0) 
        {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "<span style=font-family:Century>Olimpiada a început!</span>";
            if (<?php if (empty($_COOKIE['Vizitat'])) {echo "1";} else {echo "0";} ?>)
            {
              document.getElementById("myModal").style.display = "block";
              disableMute();
            }
        }
}
, 1);

function openTab(event, tabName)
{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++)
        {
            tabcontent[i].style.display = "none";
        }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++)
        {
            tablinks[i].className = tablinks[i].className.replace("active", "");
        }
    document.getElementById(tabName).style.display = "block";
    event.currentTarget.className += "active";
}
document.getElementById("defaultOpen").click();

function scrollTab(tabName) {
  var element = document.getElementById(tabName);
  element.scrollIntoView();
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
  pauseAudio();
}

function pauseAudio() { 
  document.getElementById("myAudio").pause(); 
} 

function disableMute() { 
  document.getElementById("myAudio").muted = false;
} 

</script>

<?php include 'PHP/Chart/PieChart.php'; ?>

</body>

</html>