<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="utf-8"/>
<title>Uutiset</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: #474e5d;
  color: white;
  margin-top: 650px;
}

div	{
	padding-left:20px;
}

.header {
  padding: 15px;
  text-align: left;
  background: #2a4742;
  color: white;
  font-size: 20px;
}

.header-right {
 float: right;
 color: white;
}

.header a {
 text-decoration:none;
 padding: 10px;
 border-radius: 4px;
 line-height: 10px;
}

.header-right a:hover {
  background-color: #ddd;
  color: black;
}

a:visited {
 color: white;
}
</style>
</head>
<body>

<div class="header">
  <a style="font-weight: bold;">Amis Padel</a>
  <div class="header-right">
    <a href="etusivu.html">Etusivu</a>
    <a href="ilmoittautuminen.html">Ilmoittautuminen</a>
    <a href="uutiset.php">Uutiset</a>
  </div>
</div>

<div>
<?php 
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);

include("yhteys.php");

$et = $_POST["etunimi"];
$sn = $_POST["sukunimi"];
$sp = $_POST["sahkoposti"];
$kt = $_POST["koulutalo"];
$vs = $_POST["viesti"];
$ks = $_POST["kurssi"];

echo "<br>";
echo "Tiedot lähetetty!<br>";

$sql = "INSERT INTO jasenet (tunniste, etunimi, sukunimi, sahkoposti, koulutalo, viesti, kurssi) 
VALUES (NULL, '$et', '$sn', '$sp', '$kt', '$vs', '$ks')";
$sql_lause =  "SELECT * FROM uutiset";
try {
  $kysely = $yhteys->prepare($sql_lause);
  $kysely->execute();
} 
 catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
       }

try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(); 
	} catch (PDOException $e) { 
	die("VIRHE NRO 2: " . $e->getMessage()); 
	}
?>  
</div>

<footer>
    <h2>Copyright: Jere, Oiva, Kasper</h2>
</footer>

</body>
</html>
