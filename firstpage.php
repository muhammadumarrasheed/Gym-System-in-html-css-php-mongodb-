<?php
include "dbconn.php";
if(isset($_POST['adminsubmit'])){
   $adminname = $_POST['adminname'];
   $adminpass = $_POST['adminpassword'];

if(empty($adminname)){
    header("Location: firstpage.php?error = Username is required");
    exit();
}else if(empty($adminpass)){
    header("Location: firstpage.php?error = Password is required");
    exit();
}else{
     $sql = "Select * from admin where name = '$adminname' && password = '$adminpass'";
     $result = mysqli_query($con, $sql);
     if(mysqli_num_rows($result)){
        header("Location: adminpanel.php");
     }
     else{
        header("Location: firstpage.php?error = invalid username and password");
     }
}
}else if(isset($_POST['usersubmit'])){
  $uname = $_POST['uname'];
  $upass = $_POST['upassword'];

if(empty($uname)){
   header("Location: firstpage.php?error = Username is required");
   exit();
}else if(empty($upass)){
   header("Location: firstpage.php?error = Password is required");
   exit();
}else{
    $sql = "Select * from user where name = '$uname' && password = '$upass'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)){
       header("Location: adminOpt.php");
    }
    else{
       header("Location: firstpage.php?error = invalid username and password");
    }
}
}else if(isset($_POST['trainersubmit'])){
  $tname = $_POST['tname'];
  $tpass = $_POST['tpassword'];

if(empty($tname)){
   header("Location: firstpage.php?error = Username is required");
   exit();
}else if(empty($tpass)){
   header("Location: firstpage.php?error = Password is required");
   exit();
}else{
    $sql = "Select * from trainer where name = '$tname' && password = '$tpass'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)){
       header("Location: adminOpt.php");
    }
    else{
       header("Location: firstpage.php?error = invalid username and password");
    }
}
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Admin Panel</title>
</head>
<style>
* {
    box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

body:before {
    content: '';
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: black;
    background-position: center center;
    background-image: url(pic.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    opacity: 0.9;
    -webkit-filter: blur(5px);
    -moz-filter: blur(1px);
}

.contact-form {
    display: inline-block;
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1520px;
    height: 45px;
    padding: 80px 40px;
    background: transparent;
}

.contact-form h2 {
    position: absolute;
    font-family: 'poppins', 'san-serif';
    margin: 0;
    padding: 0 0 20px;
    top: 110px;
    font-size: 40px;
    left: 90px;
    color: #fff;
}

.contact-form li {
    font-family: 'poppins', 'san-serif';
    position: relative;
    font-size: large;
    top: 25px;
    left: 1100px;
    display: inline-block;
    margin: 0 15px;
}

.contact-form li a {
    text-decoration: none;
    color: #fff;
    padding: 5px 0;
    position: relative;
}

.contact-form li a::after {
    content: '';
    background: #ff3d00;
    width: 0;
    height: 2px;
    position: absolute;
    left: 0;
    transition: width 0.5s;
}

.contact-form li a:hover::after {
    width: 100%;
}








.contact {
    position: absolute;
    top: 65%;
    left: 15%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 420px;
    padding: 80px 40px;
    background: rgba(0, 0, 0, 0.5);
}

.contact .avatar {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    top: calc(-80px/2);
    left: 190px;
}

.contact input {
    width: 100%;
    margin-bottom: 5px;
}


.contact .loginbutton {
    top: 360px;
    cursor: pointer;
    position: absolute;
    width: 90px;
    left: 265px;
    height: 40px;
    font-weight: bolder;
    font-size: large;
    background: #365299;
    padding: 10px 15px;
    color: #f5ecec;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}



.contact h2 {
    margin: 0;
    padding: 0 0 20px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
}



.contact2 {
    position: absolute;
    top: 65%;
    left: 85%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 420px;
    padding: 80px 40px;
    background: rgba(0, 0, 0, 0.5);
}

.contact2 .avatar {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    top: calc(-80px/2);
    left: 190px;
}

.contact2 input {
    width: 100%;
    margin-bottom: 5px;
}

.contact2 .userbutton {
    top: 360px;
    cursor: pointer;
    position: absolute;
    width: 90px;
    left: 265px;
    height: 40px;
    font-weight: bolder;
    font-size: large;
    background: #365299;
    padding: 10px 15px;
    color: #f5ecec;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}



.contact2 h3 {
    margin: 0;
    padding: 0 0 20px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
}


.contact3 {
    position: absolute;
    top: 65%;
    left: 48%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 420px;
    padding: 80px 40px;
    background: rgba(0, 0, 0, 0.5);
}

.contact3 .avatar {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    top: calc(-80px/2);
    left: 190px;
}


.contact3 input {
    width: 100%;
    margin-bottom: 5px;
}

.contact3 .trainerbutton {
    top: 360px;
    cursor: pointer;
    position: absolute;
    width: 90px;
    left: 265px;
    height: 40px;
    font-weight: bolder;
    font-size: large;
    background: #365299;
    padding: 10px 15px;
    color: #f5ecec;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

label {
    color: rgb(255, 255, 255);
    font-size: 18px;
    padding: 10px;
}

input {
    left: 30px;
    font-family: sans-serif;
    font-size: large;
    border-radius: 5px;
    color: white;
    display: block;
    border: 2px solid rgb(212, 215, 218);
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    background: transparent;
}



.contact3 h3 {
    margin: 0;
    padding: 0 0 20px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
}
</style>

<body>
    <div class="contact-form">
        <li class="A"><a href="home.php">Home</a></li>
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <li><a class="active" href="contactUs.php">Contact us</a></li>
        <li><a href="aboutUs.php">About us</a></li>
    </div>
    <div class="contact">
        <form method="post">
            <img alt="" class="avatar"
                src="https://st2.depositphotos.com/1557108/7754/v/600/depositphotos_77546730-stock-illustration-vector-illustration-fitness-gym-logo.jpg">
            <h2>Admin Login Form</h2>
            <?php if (isset($_GET['error'])){?>
            <p class="error"><?php  echo $_GET['error']; ?></p>
            <?php
        }
        ?>
            <label>Username</label>
            <input id="username" name="adminname" type="text" class="input"><br>
            <label>Password</label>
            <input id="password" name="adminpassword" type="text" class="input"><br>
            <button name="adminsubmit" class="loginbutton">Log in</button>
    </div>
    <div class="contact2">
        <form method="post">
            <img alt="" class="avatar"
                src="https://st2.depositphotos.com/1557108/7754/v/600/depositphotos_77546730-stock-illustration-vector-illustration-fitness-gym-logo.jpg">
            <h3>User Login Form</h3>
            <?php if (isset($_GET['error'])){?>
            <p class="error"><?php  echo $_GET['error']; ?></p>
            <?php
        }
        ?>
            <label>Username</label>
            <input id="username" name="uname" type="text" class="input"><br>
            <label>Password</label>
            <input id="password" name="upassword" type="text" class="input"><br>
            <button name="usersubmit" class="userbutton">Log in</button>
    </div>

    <div class="contact3">
        <form method="post">
            <img alt="" class="avatar"
                src="https://st2.depositphotos.com/1557108/7754/v/600/depositphotos_77546730-stock-illustration-vector-illustration-fitness-gym-logo.jpg">
            <h3>Trainer Login Form</h3>
            <?php if (isset($_GET['error'])){?>
            <p class="error"><?php  echo $_GET['error']; ?></p>
            <?php
        }
        ?>
            <label>Username</label>
            <input id="username" name="tname" type="text" class="input"><br>
            <label>Password</label>
            <input id="password" name="tpassword" type="text" class="input"><br>
            <button name="trainersubmit" class="trainerbutton">Log in</button>
    </div>
</body>

</html>