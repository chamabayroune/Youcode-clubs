<?php 
session_start();
include 'connection.php';
$sql = "UPDATE `apprenant` SET `id_club`=NULL,`role`=NULL WHERE `id`= '" . $_GET["id"] . "'";
if ($conn->query($sql) === TRUE) {
 header('location: Apprenant.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>