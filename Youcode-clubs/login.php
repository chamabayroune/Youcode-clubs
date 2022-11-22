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
<div style="display: flex; align-items:center; justify-content:center">
    <div class="container">
        <h1>Admin</h1>
        <form action="" method="post">
                <input placeholder="Username"  name="username" required/>
                <input placeholder="Password" type="password"  name="password" required/>
                <br>
                <button name="auth">Sign In</button>
                <?php      
                if(isset($_POST['auth'])){
                   include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];   
        $sql = "select * from admin where username = '$username' and password = '$password'";  
        $result = $conn->query($sql);
        if ($result->num_rows > 0) { 
        session_start();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
            header('Location: admin.php');
        }  
        else{  
           echo '<p style="color:red; padding-top:10px">Username or password unvalid</p>';  
        }   
                }
?>  
        </form>
        <a href="index.php">Go back</a>
    </div>
</div>
</body>
</html>