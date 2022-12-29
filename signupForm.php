<?php
include "dbconn.php";
if(isset($_POST['user'])){
    header("Location: userSignupForm.php");
}
if(isset($_POST['trainer'])){
    header("Location: trainerSignupForm.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Sign up</title>
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
    left: 1200px;
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

.contact3 {
    position: absolute;
    top: 65%;
    left: 48%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 360px;
    padding: 80px 40px;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.5);
}

.contact3 .avatar {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    top: calc(-80px/2);
    left: 156px;
}


.contact3 select {
    width: 100%;
    margin-bottom: 5px;
}

.contact3 .trainerbutton {
    top: 280px;
    cursor: pointer;
    position: absolute;
    width: 140px;
    left: 130px;
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


.contact3 .signup {
    top: 180px;
    cursor: pointer;
    position: absolute;
    width: 140px;
    left: 130px;
    height: 40px;
    font-weight: bolder;
    font-size: large;
    background: #365299;
    padding: 10px 15px;
    color: #f5ecec;
    border-radius: 6px;
    margin-right: 10px;
    border: none;
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
    <div class="contact3">
        <form method="post">
            <img alt="" class="avatar"
                src="https://st2.depositphotos.com/1557108/7754/v/600/depositphotos_77546730-stock-illustration-vector-illustration-fitness-gym-logo.jpg">
            <h3>Sign up as</h3>
            <button class="signup" name="trainer">Trainer</button>
            <button name="user" class="trainerbutton">User</button>
    </div>
</body>

</html>