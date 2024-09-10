<?php

    include 'conection.php';
    if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message']) AND isset($_POST['submitbtn'])) // check validation
    {
    $UID = $_COOKIE['UID'];
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Message=$_POST['message'];

 

    $query = "insert into contactus(Firstname,Name, Email, Message) values (?,?, ?, ?)";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("ssss",  $UID, $Name,$Email,$Message); // data type passed

    if($stmt->execute()){

        echo "<script>alert ('Thank you for your message we cantact you soon');window.location='contactus.html'; </script>.";
    }
    else{

        echo 'Unsuccessfull...';
    }
}
?>