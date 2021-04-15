<?php
echo "<br>";
echo "<p style='position: relative; bottom: 0; width: 100%; text-align: right; font-size: 15px; color: rgb(0,79,159); font-family: Century;'>&copy; Draia Radu - 2019</p>";

$conn = mysqli_connect("localhost", "root" ,"", "Inscrieri");
$conn->query('SET character_set_client="utf8",character_set_connection="utf8",character_set_results="utf8";');
if ($conn->connect_error)
{
    die("Connection failed:"). $conn->connect_error;
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Minifotbal%'";

$result = $conn->query($sql);
$minifotbal = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $minifotbal ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Streetball%'";

$result = $conn->query($sql);
$streetball = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $streetball ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Mountain Bike Race%'";

$result = $conn->query($sql);
$mountainbikerace = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $mountainbikerace ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Alergare%'";

$result = $conn->query($sql);
$alergare = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $alergare ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Ping Pong%'";

$result = $conn->query($sql);
$pingpong = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $pingpong ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Victoria%'";

$result = $conn->query($sql);
$victoria = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $victoria ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Badminton%'";

$result = $conn->query($sql);
$badminton = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $badminton ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Volei%'";

$result = $conn->query($sql);
$volei = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $volei ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Play Station 4%'";

$result = $conn->query($sql);
$playstation4 = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $playstation4 ++;
    }
}

$sql = "SELECT * FROM Înscrieri WHERE Sport LIKE '%Zumba%'";

$result = $conn->query($sql);
$zumba = 0;

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $zumba ++;
    }
}

?>

<script>

var minifotbal = <?php echo $minifotbal ?>;
var streetball = <?php echo $streetball ?>;
var mountainbikerace = <?php echo $mountainbikerace ?>;
var alergare = <?php echo $alergare ?>;
var pingpong = <?php echo $pingpong ?>;
var victoria = <?php echo $victoria ?>;
var badminton = <?php echo $badminton ?>;
var volei = <?php echo $volei ?>;
var playstation4 = <?php echo $playstation4 ?>;
var zumba = <?php echo $zumba ?>;

var myConfig = {
  "type":"pie",
  "background-color":"white",
  "title":{
    "text":"Participanți"
  },
  "scale-r":{
    "ref-angle":270,
  },
  "legend":{
    "background-color":"white",
    "x":"75%",
    "y":"25%",
    "border-width":1,
    "border-color":"black",
    "border-radius":"5px",
    "header":{
      "text":"Legendă",
      "font-family":"Century",
      "font-size":12,
      "font-color":"black",
      "font-weight":"normal"
    },
    "marker":{
      "type":"circle"
    },
    "toggle-action":"remove",
    "minimize":true,
    "icon":{
      "line-color":"black"
    },
    "max-items":10,
    "overflow":"scroll"
  },
  "plotarea":{
    "margin-right":"30%",
    "margin-top":"15%"
  },
  "plot":{
    "animation":{
 	    "on-legend-toggle": true,
 	    "effect": 5,
 	    "method": 1,
 	    "sequence": 1,
 	    "speed": 1
    },
    "value-box":{
      "text":'%t',
      "font-size":12,
      "font-family":"Century",
      "font-weight":"normal",
          "placement":"out",
          "font-color":"black",
    },
    "tooltip":{
      "text":"%t: %v (%npv%)",
      "font-color":"black",
      "font-family":"Century",
      "text-alpha":1,
      "background-color":"white",
      "alpha":0.7,
      "border-width":1,
      "border-color":"#cccccc",
      "line-style":"dotted",
      "border-radius":"10px",
      "padding":"10%",
      "placement":"node:center"
    },
    "border-width":1,
    "border-color":"#cccccc",
    "line-style":"dotted"
  },
  "series":[
    {
      "values":[minifotbal],
      "background-color":"#cc0000",
      "text":"Minifotbal"
    },
    {
      "values":[streetball],
      "background-color":"#ff3300",
      "text":"Streetball"
    },
    {
      "values":[mountainbikerace],
      "background-color":"#ff6600",
      "text":"Mountain Bike Race"
    },
    {
      "values":[alergare],
      "background-color":"#ff9933",
      "text":"Alergare"
    },
    {
      "values":[pingpong],
      "background-color":"#ffcc00",
      "text":"Ping Pong"
    },
    {
      "values":[victoria],
      "background-color":"#ace600",
      "text":"Victoria"
    },
    {
      "values":[badminton],
      "background-color":"#88cc00",
      "text":"Badminton"
    },
    {
      "values":[volei],
      "background-color":"#339933",
      "text":"Volei"
    },
    {
      "values":[playstation4],
      "background-color":"#66ccff",
      "text":"Play Station 4"
    },
    {
      "values":[zumba],
      "background-color":"#3399ff",
      "text":"Zumba"
    }
  ]
};
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: '90%', 
	width: '100%' 
});

</script>