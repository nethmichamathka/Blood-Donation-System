<?php

    include 'conection.php';

    $username = $_POST['Fname'];
    $password = $_POST['Password'];
    $Lastname = $_POST['Lname'];
    $IDNumber= $_POST['ID'];
    $dateofbirth = $_POST['DOB'];
    $phonenumber = $_POST['Cno'];
    $city=$_POST['city'];
    $emailaddress = $_POST['email'];
    $userType = "user";


    $query = "insert into signup(Firstname, Lastname, DateofBirth, IDNumber, Emailaddress, Phonenumber, City,Password) values (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("sssssiss",$username,$Lastname,$dateofbirth,$IDNumber,$emailaddress, $phonenumber,$city,$password);

    if($stmt->execute()){

        echo "<script>alert ('Thank you for registered. Now you can Login'); window.location='signin.php' </script>.";
    }
    else{

        echo 'Unsuccessfull...';
    }
?>