<?php
include "mongoCon.php";
if(isset($_POST['submit'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  $email = validate($_POST['email']);
  $name = validate($_POST['name']);
  $password = validate($_POST['password']);
  $phone = validate($_POST['phoneNum']);
  $city = validate($_POST['city']);
  $postal = validate($_POST['postal']);
  $street = validate($_POST['streetID']);
  $house = validate($_POST['house']);
  $trainer = validate($_POST['Trainer']);
  $session = validate($_POST['session']);
  $package = validate($_POST['package']);
  $class = validate($_POST['class']);
  $sql =  "SELECT * from `trainer` where trainername = '$trainer'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $trainerEmail = $row['traineremail'];
  $sql =  "SELECT * from `session` where sessionname = '$session'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $sessionid = $row['sessionid'];
  $sql =  "SELECT * from `class` where classname = '$class'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $classid = $row['classid'];
  $sql =  "SELECT * from `package` where packagename = '$package'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $packageid = $row['packageid'];
  if(empty($name)){
    header("Location: userSignupForm.php?error = Name is required");
    exit();
  }else if(empty($password)){
    header("Location: uuserSignupForm.php?error = Password is required");
    exit();
  }else if(empty($email)){
    header("Location: userSignupForm.php?error = Email is required");
    exit();
  }else if(empty($phone)){
    header("Location: userSignupForm.php?error = Phone number is required");
    exit();
  }else if(empty($city)){
    header("Location: userSignupForm.php?error = City is required");
    exit();
  }else if(empty($postal)){
    header("Location: userSignupForm.php?error = Postal is required");
    exit();
  }else if(empty($house)){
    header("Location: userSignupForm.php?error = House is required");
    exit();
}else if(empty($house)){
    header("Location: userSignupForm.php?error = House is required");
    exit();
}else if(empty($house)){
    header("Location: userSignupForm.php?error = House is required");
    exit();
}else if(empty($house)){
    header("Location: userSignupForm.php?error = House is required");
    exit();
}else if(empty($house)){
    header("Location: userSignupForm.php?error = House is required");
    exit();
  }else{
    $trainerEmail = "$trainer"."@gmail.com";
  if($MRFitness->user->InsertOne(['userEmail' => $email, 'username' => $name, 'password' => $password, 'phoneNum' => $phone, 
    'city' => $city, 'postacode' => $postal,'streetID' => $street, 'houseNum' => $house, 'trainername' => $trainer,
    'classname' => $class, 'packagename' => $package,
    'sessionname' => $session, 'trainerEmail' => $trainerEmail])){
        $MRFitness->plan->InsertOne(['userEmail' => $email, 'palanname' => $planfit]);
    $MRFitness->fitness->InsertOne(['userEmail' => $email, 'fitnessstatus' => $planfit]);
    header("Location: allLogin.php");
  }else{
    header("Location: allLogin.php?error = Already user with similar email sign uped");
  }
}
}
?>

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
    height: 1620px;
    padding: 80px 40px;
}

.container .insertbtn {
    top: 1495px;
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

.container option {
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

.container label {
    color: rgb(255, 255, 255);
    font-size: 18px;
    padding: 10px;
}

.form {
    color: rgb(255, 255, 255);
    font-size: 18px;
    padding: 10px;
    position: absolute;
    font-size: 25px;
    color: red;
    font-weight: bolder;
    left: 220px;
    width: 230px;
    height: 340px;
    top: 859px;
}
</style>

<body>
    <div class="contact-form">
        <li class="A"><a href="home.php">Home</a></li>
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <li><a class="active" href="contactUs.php">Contact us</a></li>
        <li><a href="aboutUs.php">About us</a></li>
    </div>
    <div class="container my-5">
        <!-- <img alt="" class="avatar" src="https://st2.depositphotos.com/1557108/7754/v/600/depositphotos_77546730-stock-illustration-vector-illustration-fitness-gym-logo.jpg"> -->
        <form method="post">
            <div class="form-group">
                <label class="title">User Sign Up Form</label>
            </div>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email address" name="email"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter password" name="password" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="phoneNum"
                    autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">City name</label>
                <input type="text" class="form-control" placeholder="Enter city name" name="city" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Postal Code</label>
                <input type="text" class="form-control" placeholder="Enter postal code" name="postal"
                    autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Street ID</label>
                <input type="text" class="form-control" placeholder="Enter city id" name="streetID" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">House #.</label>
                <input type="text" class="form-control" placeholder="Enter house #." name="house" autocomplete="off">
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
            <button name="submit" class="insertbtn">SignUp</button>
        </form>

    </div>
</body>

</html>