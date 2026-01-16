<?php
$conn = new mysqli("sql107.infinityfree.com
", "if0_40916140", "WrjHKK1oTb0lOP", "if0_40916140_runmain");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>