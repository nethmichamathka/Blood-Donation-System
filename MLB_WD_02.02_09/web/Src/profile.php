<?php
 include './conection.php';

 $UID = $_COOKIE['UID'];
 $firstname= "";
 $Lastname = "";
 $IDNumber = "";
 $dateofbirth = "";
 $phonenumber = "";
 $emailaddress = "";
 $city ="";

 $sql = "SELECT * FROM signup WHERE Firstname = '".$UID."'";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {

    $firstname=$row ["Firstname"];
    $Lastname = $row ["Lastname"];
    $IDNumber = $row ["IDNumber"];
    $dateofbirth =$row ["DateofBirth"];
    $phonenumber = $row ["Phonenumber"];
    $emailaddress = $row ["Emailaddress"];
    $city =$row ["City"];
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> lifeservarvessals</title>
    <link rel="stylesheet" href="style/profile.css">
</head>
<body >
    <h1 class="txt">lifeservarvessals.com</h1>
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
        <div class="avatarse">
            <img src="photos/avatar1.png" class="avatar">
        </div>

   </header>
	
	<h3 class= "h3" > USER DETAILS</h3> <br><br><br>
	<form action="./profile.php" method="POST">
	    <label class="large-text" style="margin-left: 50px;"> First name </label>
	    <input type="text" id="Fname" class="large-textbox" style="margin-left: 177px;" name="Fname" value="<?php echo "$firstname" ;?>"> 

	    <label class="large-text" style="margin-left: 50px;"> Email address </label>
	    <input type="text" id="email" class="large-textbox" style="margin-left: 80px;" name="email" required value="<?php echo "$emailaddress" ;?>">	<br><br>
	
	    <label class="large-text" style="margin-left: 50px;"> Last name </label> 
	    <input type="text" id="Lname" class="large-textbox" style="margin-left: 178px;" name="Lname" required value="<?php echo "$Lastname" ;?>">  

	    <label class="large-text" style="margin-left: 50px;"> Phone number </label>
	    <input type="text" id="Cno" class="large-textbox" style="margin-left: 79px;" name="Cno" required value="<?php echo "$phonenumber" ;?>"> 		<br><br>

	    <label class="large-text" style="margin-left: 50px;"> Date of Birth </label>
	    <input type="text" id="DOB" class="large-textbox" style="margin-left: 155px;" name="DOB" required value="<?php echo "$dateofbirth" ;?>">

	    <label class="large-text" style="margin-left: 47px;"> City </label>
	    <input type="text" id="city" class="large-textbox" style="margin-left: 163px;" name="city" required value="<?php echo "$city" ;?>"> 	<br><br>

	    <label class="large-text" style="margin-left: 50px;"> ID Number </label>
	    <input type="tel" id="ID" class="large-textbox" style="margin-left: 168px;"name="ID"required value=" <?php echo " $IDNumber";?>"> 

		   <a href="logedin.html"> <button class="custom-button"  style="margin-left: 250px; text-decoration:none;" class="custom-button" name="cancelbtn" > Cancel </a> </button>
		    <button class="custom-button" name="submitbtn"> update </button>
            <input type="submit" name="delete_account" value="Delete My Account">
            
	        <br><br>
    </form>


   <footer>
         <div class="contact-us">
            <h2>Contact Us</h2>
            <p>Email: lifeserver@gmail.com<br>
            Phone: (94)75842586<br>
            Address: sliit,malabe, sri lanka</p>
            <h3>copyright@lifeserver.com</h3>
        </div>
          <div class="help-and-support">
             <a href="#">Help And Support</a>
         </div>
    </footer>

    
</body>
</html>

<?php
if (isset($_POST['Fname']) AND isset($_POST['email']) AND isset($_POST['Lname']) AND isset($_POST['Cno']) AND isset($_POST['DOB']) AND isset($_POST['city']) AND isset($_POST['ID']) AND isset($_POST['submitbtn'])) {
    
    $firstname=$_POST['Fname'];
    $Lastname = $_POST['Lname'];
    $IDNumber = $_POST['ID'];
    $dateofbirth =$_POST['DOB'];
    $phonenumber = $_POST['Cno'];
    $emailaddress = $_POST['email'];
    $city =$_POST['city'];

    $sql = "UPDATE signup SET Firstname = '".$firstname."', Lastname = '".$Lastname."', IDNumber = '".$IDNumber."', DateofBirth = '".$dateofbirth."', Phonenumber = '".$phonenumber."',Emailaddress = '".$emailaddress."',City = '". $city."' WHERE Firstname = '".$UID."'";
    if(mysqli_query($conn, $sql)){
    echo('Success');
    echo('<script>window.location="profile.php";
            alert("Your profile updated successfully...");
    </script>');
    }else {
    echo('Failed');
    }

}
if(isset($_POST['delete_account'])){

    $sql = "DELETE FROM signup WHERE Firstname = '".$UID."'";
    $result = mysqli_query($conn, $sql);

    if($result){

        echo('<script>window.location="./index.html";
                    alert("Your account deleted successfully...");
                    document.cookie = "UID" +"=username; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
                </script>');
    }
}

?>