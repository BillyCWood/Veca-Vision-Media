<?php 

$dsn = "mysql:host=localhost;dbname=subscribers-emails";
$dbusername = "root";
$dbpassword = "root";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}