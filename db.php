<?php
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("MySQL connection failed: " . $conn->connect_error);
}

$db_selected = $conn->select_db("research_,management");

if (!$db_selected) {
    die("Database NOT found. Please check database name in phpMyAdmin.");
}
?>