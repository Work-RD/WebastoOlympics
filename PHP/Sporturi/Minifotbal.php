<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Minifotbal</title>
<link rel="stylesheet" href="../../CSS/stylesLink.css">
</head>

<body>

<h1><img id=logoMare src="../../Imagini/WebastoLogo.png" width="840" height="240" alt="Logo"></h1>
<img src="../../Imagini/CarLogo.png" class="logoCar" alt="Logo">

    <div style="float:left">
      <h4><a id=a1 title="Acasa" href="../../Index.php"><img id=logoMic src="../../Imagini/Home.png" alt="Logo"></a></h4>
    </div>

<h2>Minifotbal</h2>

<hr>

  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Premii'), scrollTab('Premii')"><span style=color:white;font-weight:bold;>Premii</span></button>
    <button class="tablinks" onclick="openTab(event, 'Participanti'), scrollTab('Participanti')"><span style=color:white;font-weight:bold;>Participanți</span></button>
    <button class="tablinks" onclick="openTab(event, 'Castigatori'), scrollTab('Castigatori')"><span style=color:white;font-weight:bold;>Câștigători</span></button>
    <button class="tablinks" onclick="openTab(event, 'Galerie'), scrollTab('Galerie')"><span style=color:white;font-weight:bold;>Galerie</span></button>
  </div>

  <div id="Premii" class="tabcontent">
    <h3>Premii</h3>
    <p>Locul I: <br><br>
    Locul II: <br><br>
    Locul III:
    </p>
  </div>

  <div id="Participanti" class="tabcontent">
    <h3>Participanți</h3>
    <?php
    $conn = mysqli_connect("localhost", "root" ,"", "Inscrieri");
    $conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');
    if ($conn->connect_error)
    {
        die("Connection failed:"). $conn->connect_error;
    }
    
    $sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Minifotbal%'";
    
    $result = $conn->query($sql);
    $count = 0;
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $count ++;
        }
        echo "<p>Total participanți minifotbal: $count</p>";
    } 
    else
    {
        echo "<p>Nici un participant.</p>";
    }
    ?>
  </div>

  <div id="Castigatori" class="tabcontent">
    <h3>Câștigători</h3>
    <div id="podium-box">
      <div class="step-container">
        <div>
          <div class="container">
            <img src="../../Imagini/ProfileLogo.png" alt="Avatar" class="image">
            <div class="overlay">Popescu</div>
          </div>
        </div>
        <div id="second-step" class="bg-blue step podium-number">
          2
        </div>
      </div>
      <div class="step-container">
        <div>
          <div class="container">
              <img src="../../Imagini/ProfileLogo.png" alt="Avatar" class="image">
              <div class="overlay">Călinescu</div>
            </div>
          </div>
        <div id="first-step" class="bg-blue step podium-number">
          1
        </div>
      </div>
      <div class="step-container">
        <div>
          <div class="container">
              <img src="../../Imagini/ProfileLogo.png" alt="Avatar" class="image">
              <div class="overlay">Petrescu</div>
            </div>
          </div>
        <div id="third-step" class="bg-blue step podium-number">
          3
        </div>
      </div>
    </div>
  </div>

  <div id="Galerie" class="tabcontent">
    <h3>Galerie</h3>

    <div class="row">
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo8.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo9.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img id="img-galerie" src="../../Imagini/GalerieLogo10.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
      </div>
    </div>

    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo3.jpg" style="width:100%">
        </div>
    
        <div class="mySlides">
          <div class="numbertext">4 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo4.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">5 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo5.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">6 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo6.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">7 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo7.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">8 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo8.jpg" style="width:100%">
        </div>
    
        <div class="mySlides">
          <div class="numbertext">9 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo9.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">10 / 10</div>
          <img id="img-modalMare" src="../../Imagini/GalerieLogo10.jpg" style="width:100%">
        </div>
    
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo1.jpg" style="width:100%" onclick="currentSlide(1), scrollModal()" alt="GalerieLogo1">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo2.jpg" style="width:100%" onclick="currentSlide(2), scrollModal()" alt="GalerieLogo2">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo3.jpg" style="width:100%" onclick="currentSlide(3), scrollModal()" alt="GalerieLogo3">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo4.jpg" style="width:100%" onclick="currentSlide(4), scrollModal()" alt="GalerieLogo4">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo5.jpg" style="width:100%" onclick="currentSlide(5), scrollModal()" alt="GalerieLogo5">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo6.jpg" style="width:100%" onclick="currentSlide(6), scrollModal()" alt="GalerieLogo6">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo7.jpg" style="width:100%" onclick="currentSlide(7), scrollModal()" alt="GalerieLogo7">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo8.jpg" style="width:100%" onclick="currentSlide(8), scrollModal()" alt="GalerieLogo8">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo9.jpg" style="width:100%" onclick="currentSlide(9), scrollModal()" alt="GalerieLogo9">
        </div>
        <div class="column">
          <img id="img-modalMic" class="demo cursor" src="../../Imagini/GalerieLogo10.jpg" style="width:100%" onclick="currentSlide(10), scrollModal()" alt="GalerieLogo10">
        </div>
      </div>
    </div>
  </div>

<script>
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

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function scrollTab(tabName) {
  var element = document.getElementById(tabName);
  element.scrollIntoView();
}

function scrollModal() {
  var element = document.getElementById("myModal");
  element.scrollTop = 0;
}

document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '37')
    {
      plusSlides(-1);
    }
    else if (e.keyCode == '39')
    {
      plusSlides(1);
    }
    else if (e.keyCode == '27') {
      closeModal();
    }

}
</script>

</body>

</html>