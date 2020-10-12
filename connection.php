<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Options";

try {
    $conn = new PDO("mysql:host=$servername;dbame=$dbname", $username, $password);
    //Setting PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOexpection $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>