<?php
require 'config.php';
if(isset($_POST["submit"])){
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email' ");
if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email has Already Taken'); </script>";
}
else {
    if($password == $confirmpassword){
        $query = "INSERT INTO tb_user VALUES('','$name', '$username','$email','$password')";
        mysqli_query($conn,$query);
        
     echo
        "<script> alert('Registration Succesfull'); </script>";
    }
    else{
        echo
        "<script> alert('Password Does Not Match'); </script>";
    
    }
}

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
        <title>Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        
        <style>
            



body{
            margin:0;
            padding:0;
            font-family:montserrat;
            background: whitesmoke;
            height:120vh;
            overflow:hidden;
        }

        .center{
            position: fixed;
            top:13%;
            left: 35%;
            background:white;
            border-radius:10px;
            background: black;
            padding: 10px 120px;
            
        }
.form label{
    font-size: 18px
}
a{
    color:gray;
    font-size: 20px;
}
.title-logo{
            
            margin: 30px 0 0 40px;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
        }
        .title-logo a{
            color: black;
            font-size: 30px;
            text-decoration: none;
        }
        span{
            color: darkblue;

        }
            </style>
</head>
<body>




<div class="title-logo">
                    <a href="index.html" target="HOME1" alt="" class="logo">Web <span>Development</span></a>
                    
                </div>
<div class="center">
    <h2>Registration</h2>

    <form class="form" action="" method="post" autocomplete="off">
    <label for="name"> Name :</label>
    <input type="text" name ="name" id="name" required value="">
    <label for="Username"> Username :</label>
    <input type="text" name ="username" id="username" required value="">
    <label for="email"> Email :</label>
    <input type="text" name ="email" id="email" required value="">
    <label for="password"> Password :</label>
    <input type="password" name ="password" id="password" required value="">
    <label for="confirmpassword">Confirmpassword :</label>
    <input type="password" name ="confirmpassword" id="password" required value="">
    <button type="submit" name="submit" target="logins">Register</button>
</form>
<a href="log-in.php"> Click here to Login</a>
    </div>
</body>
</html>
    