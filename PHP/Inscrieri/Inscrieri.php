<!DOCTYPE html>
<html lang="ro">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Înscrieri</title>
<link rel="stylesheet" href="../../CSS/stylesInscrieri.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<h4><a id=a1 title="Acasa" href="../../Index.php"><img id=logoMic src="../../Imagini/Home.png" alt="Logo"></a></h4>

<form action="DateInscrieri.php" method="post">
        <div class="container">
            <h1 style="color:rgb(227,6,19)"><i class="fa fa-id-card-o"></i>Înscriere</h1>
            <p><b>Completează acest formular pentru înscriere.</b></p>
            <hr>

            <i class="fa fa-edit icon"></i>
            <label for="nume"><b>Nume</b></label>
            <input type="text" placeholder="Introdu Nume" name="nume" autocomplete="off" required>

            <i class="fa fa-edit icon"></i>
            <label for="prenume"><b>Prenume</b></label>
            <input type="text" placeholder="Introdu Prenume" name="prenume" autocomplete="off" required>

            <i class="fa fa-phone icon"></i>
            <label for="telefon"><b>Telefon</b></label>
            <input type="number" placeholder="Introdu Telefon" name="telefon" autocomplete="off" required>

            <i class="fa fa-envelope-o icon"></i>
            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Introdu E-mail" name="email" autocomplete="off">

            <i class="fa fa-sitemap icon"></i>
            <label for="departament"><b>Departament </b></label>
            <select required name="departament">
            <option value="">Alege Departament</option>
            <option value="Assembly line MASD">Assembly line MASD</option>
            <option value="Assembly line MPL1">Assembly line MPL1</option>
            <option value="Assembly line MPL2">Assembly line MPL2</option>
            <option value="Assembly line MPL3">Assembly line MPL3</option>
            <option value="Assembly line MPL4">Assembly line MPL4</option>
            <option value="Assembly line PAD (3rd line)">Assembly line PAD (3rd line)</option>
            <option value="Assembly line R2R-1">Assembly line R2R-1</option>
            <option value="Assembly line R2R-2">Assembly line R2R-2</option>
            <option value="Assembly line R2R-3">Assembly line R2R-3</option>
            <option value="Assembly line TSR1">Assembly line TSR1</option>
            <option value="Assembly line TSR2">Assembly line TSR2</option>
            <option value="Cutting">Cutting</option>
            <option value="Encapsulation">Encapsulation</option>
            <option value="Final Assembly line AU582 Module 2">Final Assembly line AU582 Module 2</option>
            <option value="Mizusumashi">Mizusumashi</option>
            <option value="Net Wind deflector Assembly">Net Wind deflector Assembly</option>
            <option value="Preassembly line Ambi G12">Preassembly line Ambi G12</option>
            <option value="Preassembly line R2R-1">Preassembly line R2R-1</option>
            <option value="Rollo Smart">Rollo Smart</option>
            <option value="Steel Band Rollo">Steel Band Rollo</option>
            <option value="Textile module rollo_I01 MCV">Textile module rollo_I01 MCV</option>
            <option value="Textile module rollo_MASD">Textile module rollo_MASD</option>
            <option value="Textile module_gluing">Textile module_gluing</option>
            <option value="Development(R&D)">Development(R&D)</option>
            <option value="Finance & Controlling">Finance & Controlling</option>
            <option value="Human Resources">Human Resources</option>
            <option value="IT Management">IT Management</option>
            <option value="Land & Buildings">Land & Buildings</option>
            <option value="Logistic">Logistic</option>
            <option value="Maintenance">Maintenance</option>
            <option value="Management">Management</option>
            <option value="Manufacturing Engineering">Manufacturing Engineering</option>
            <option value="Production Management">Production Management</option>
            <option value="Project Management">Project Management</option>
            <option value="Purchasing ASQ and SD">Purchasing ASQ and SD</option>
            <option value="Purchasing local">Purchasing local</option>
            <option value="Quality incoming supplier inspection">Quality incoming supplier inspection</option>
            <option value="Quality internal and customer">Quality internal and customer</option>
            <option value="Quality Resident Eng">Quality Resident Eng</option>
            <option value="Student trainees">Student trainees</option>
            <option value="Supplier Quality (plant)">Supplier Quality (plant)</option>
            <option value="Warehouse good in">Warehouse good in</option>
            <option value="Wharehouse goods out">Wharehouse goods out</option>
            <option value="WPS/ Kaizen Production">WPS/ Kaizen Production</option>
            </select>
            
            <hr>
            <label for="sport"><h2><b><span style="font-size:25px"><i class="fa fa-futbol-o icon"></i>Sport </b></h2></label>
            <input type="checkbox" name="sport[]" value="Minifotbal" required /><b>Minifotbal</b>
            <input type="checkbox" name="sport[]" value="Streetball" required /> <b>Streetball</b>
            <input type="checkbox" name="sport[]" value="Mountain Bike Race" required /> <b>Mountain Bike Race</b>
            <input type="checkbox" name="sport[]" value="Alergare" required /> <b>Alergare</b>
            <input type="checkbox" name="sport[]" value="Ping Pong" required /> <b>Ping pong</b>
            <input type="checkbox" name="sport[]" value="Victoria" required /> <b>Victoria</b>
            <input type="checkbox" name="sport[]" value="Badminton" required /> <b>Badminton</b>
            <input type="checkbox" name="sport[]" value="Volei" required /> <b>Volei</b>
            <input type="checkbox" name="sport[]" value="Play Station 4" required /> <b>Play Station 4</b>
            <input type="checkbox" name="sport[]" value="Zumba" required /> <b>Zumba</b>

            <hr>
            <p>Înregistrându-te ești de acord cu <a href="../../PDF/Termenii și condițiile.pdf" target="_blank">Termenii și Condițiile</a>.</p>

            <input type="submit" name="submit" class="registerbtn" value="Înscriere"/>
        </div>
</form>

<script>
$(function()
{
  var requiredCheckboxes = $('input:checkbox[required]');

  requiredCheckboxes.change(function()
  {

    if(requiredCheckboxes.is('input:checked'))
    {
      requiredCheckboxes.removeAttr('required');
    }

    else
    {
      requiredCheckboxes.attr('required', 'required');
    }
  });
});
</script>

</body>
</html>