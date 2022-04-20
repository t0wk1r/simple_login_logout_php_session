<?php 

session_start();

if(isset($_SESSION['active'])){
    header('Location: admin.php');
}
$emailaddress = "towkir29@gmail.com";
$password = 1234;
if(isset($_POST['submit'])){
    define('Email', $emailaddress);
    define('Password', $password);

    $email  = $_POST ['email'];
    $psw    = $_POST ['password'];

    if($email == Email && $psw == Password){
        $_SESSION['active'] = "";
        header('Location: admin.php');
    }else{
        $fail = "User not match";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user panel</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="submit" value="Login">
    </form>

    <h1>

    <?php 
    
    if(isset($fail)){
        echo $fail;
    }
    
    ?>

    </h1>


    <script> 

    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    
    
    </script>
</body>
</html>