<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/icon" href="assets/images/YC Clubs.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="images/YC Clubs.png"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
    <title>YCclubs</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/images/YC Clubs.png"/>
        </div>
        <div class="nav">
            <a href="index.php" style="color: #0384EE;">Home</a>
            <a href="About.html">About</a>
            <a href="contact.html">Contact</a>
        </div>
        <a href="login.php"><i class="fa fa-sign-in" id="sign-in" aria-hidden="true"></i></a>
        <div class="test" >
            <label style="height: 100px;">☰</label>
        <div class="test-content">
                <a href="index.php" style="color: #0384EE;">Home</a>
                <a href="About.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
            </div>
    </div>
    </header>
    <div class="search">
            <h1>“Welcome Youcoders !”</h1>
            <p>Find the club that matches your interests</p>
            <div class="search-box">
            <form action="clubs.php" method="post">
                <select name="cat">
                    <option value="all">All clubs</option>
                    <option value="art">Art</option>
                    <option value="sport">Sport</option>
                    <option value="envirement">Envirement</option>
                    <option value="social">Social</option>
                    <option value="robotic">Robotic</option>
                </select>
                <button class="span">Search</button>
            </form>
            </div> 
    </div>
    <div class="clubs">
    <?php
include 'connection.php';
$sql = "SELECT * FROM club"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) { 
         ?>
         <div class="club">
         <?php echo  '<img src="./upload/'.$row['logo'].'" style="width: 150px; height:150px"/>
         <h2> '. $row["nom"] .'</h2>
          <p style="padding: 10px;">'. $row["discription"] .'</p>
          <p class="date">'. $row["date"] .'</p>
          <span class="categorie">'. $row["Categorie"] .'</span>
          </div>';
  }} else {
    echo '<p style="color:red;text-align:center;margin:100px;font-size:20px;width:100%">No club yet !</p>';
  }
?>
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