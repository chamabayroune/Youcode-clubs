<?php
include 'connection.php';
$categorie = $_POST['cat'];
if($categorie == 'all'){
   $sql = "SELECT * FROM club"; 
}else{
    $sql = "SELECT * FROM club where categorie = '$categorie'";
}
$result = $conn->query($sql);
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
    <header>
        <div class="logo">
            <img src="assets/images/YC Clubs.png"/>
        </div>
        <div class="nav">
            <a href="index.html">Home</a>
            <a href="About.html">About</a>
            <a href="contact.html">Contact</a>
        </div>
        <a href="login.html"><i class="fa fa-sign-in" id="sign-in" aria-hidden="true"></i></a>
        <div class="test" >
            <label style="height: 100px;">☰</label>
        <div class="test-content">
                <a href="index.html">Home</a>
                <a href="About.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
            </div>
    </div>
    </header>
    <div class="clubs" id="clubs">
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
                 while($row = $result->fetch_assoc()) { 
                 ?>
                 <div class="club">
                 <?php echo  '<img src=" '. $row["logo"].' " style="width: 150px; height:150px"/>
                 <h2> '. $row["nom"] .'</h2>
                  <p style="padding: 10px;">'. $row["discription"] .'</p>
                  <p class="date">'. $row["date"] .'</p>
                  <span class="categorie">'. $row["Categorie"] .'</span>
                  </div>';
          }} else {
            header('location: index.html');
          }
                  ?>
                 </div>
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