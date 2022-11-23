<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/icon" href="assets/images/YC Clubs.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
    <link rel="shortcut icon" type="image/icon" href="images/YC Clubs.png"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>YCclubs</title>
</head>
<body>
<div style="display: flex;  justify-content:center">
    <div class="container">
        <h1>YC Clubs</h1>
        <?php 
include 'connection.php';
$sql = "select * FROM `club` WHERE id = '" . $_GET["id"] . "'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) { 
        echo '<form action="" method="post">
                <input placeholder="Name" value="'.$row["nom"].'" name="nom" required/>
                <select name="categorie" ">
                    <option value="'.$row["Categorie"].'">
                    '.$row["Categorie"].'
                    </option>
                    <option value="Art">
                        Art
                    </option>
                    <option value="Sport">
                        Sport
                    </option>
                    <option value="Robotic">
                        Robotic
                    </option>
                    <option value="Envirement">
                        Envirement
                    </option>
                    <option value="Social">
                        Social
                    </option>
                </select>
                <textarea placeholder="Discription" value= "" cols="5" name="disc" required>'.$row["discription"].'</textarea>
                <br>
                <button name="set">Done</button>
        </form>';  }}?>
        <a href="Admin.php">Go back</a>
    </div>
         </div>
<?php
if(isset($_POST['set'])){
$name = $_POST['nom'];
$disc = $_POST['disc'];
$categorie = $_POST['categorie'];
$sql = "UPDATE `club` SET `nom`='$name',`discription`='$disc',`Categorie`='$categorie' WHERE `id` = '" . $_GET["id"] . "'";
if ($conn->query($sql) === TRUE) {
 header('location: admin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
</body>
</html>