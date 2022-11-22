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
    <header>
        <div class="logo">
            <img src="assets/images/YC Clubs.png"/>
        </div>
        
        <div class="nav">
            <a class="span2" style="color: white;"><?php echo $_SESSION['name'] ?></a>
            <a href="Admin.php" >Clubs</a>
            <a href="Apprenant.php" style="color: #0384EE;">Apprennants</a>
            <a href="add-club.php"><i class="fa fa-plus"></i></a>
            <a href="log-out.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
        
        <div class="test" >
            <label style="height: 100px;">☰</label>
        <div class="test-content">
            <a class="span2" style="color: white;">Admin</a>
            <a href="Admin.php" >Admin</a>
            <a href="Apprenant.php" style="color: #0384EE;">Apprennat</a>
            <a href="add-club.php">Add club</a>
            <a href="log-out.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
    </div>
    </header>
    <div class="cont" style="width:100%;">
        <table id="example" class="table" style="width:80%;
  border-collapse: collapse;">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Age</th>
                    <th style="width: 100px;">Role</th>
                    <th style="width: 200PX;">Club</th>
</tr>
    <?php
    include 'connection.php';
        $sql = "SELECT * FROM apprenant";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
      // output data of each row
           while($row = $result->fetch_assoc()) { 
            if( $row["id_club"] == NULL){
                echo  '<tr><td><img src=" '. $row["logo"].' " style="width: 50px; height:50px; border-radius: 200px;"/></td>
       <td> '. $row["Nom"] .'</td>
       <td>'. $row["Class"] .'</td>
       <td>'. $row["Age"] .' ans</td>
        <td>Apprennant</td>
        <td ><a style="margin-left: 5rem;"href="member.php?id='. $row["id"].'" >Add Club</a></td> 
        </tr>';
            }else{
                echo  '<tr><td><img src=" '. $row["logo"].' " style="width: 50px; height:50px; border-radius: 200px;"/></td>
                <td> '. $row["Nom"] .'</td>
                <td>'. $row["Class"] .'</td>
                <td>'. $row["Age"] .' ans</td>
                 <td>'. $row["Role"] .'</td>
                 <td >'. $row["id_club"].' <div class="dropdown"style="float:right;">
                 <a  color:black"><i class="fa fa-remove"></i></a>
                 <div class="dropdown-content" style="width: 350px;right: 0px; top: 3px;">
                 <br> <p>Remove '. $row["Nom"] .' from  '. $row["id_club"].'</p>
                 <br> <br>  <a href="deletemembre.php?id='. $row["id"].'">Remove</a>
                 </div> </td> 
                 </tr>';
            }   
}}
           ?>
        </table>
    </div>
    <footer id="footer"  class="footer">
        <div class="footer-social">
            <a href="https://www.facebook.com/kenza.zafer.9"><i class="fa fa-facebook"></i></a>	
            <a href="https://www.instagram.com/kenza_zafer/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/kenza-zafer-05a24921b/"><i class="fa fa-linkedin"></i></a>	
        </div>
        <p>
            &copy; developed by <a style="color:#0384EE;">ZAFER kenza</a> 
        </p><!--/p-->

</footer>
</body>
</html>