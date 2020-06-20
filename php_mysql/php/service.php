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

$resultArray=array();
$tempArray=array();

while ($row=$db_erg->fetch_object())
{
    $tempArray=$row;
    array_push($resultArray,$tempArray);
}
echo json_encode($resultArray);



mysqli_free_result( $db_erg );

mysqli_close($db_link);

?>