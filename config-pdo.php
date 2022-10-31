<?php
$host_name = "localhost";
$database = "signup";
$username = "root";
$password = "";

try{
    $dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br>";
    die();
}
?>