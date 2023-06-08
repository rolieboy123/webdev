<?php
require 'config.php';
if(isset($_POST["submit"])){
$usernameemail = $_POST["usernameemail"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
    if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("location: task.php");
    }
    else{
        echo
        "<script> alert('Wrong Password'); </script>";
     }
    }
else{
    echo
    "<script> alert('User not registered'); </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <link rel="stylesheet" href="style.css">
</head>
<style>
        body{
            margin:0;
            padding:0;
            font-family:montserrat;
            background: whitesmoke;
            height:100vh;
            overflow:hidden;
        }
        .center{
            position: fixed;
            top:25%;
            left: 30%;
            background:white;
            border-radius:10px;
            background: black;
        }
form{
    padding: 25px 75px;
}
.center{
    text-align: center;
    padding: 10px 40px 30px 40px;
}
a{
    color:gray;
    font-size: 20px;
}
.form label{
    color: black; 
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
<body>
<header>
    <nav>
        <!--logo-->
        <div class="title-logo">
            <a href="index.html" target="HOME1" alt="" class="logo">Web <span>Development</span></a>
            
        </div>
        <!-- navbar-->
        <ul class="navbar">
            <li><a href="course.html">COURSE</a></li>
            <li><a href="index.html" id="HOME1">Home</a></li>
            <li><a href="learnpage.html">Learn</a></li>
            <li><a href="aboutpage.html">About</a></li>
            
            <!--button-->
            <li><a href="log-in.php" class="button">Log-in</a></li>
        </ul>
        <!--top hero-->
    </nav>
</header>

    <div class = "center" id="logins">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
        <div class="txt_field">
        <label for="usernameemail"> Username or Email:</label>
        <input type="text" name ="usernameemail" id="usernameemail" required value=""> 
</div>
<div class="txt_field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required value=""> <br>
        <button type="submit" name="submit" onclick="show_alert()" value="Show Name" >Login</button>
        <br>
        <br>
    <a href="registration.php">Click here to Register</a>
</div>

</form>
    </div>


<script>
    function show_alert(){
  var name = document.getElementById('usernameemail').value;
  alert("Welcome to our E-learning Website " + name + "" + " Here's your task <3 ");
}
</script>
</body>
</html>