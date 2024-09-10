<?php

include './conection.php';

$UID = $_COOKIE['UID'];

if (isset($_POST['FullName']) AND isset($_POST['address']) AND isset($_POST['Age']) AND isset($_POST['telnum']) AND isset($_POST['nearestLocation']) AND isset($_POST['preferredDate']) AND isset($_POST['gender']) AND isset($_POST['weight']) AND isset($_POST['dateOfBirth']) AND isset($_POST['donationCount']) AND isset($_POST['bloodGroup']) AND isset($_POST['bloodGroup'])  AND isset($_POST['illness']) AND isset($_POST['illnessDetails']) AND isset($_POST['pills']) AND isset($_POST['tattoos']) AND isset($_POST['unsafeSex']) AND isset($_POST['abroad']) AND isset($_POST['earPiercing']) AND isset($_POST['earPiercing']) AND isset($_POST['symptoms']) AND isset($_POST['aids1']) AND isset($_POST['aids']) AND isset($_POST['illnesses']) AND isset($_POST['submitbtn'])) {


    $FullName = $_POST['FullName'];
    $address = $_POST['address'];
    $Age= $_POST['Age'];
    $telnum = $_POST['telnum'];
    $email = $_POST['email'];
    $nearestLocation=$_POST['nearestLocation'];
    $preferredDate = $_POST['preferredDate'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $donationCount = $_POST['donationCount'];
    $bloodGroup = $_POST['bloodGroup'];
    $illness = $_POST['illness'];
    $illnessDetails = $_POST['illnessDetails'];
    $pills = $_POST['pills'];
    $tattoos = $_POST['tattoos'];
    $unsafeSex = $_POST['unsafeSex'];
    $abroad = $_POST['abroad'];
    $earPiercing = $_POST['earPiercing'];
    $symptoms = $_POST['symptoms'];
    $aids1 = $_POST['aids1'];
    $aids = $_POST['aids'];
    $illnesses = $_POST['illnesses'];


    $query = "INSERT INTO ap (Firstname,Fullname, Address, Age, mobileNumber, Email, nearestlocation, DonateDate, Sex, Weight, Dob, DonatedTimes, BloodGroup, illness, `If`, pills, tattoos, unsafesex, abroad, earpiercing, symptoms, AIDS, `needle`, illnesses) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("ssssssssssssssssssssssss",$UID, $FullName,$address,$Age,$telnum,$email, $nearestLocation,$preferredDate,$gender,$weight,$dateOfBirth,$donationCount,$bloodGroup,$illness,$illnessDetails,$pills,$tattoos,$unsafeSex,$abroad,$earPiercing,$symptoms,$aids1,$aids,$illnesses);

    if($stmt->execute()){

        echo "<script>alert ('Thank you for your appointment'); window.location='appointmented.php' </script>.";
    }
    else{

        echo 'Unsuccessfull...';
    }
}
?>