<?php 
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("yhteys.php");  // Sisällyttää aiemmin tehdyn yhteys.php-tiedoston tähän
// Taulun nimi on jasenet, ei esim Jäsenet tai Jasenet
// Listataan kaikki = *
$sql_lause =  "SELECT * FROM ilmoittautumiset";
try {
  $kysely = $yhteys->prepare($sql_lause);
  $kysely->execute();
} 
 catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
       }
$tulos = $kysely->fetchAll();
echo " <br>";
echo "<table align='left' cellspacing=3 cellpadding=3>";


echo "<td>etunimi</td>", "<td>sukunimi</td>";
foreach($tulos as $rivi) {     
 
 echo '<tr>';
 echo '<td>',$rivi['etunimi'],'</td>';
 echo '<td>',$rivi['sukunimi'],'</td>';
 echo '</tr>';  

} 
echo "</table>"; 
?>  