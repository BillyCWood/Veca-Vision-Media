<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $subscribed_status = 1;

    try {
        
        require_once "dbhandler.inc.php";

        $query = "INSERT INTO subscribers-emails (email, subscribed_status) VALUES (?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $subscribed_status]);

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.html");
}