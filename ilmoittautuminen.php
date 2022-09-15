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
  margin-top: 350px;
}
.header {
  padding: 40px;
  text-align: center;
  background: #2a4742;
  color: white;
  font-size: 30px;
}
div	{
	padding-left:20px;
}
</style>
</head>
<body>
	
<div class="header">
  <h2>Amis Padel</h2>
</div>
	
<div>
<?php 
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);

include("yhteys.php");

$sql_lause =  "SELECT * FROM uutiset";
try {
  $kysely = $yhteys->prepare($sql_lause);
  $kysely->execute();
} 
 catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
       }
$tulos = $kysely->fetchAll();

foreach($tulos as $rivi) { 
 echo '<h1>',$rivi['otsikko'],'</h1>';
 echo '<br>',$rivi['aika'],'</br>';
 echo '<p>',$rivi['leipateksti'],'</p>';
} 
?>  
</div>

<footer>
    <h2>Copyright: Jere, Oiva, Kasper</h2>
</footer>

</body>
</html>
