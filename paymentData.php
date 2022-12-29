<?php
if(isset($_POST['submit'])){
    header("Location: userPaymentData.php");
}
if(isset($_POST['submit1'])){
    header("Location: trainerPaymentData.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Payment update Panel</title>
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
    font-weight: bolder;
    top: 91px;
    font-size: 40px;
    left: -28px;
    color: #fff;
}

label {
    font-family: 'poppins', 'san-serif';
    margin: 0;
    padding: 0 0 20px;
    color: white;
    position: relative;
}

.contact-form li {
    font-family: 'poppins', 'san-serif';
    position: relative;
    font-size: large;
    top: 25px;
    left: 400px;
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


.contact-form .login {
    top: 100px;
    position: absolute;
    width: 90px;
    left: 1450px;
    height: 36px;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    border: none;
    background: red;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}

.container {
    position: absolute;
    top: 780px;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 700px;
    height: 1400px;
    padding: 80px 40px;
}

.container .submit1 {
    top: 170px;
    cursor: pointer;
    position: absolute;
    width: 200px;
    left: 220px;
    height: 50px;
    font-weight: bolder;
    font-size: large;
    background: #365299;
    padding: 10px 15px;
    color: #f5ecec;
    border-radius: 5px;
    margin-right: 10px;
    box-shadow: 0 12px 16px 0 rgba(10, 10, 95, 0.24), 0 17px 50px 0 rgba(73, 75, 199, 0.19);
    border: none;
}

.container .submit {
    top: 290px;
    cursor: pointer;
    position: absolute;
    width: 200px;
    left: 220px;
    height: 50px;
    font-weight: bolder;
    font-size: large;
    background: #365299;
    padding: 10px 15px;
    color: #f5ecec;
    border-radius: 5px;
    margin-right: 10px;
    box-shadow: 0 12px 16px 0 rgba(10, 10, 95, 0.24), 0 17px 50px 0 rgba(73, 75, 199, 0.19);
    border: none;
}

.container input {
    border-radius: 6px;
    height: 60px;
    opacity: 0.7;
    background: black;
    border: rgb(5, 4, 4);
}

.container ::placeholder {
    color: white;
    font-size: 15px;
}

.container .title {
    position: absolute;
    font-size: 25px;
    color: red;
    font-weight: bolder;
    left: 220px;
    top: 30px;
}

.container option {
    border-radius: 6px;
    color: white;
    height: 80px;
    opacity: 0.7;
    background: black;
    border: rgb(5, 4, 4);
}

.container label {
    color: rgb(255, 255, 255);
    font-size: 18px;
    padding: 10px;
}
</style>

<body>
    <div class="contact-form">
        <button class="login"><a href="home.php">Log out</button>
        <li class="A"><a href="adminpanel.php">Home</a></li>
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <li><a href="userData.php">User</a></li>
        <li><a class="active" href="trainerData.php">Trainer</a></li>
        <li><a class="active" href="equipmentData.php">Equipments</a></li>
        <li><a class="active" href="planData.php">Plan</a></li>
        <li><a class="active" href="classData.php">Class</a></li>
        <li><a class="active" href="sessionData.php">Session</a></li>
        <li><a class="active" href="fitnessData.php">Fitness</a></li>
        <li><a class="active" href="paymentData.php">Payment</a></li>
        <li><a class="active" href="packageData.php">Packages</a></li>
    </div>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label class="title">Payment Data</label>
            </div>
            <button type="submit" class="submit" name="submit">User Status</button>
            <button type="submit" class="submit1" name="submit1">Trainer Status</button>
        </form>

    </div>
</body>

</html>