<?php
 include 'conection.php';

 $UID = $_COOKIE['UID'];

 $sql = "SELECT * FROM contactus WHERE Firstname = '".$UID."'";
 $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> lifeservarvessals</title>
    <link rel="stylesheet" href="style/contactus.css">
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

        <div class="signup">
            <a href="signup.html">sign up</a>
            <a href="signin.php">sign in</a>
        </div>
    
    </header>

   
   <div class="contact-form">
    <h2>Contact Us</h2>

    
<?php 

if(!isset($_POST['updatebtn'])){

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { // check loop session
   
       $Name=$row ["Name"];
       $Email = $row ["Email"];
       $Message = $row ["Message"];
       $InquiryID = $row ["InquiryID"];
   
   
       ?>


   <div style="border: solid black 2px; margin-bottom:10px; padding:20px;">
     <P> InquiryID : <?php echo "$InquiryID" ;?> </P> <br>
       <P> Name : <?php echo "$Name" ;?> </P> <br>
       <P> Email : <?php echo "$Email" ;?> </P> <br>
       <P> Message : <?php echo "$Message" ;?> </P> <br>
       <form action="contacted.php" method="post">
        <input type="hidden" name="InquiryID" value="<?php echo $InquiryID ?>" />
        <input type="submit" value="Delete My message" name="delete_btn">
       <input type="submit" value="Update My message" name="updatebtn">
        </form>
       </div>



       <?php
    }
   }
}

?>

<?php

if(isset($_POST['updatebtn']) && $_POST['updatebtn'] === 'Update My message'){ // when click update button is clicked update message
    
    $postInquiryID = $_POST['InquiryID'];

    $sqlget = "SELECT * FROM contactus WHERE InquiryID = '".$postInquiryID."'";
    $resultget = mysqli_query($conn, $sqlget);

    if (mysqli_num_rows($resultget) > 0) {
        // output data of each row
        while($rowget = mysqli_fetch_assoc($resultget)) {
       
           $Nameget =$rowget ["Name"];
           $Emailget = $rowget ["Email"];
           $Messageget = $rowget ["Message"];
           $InquiryIDget = $rowget ["InquiryID"];

?>
   
    <form action="contacted.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required value="<?php echo "$Nameget" ;?>">

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $Emailget ;?>">

        <label for="message">Message:</label>
        <textarea id="message" name="message" required><?php echo $Messageget;?></textarea>

        <input type="hidden" name="InquiryIDupdate" value="<?php echo $InquiryIDget ?>" />

        <input type="submit" value="Update" name="updatebtn">
        <input type="submit" value="Cancel">
       
    </form>

    <?php
        }}
} 
?>
</div>

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



if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message']) AND isset($_POST['updatebtn'])) {
    
    $Nameupdate =$_POST['name'];
    $Emailupdate = $_POST['email'];
    $Messageupdate = $_POST['message'];
    $InquiryIDupdate = $_POST['InquiryIDupdate'];

    $sql = "UPDATE `contactus` SET `Name`='$Nameupdate',`Email`='$Emailupdate',`Message`='$Messageupdate' WHERE `InquiryID`='$InquiryIDupdate'";
    if(mysqli_query($conn, $sql)){
    echo('Success');
    echo('<script>window.location="profile.php";
            alert("Your profile updated successfully...");
    </script>');
    }else {
    echo('Failed');
    }

}
if(isset($_POST['delete_btn'])){

        $postInquiryID = $_POST['InquiryID'];
     $sql = "DELETE FROM contactus WHERE InquiryID = '".$postInquiryID."'";
    $result = mysqli_query($conn, $sql);

    if($result){

        echo('<script>window.location="./contacted.php";
                    alert("Your massage deleted successfully...");
                </script>');
    }
}

?>