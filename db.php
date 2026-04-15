<?php
$conn = new mysqli("localhost", "root", "", "project_guide");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>