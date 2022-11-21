<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>$(document).ready(function () {
      $('#example').DataTable();
  });</script>
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
            <a href="Admin.php" style="color: #0384EE;">Clubs</a>
            <a href="Apprenant.php">Apprennants</a>
            <a href="add-club.php"><i class="fa fa-plus"></i></a>
            <a href="log-out.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
        </div>
        
        <div class="test" >
            <label style="height: 100px;">☰</label>
        <div class="test-content">
            <a class="span2" style="color: white;">Admin</a>
                <a href="Admin.php" style="color: #0384EE;">Admin</a>
                <a href="Apprenant.php">Apprennat</a>
                <a href="add-club.php">Add club</a>
                <a href="log-out.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
    </div>
    </header>
       
    <div class="cont">
        <table id="example" class="table custom-table" style="width:100% !important;">
          <thead>
              <tr>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Categorie</th>
                  <th>Date</th>
                  <th style="max-width: 400px;">Discription</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM club";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
      // output data of each row
           while($row = $result->fetch_assoc()) { 
            echo  '<tr><td><img src=" '. $row["logo"].' " style="width: 50px; height:50px; border-radius :200px;"/></td>
             <td> '. $row["nom"] .'</td>
             <td>'. $row["Categorie"] .'</td>
             <td>'. $row["date"] .'</td>
             <td>'. $row["discription"] .'</td>
             <td ><div class="dropdown">
                 <a ><i class="fa fa-remove"></i></a>
                 <div class="dropdown-content" style="width: 350px; right: 0px; bottom: 5px;">
                 <p>Do you wanna delete '. $row["nom"] .'</p>
                   <a href="deleteclub.php?id='. $row["id"].'">Delete</a>
                 </div>
                </div> </a><a href="updateclub.php?id='. $row["id"].'"><i class="fa fa-pencil" aria-hidden="true" style="float: right;"></i></a></td>
             </tr>';
}} else {
  echo "0 results";
}
           ?>
          </tfoot>
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