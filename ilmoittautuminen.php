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

echo "$et .. $sn .. $sp .. $kt .. $vs .. $ks<br>";

$sql = "INSERT INTO jasenet (tunniste, etunimi, sukunimi, sahkoposti, koulutalo, viesti, kurssi) 
VALUES (NULL, '$et', '$sn', '$sp', '$kt', '$vs', '$ks')";

try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(); 
	} catch (PDOException $e) { 
	die("VIRHE NRO 2: " . $e->getMessage()); 
} 
?>  
