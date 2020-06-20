<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
 <?php  
    echo '<p>This is Hello World from PHP </p>'; 
    echo 'Die aktuelle PHP Version ist ' . phpversion().'<br><br>';
    $ip = $_SERVER["REMOTE_ADDR"];  
    $host = gethostbyaddr($ip);

    echo " IP Adresse: $ip<br>";  
    echo " Hostname: $host";  
    #echo 'infos ' . phpinfo();
 ?>
 </body>
</html>