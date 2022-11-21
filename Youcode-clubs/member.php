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
        <h1>Affecter Club </h1>
        <form action="" method="POST">
            <select name="club">
            <option value="" disabled selected hidden>
                        Club
                    </option>
                <?php 
                include 'connection.php';
            $sql = "SELECT * FROM club";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
      // output data of each row
           while($row = $result->fetch_assoc()) {
            echo '<option value="'. $row["nom"].'">
            '. $row["nom"].'
        </option>';
            }}?>
                </select>
                <select name="role" >
                    <option value="" disabled selected hidden>
                        Role
                    </option>
                    <option value="Admin">
                        Admin
                    </option>
                    <option value="Adherant">
                        Adherant
                    </option>
                </select>
                <br><button type="submit" name="submit">Done</button>
        </form> 
        <a href="Apprenant.php">Go back</a>
        </div>
<?php
if(isset($_POST['role'])){
    $role = $_POST['role'];
    $club = $_POST['club'];
   $sql = "UPDATE `apprenant` SET `id_club`='$club',`role`='$role' WHERE `id`= '" . $_GET["id"] . "'";
   if ($conn->query($sql) === TRUE) {
    echo 'done';
   header('location: Apprenant.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
 ?>
    </div>
</body>
</html>