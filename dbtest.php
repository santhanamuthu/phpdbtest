<?php
$dbhost = "172.30.78.113";
$dbport = "3306");
$dbuser = "muthu";
$dbname = "Sprint2010";
$dbpwd = "sampledb";;
 


$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
