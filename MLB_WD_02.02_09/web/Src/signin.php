<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> lifeservarvessals</title>
    <link rel="stylesheet" href="style/signin.css">
</head>
<body >
    <h1 class="txt">lifeservarvessals.com</h1>
    <!-- header -->
   <header>
        <img src="photos/2.png" class="logo">

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="process.html">Process</a>
            <a href="appointment.html">appoinment</a>
            <a href="gallery.html">Gallery</a>
            <a href="AboutUs.html">about us</a>
            <a href="contactus.html">contact us</a>
        </nav>

        <div class="signup">
            <a href="signup.html">sign up</a>
            <a href="signin.php">sign in</a>
        </div>
    
   </header>

   <!-- Register Button -->
    <!-- <button type="button" id="register">Register</button> -->
<form action="signin.php" method="post">
    <!-- Login Form Container -->
    <div class="container">
        <!-- Login Form -->
        <div class="login">
            <!-- Login Title -->
            <h3 class="title">User SIgn IN</h3>
            <!-- Username Input -->
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" placeholder="Username" required name="username">
            </div>
            <!-- Password Input -->
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" placeholder="Password" required name="password">
            </div>
            <!-- Login Button -->
            <button type="submit" class="login-btn">LOGIN</button>
            <!-- Link to Registration -->
            <a href="#" class="haveAcc">Don't you have an account?</a>
            <!-- Register Button -->
            <a href="signup.html" type="button" id="reg-btn"><center>REGISTER</center></button></a>
            <!-- Create Account Section -->
            <div class="create">
                <!-- Arrow Icon -->
                <i class="ri-arrow-right-fill"></i>
            </div>
        </div>
    </div>
    </form>


  <!-- footer -->
   <footer> 
    <div class="contact-us">
        <h2>Contact Us</h2>
        <p>Email: lifeserver@gmail.com<br>
        Phone: (94)75842586<br>
        Address: sliit,malabe, sri lanka</p>
        <h3>copyright@lifeserver.com</h>
    </div>
    <div class="help-and-support">
            <a href="#">Help And Support</a>
    </div>
</footer>
</body>
</html>

<?php

if(isset($_COOKIE['UID'])) {
    echo('<script>window.location="logedin.html"</script>');
}


    if (count($_POST) > 0) {
        include 'conection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from signup where Firstname = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("s",$username);
    $stmt->execute();

    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){

        $data = $stmt_result->fetch_assoc();
        if($data['Password'] === $password){

            // $userID = $data['Userid'];
            setcookie('UID', $username, time() + (86400), "/");
            if($username != "admin"){
                echo "<script>alert ('signin Successfully....'); window.location='logedin.html';</script>";
            }
            else{
                echo "<script>alert ('Logged as an Admin....'); window.location='admin.php';</script>";
            }
        }
        else{

            echo "<script>alert ('Invalid Email or Password..<br>Enter again...'); window.location='signin.php';</script>";
        }
    }
    else{

        echo "<script>alert ('Invalid Email or Password..<br>Enter again...'); window.location='signin.php';</script>";
    }
    }
?>