<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "youcodeclubs";  
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    echo 'Erreur de connexion';
  }
?>