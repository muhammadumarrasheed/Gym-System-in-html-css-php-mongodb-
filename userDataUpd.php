<?php
include 'mongoCon.php';
$var= $_GET['updateid'];
$user = $MRFitness->user->find();
foreach($user as $r){
if($r['userEmail'] == $var){
$password = $r['password'];
$name = $r['username'];
$phone = $r['phoneNum'];
$city = $r['city'];
$postal = $r['postacode'];
$street = $r['streetID'];
$house = $r['houseNum'];
}
}
if(isset($_POST['submit'])){
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phoneNum'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$street = $_POST['streetID'];
$house = $_POST['house'];
$trainer = $_POST['Trainer'];
$session = $_POST['session'];
$package = $_POST['package'];
$class = $_POST['class'];
$trainerEmail = "$trainer"."@gmail.com";
if($MRFitness->user->updateOne(
    ['userEmail' => $var], 
    ['$set'=> ['userEmail' => $var, 'username' => $name, 'password' => $password, 'phoneNum' => $phone, 
    'city' => $city, 'postacode' => $postal,'streetID' => $street, 'houseNum' => $house, 'trainername' => $trainer,
    'classname' => $class, 'packagename' => $package,
    'sessionname' => $session, 'trainerEmail' => $trainerEmail]])){
        header("Location:  userData.php");   
}else{
header("Location: userData.php?error = Data is not updated");
}
}?>
<?php
$check = $MRFitness->trainer->find();
$options = "";
foreach($check as $row2)
{ 
    $name = $row2['trainername'];
    $options = $options."<option>$name</option>";
}
$check1 = $MRFitness->session->find();
$options1 = "";
foreach($check1 as $row3)
{ 
    $name = $row3['sessionname'];
    $options1 = $options1."<option>$name</option>";
}
$check2 = $MRFitness->package->find();
$options2 = "";
foreach($check2 as $row4)
{ 
    $name = $row4['packagename'];
    $options2 = $options2."<option>$name</option>";
}
$check3 = $MRFitness->class->find();
$options3 = "";
foreach($check3 as $row5)
{ 
    $name = $row5['classname'];
    $options3 = $options3."<option>$name</option>";
}?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    top: 20px;
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
    top: 91px;
    font-weight: bolder;
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
    top: 880px;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 700px;
    height: 1600px;
    padding: 80px 40px;
}

.container .insertbtn {
    top: 1425px;
    cursor: pointer;
    position: absolute;
    width: 130px;
    left: 41px;
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
    color: white;
    opacity: 0.7;
    background: black;
    border: rgb(5, 4, 4);
}

.container select {
    border-radius: 6px;
    height: 60px;
    color: white;
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
                <label class="title">User update Form</label>
            </div>
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"
                    value=<?php
                echo $name?>>
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter password" name="password" autocomplete="off"
                    value=<?php
                echo $password?>>
            </div>

            <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="phoneNum" value=<?php
                echo $phone?>>
            </div>

            <div class="form-group">
                <label class="form-label">City name</label>
                <input type="text" class="form-control" placeholder="Enter city name" name="city" autocomplete="off"
                    value=<?php
                echo $city?>>
            </div>

            <div class="form-group">
                <label class="form-label">Postal Code</label>
                <input type="text" class="form-control" placeholder="Enter postal code" name="postal" autocomplete="off"
                    value=<?php
                echo $postal?>>
            </div>

            <div class="form-group">
                <label class="form-label">Street ID</label>
                <input type="text" class="form-control" placeholder="Enter city id" name="streetID" autocomplete="off"
                    value=<?php
                echo $street?>>
            </div>

            <div class="form-group">
                <label class="form-label">House #.</label>
                <input type="text" class="form-control" placeholder="Enter house #." name="house" autocomplete="off"
                    value=<?php
                echo $house?>>
            </div>
            <div class="from-group mb-3">
                <label class="form-group">Trainer</label>
                <select name="Trainer" class="form-control">
                    <option>None</option>
                    <?php echo $options;?>
                </select>
            </div>

            <div class="from-group mb-3">
                <label class="form-group">Session</label>
                <select name="session" class="form-control">
                    <?php echo $options1;?>
                </select>
            </div>

            <div class="from-group mb-3">
                <label class="form-group">Package</label>
                <select name="package" class="form-control">
                    <?php echo $options2;?>
                </select>
            </div>
            <div class="from-group mb-3">
                <label class="form-group">Class</label>
                <select name="class" class="form-control">
                    <?php echo $options3;?>
                </select>
            </div>


            <button type="submit" class="insertbtn" name="submit">Update</button>
        </form>

    </div>
</body>

</html>