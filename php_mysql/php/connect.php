<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$host='db';
$user='devuser';
$password='devpass';
$db='test_db';

$db_link = mysqli_connect($host, $user, $password, $db);

if (!$db_link) {
    echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;
    echo "Debug-Fehlernummer: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug-Fehlermeldung: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

#echo "Erfolg: es wurde ordnungsgemäß mit MySQL verbunden! Die Datenbank \"datenbank\" ist toll." . PHP_EOL;
#echo "Host-Informationen: " . mysqli_get_host_info($link) . PHP_EOL;

$sql = "SELECT * FROM super_tabelle";

$db_erg = mysqli_query( $db_link, $sql );

if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}

echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['Name'] . "</td>";
  echo "<td>". $zeile['Vorname'] . "</td>";
  echo "<td>". $zeile['Adresse'] . "</td>";
  echo "<td>". $zeile['Items'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysqli_free_result( $db_erg );

mysqli_close($db_link);

//$conn = new mysqli($host,$user,$password,$db);
/*
if($conn->connect_error)
{
     echo 'connection failed'. $conn->connect_error;
}
else
{
    echo 'successfully connected to MYSQL';
}
*/


//$link = mysqli_connect($host, $user, $pwd, $db);
 
// Check connection
/*if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Close connection
mysqli_close($link);*/
?>