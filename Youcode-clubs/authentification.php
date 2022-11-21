<?php      
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
            header('location : login.html');  ;  
        }     
?>  