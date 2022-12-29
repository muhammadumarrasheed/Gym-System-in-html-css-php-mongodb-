<?php
session_start();
$var = $_SESSION['email'];
include "mongoCon.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Panel</title>
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
    left: 1220px;
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

table,
th,
td {
    padding: 8px;
    border: 1.23px solid;
    text-align: middle;
}

.tablef {
    column-width: 10px;
    position: absolute;
    top: 420px;
    left: 110px;
    opacity: 0.8;
    border-collapse: collapse;
    width: 900px;
    background: black;
}

th {
    font-family: 'Poppins';
    font-size: 20px;
    background-color: #04AA6D;
    color: white;
}

td {
    font-family: 'Poppins';
    font-size: 17px;
    background-color: #04AA6D;
    color: white;
}

tr:hover {
    background-color: #818589;
}

.container .titl {
    position: absolute;
    font-size: 35px;
    color: red;
    font-weight: bolder;
    left: 620px;
    top: 250px;
}

.tabl {
    column-width: 10px;
    position: absolute;
    top: 630px;
    left: 270px;
    opacity: 0.8;
    border-collapse: collapse;
    width: 900px;
    background: black;
}

.container .addUserbtn {
    top: 320px;
    font-family: 'Poppins';
    cursor: pointer;
    position: absolute;
    width: 170px;
    left: 745px;
    height: 60px;
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
</style>

<body>
    <div class="contact-form">
        <button class="login" name="submit"><a href="home.php">Log out</button>
        <li class="A"><a href="userPanel.php">Home</a></li>
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
    </div>
    <div class="container">
        <label class="titl"> User Profile</label>
        <table class="tablef" style="width:50%">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone #</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">City</th>
                    <th scope="col">Street ID</th>
                    <th scope="col">House #</th>
                    <th scope="col">Trainer</th>
                    <th scope="col">Class</th>
                    <th scope="col">Session</th>
                    <th scope="col">Package</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user = $MRFitness->user;
                $fitness = $MRFitness->fitness;
                $plan = $MRFitness->fitness;
                $users = $user->findOne(array('trainerEmail' => $var));
                $check = $user->aggregate([ ['$lookup' =>   [
                      'from'=>'user','localField'=>"fitness.userEmail",
                      'foreignField'=>"$fitness.userEmail",
                      'as'=>"data"
                    ]]]);
                $myData = array();
    foreach($check as $result) {
      array_push($myData, $result);
    }
                    $plan = $MRFitness->plan->findOne(array('userEmail' => $var));
                    $fitness = $MRFitness->fitness->findOne(array('userEmail' => $var));
                    foreach($myData as $row){
                        if($row['userEmail'] = $var){
                        $email = $row['userEmail'];
                        $name = $row['username'];
                        $password = $row['password'];
                        $phone = $row['phoneNum'];
                        $city = $row['city'];
                        $postal = $row['postacode'];
                        $street = $row['streetID'];
                        $house = $row['houseNum'];
                        $trainer = $row['trainername'];
                        $class = $row['classname'];
                        $session = $row['sessionname'];
                        $package = $row['packagename'];
                        echo '<tr>
                        <th scope="row">'.$email.'</th>
                        <td>'.$name.'</td>
                        <td>'.$password.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$postal.'</td>
                        <td>'.$city.'</td>
                        <td>'.$street.'</td>
                        <td>'.$house.'</td>
                        <td>'.$trainer.'</td>
                        <td>'.$class.'</td>
                        <td>'.$session.'</td>
                        <td>'.$package.'</td>
                        <td>
                     <button class = "btn btn-primary my-1"><a href="userUpdateOwnPro.php?updateid='.$email.'" class = "text-light">Update</a></button><br>
                 </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <table class="tabl" style="width:50%">
        <thead>
            <tr>
                <th scope="col">Plan</th>
                <th scope="col">Fitness</th>

            </tr>
        </thead>
        <tbody>
            <?php
                    $plan = $MRFitness->plan->findOne(array('userEmail' => $var));
                    $fitness = $MRFitness->fitness->findOne(array('userEmail' => $var));
                        if($row['userEmail'] = $var){
                        $plan = $plan['planname'];
                        $fitness = $fitness['fitnessstatus'];
                        echo '<tr>
                        <th scope="row">'.$plan.'</th>
                        <td>'.$fitness.'</td>
                    </tr>';
                    }
                ?>
        </tbody>
    </table>
    </div>

</body>

</html>