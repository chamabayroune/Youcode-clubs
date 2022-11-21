<?php 
session_start();
include 'connection.php';
$sql = "select * FROM `club` WHERE `id` = '" . $_GET["id"] . "'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) { 
            $c = $row['nom'];
$sql1 = "UPDATE `apprenant` SET `id_club`=NULL,`role`=NULL WHERE `id_club`= '$c'";}}
$sql2 = "DELETE FROM `club` WHERE `id` = '" . $_GET["id"] . "'";
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE ) {
 header('location: admin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>