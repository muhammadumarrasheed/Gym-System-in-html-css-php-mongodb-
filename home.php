<!-- <?php
// if(isset($_POST['submit'])){
//    header("Location: firstpage.php");
//     exit();
// }
?> -->
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
    font-size: 17px;
}

body:before {
    content: '';
    position: fixed;
    width: 100vw;
    height: 100vh;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    opacity: 0.9;
}

.contact-form {
    display: inline-block;
    position: absolute;
    top: 10px;
    left: 820px;
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
    top: 88px;
    font-size: 40px;
    left: 00px;
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


.contact-form .login {
    top: 100px;
    position: absolute;
    width: 70px;
    left: 1508px;
    height: 35px;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    border: none;
    background: red;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}



#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

.content {
    top: 270px;
    position: absolute;
    width: 930px;
    height: 440px;
    left: 150px;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    padding: 20px;
}

#myBtn {
    width: 100px;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    border: none;
    background: red;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}

#myBtn:hover {
    background: #ddd;
    color: white;
}
</style>

<body>

    <video autoplay muted loop id="myVideo">
        <source src="vidgym.mkv" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="content">
        <h1>Fitness is Essentail</h1>
        <p>Being physically and mentally fit is necessary for an individual to live a happy, long life. Typically,
            exercise is one of the best ways to keep a person healthy. Hence, it is always best to find a workout
            routine no matter how busy you are. With the numerous diseases that spread in the world today, many
            individuals realized the essence of workout. Specifically, having a workout routine will give an individual
            the greatest physical, mental, and social benefits. Accordingly, exercise will help you increase energy
            levels, reduce chronic disease risk, lose weight, and help improve brain health and memory. With such
            benefits, you probably will love to do workout routines soon. Luckily, you don’t need to do it yourself as
            various personal trainers, or professional fitness coaches exist to provide the help you need. And joining
            fitness classes is just at your fingertips. Today, we will provide you with ample gym websites design that
            will help fitness enthusiasts and personal trainers craft unique gym websites with innovation.</p>
        <button id="myBtn" onclick="myFunction()">Pause</button>
    </div>

    <script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
    </script>
    <div class="contact-form" method="$POST">
        <button class="login" name="submit"><a href="allLogin.php">Login</button>
        <li class="A"><a href="home.php">Home</a></li>
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <li><a href="contactUs.php">Contact us</a></li>
        <li><a class="active" href="aboutUs.php">About us</a></li>
    </div>
</body>

</html>