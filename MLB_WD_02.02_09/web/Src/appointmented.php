<?php
 include 'conection.php';

 $UID = $_COOKIE['UID'];
 $FullName = "";
 $address = "";
 $Age = "";
 $telnum= "";
 $email= "";
 $nearestLocation= "";
 $preferredDate= "";
 $gender = "";
 $weight = "";
 $dateOfBirth = "";
 $donationCount = "";
 $bloodGroup = "";
 $illness= "";
 $illnessDetails= "";
 $pills= "";
 $tattoos= "";
 $unsafeSex= "";
 $abroad= "";
 $earPiercing= "";
 $symptoms= "";
 $aids1= "";
 $aids= "";
 $illnesses= "";


 $sql = "SELECT * FROM ap WHERE Firstname = '".$UID."'";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
 // output data to row
 while($row = mysqli_fetch_assoc($result)) {

    // pass values to column 
    $FullName=$row ["Fullname"];
    $address = $row ["Address"];
    $Age = $row ["Age"];
    $telnum= $row ["mobileNumber"];
    $email= $row ["Email"];
    $nearestLocation= $row ["nearestlocation"];
    $preferredDate= $row ["DonateDate"];
    $gender = $row ["Sex"];
    $weight = $row ["Weight"];
    $dateOfBirth = $row ["Dob"];
    $donationCount = $row ["DonatedTimes"];
    $bloodGroup = $row ["BloodGroup"];
    $illness = $row ["illness"];
    $illnessDetails = $row ["If"];
    $pills = $row ["pills"];
    $tattoos = $row ["tattoos"];
    $unsafeSex = $row ["unsafesex"];
    $abroad = $row ["abroad"];
    $earPiercing = $row ["earpiercing"];
    $symptoms = $row ["symptoms"];
    $aids1 = $row ["AIDS"];
    $aids = $row ["needle"];
    $illnesses = $row ["illnesses"];
    
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> lifeservarvessals</title>
    <link rel="stylesheet" href="style/appointment.css">
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

   <!--මෙතන ඔයාලගේ කෝඩ් ටයිප් කරන්න  හෙඩර් ෆුටර් වෙනස් කරන්න එපා.  -->

   
   <!-- Page 1 -->
  <form action="./appointmented.php" method="post">
   <section class="container">
    <header>BLOOD DONATION</header>
        <div class="box1">
            <p><strong>Read Carefully</strong></p>
            <p>Before giving blood, you must fill out a confidential medical history form. Inquiries are made about behaviours that are known to raise the risk of contracting bloodborne illnesses, which are diseases that are communicated through blood.</p>
            <p>Due to the potential for bloodborne infections, not everyone is able to donate blood. Blood donation is not permitted for those who fall into the following categories</p>
            
            <ul>
                <li>Individuals with a congenital lack of coagulation factor</li>
                <li>individuals who have tested positive for HIV</li>
                <li>individuals who have had sex in the past for money or drugs</li>
                <li>People who have taken steroids, injectable medicines, or other pharmaceuticals not on a doctor's prescription</li>
            </ul>

            <p>After making a donation, you relax and have a quick bite while sitting in an observation area. You may leave after 15 minutes.</p>

            <ul>
                <li>Increase your fluid intake after your blood donation.</li>
                <li>Refrain from heavy lifting or severe exercise for roughly five hours.</li>
                <li>If you feel lightheaded, lie down with your feet up until the feeling passes.</li>
                <li>For the following five hours, keep your bandage on and dry. After removing the bandage, if bleeding occurs, apply pressure to the area and lift your arm to halt the flow of blood.</li>
                <li>During the first 24 hours, if bruising develops, regularly apply a cold pack to the region.</li>
                <li>To replace the iron lost during blood donation, think about including foods high in iron in your diet.</li>
            </ul>
        </div>
    </div>
</section><br><br><br>
    

   <!-- Page 2 (DONATE BLOOD) -->
             <div>
                <section class="container">
                        <header>APPOINTMENT</header>
                    <div class="box">
                        <label>Full name</label>
                        <input type="text" placeholder="Enter Full Name"  required  name="FullName" value="<?php echo "$FullName" ;?>"/>
                    </div>

                    <div class="box">
                        <label>Address:</label>
                        <input type="text" name="address" rows="4" cols="50" placeholder="address"required value=" <?php echo "$address" ;?>">
                    </div>

                    <div class="box">
                        <label>Age</label>
                        <input type="text" placeholder="Age" required  name="Age" value="<?php echo "$Age" ;?>"/>
                    </div>

                    <div class="box">
                    <lable>mobile Number</lable>
                    <input type="telnum" placeholder="Mobile Number" maxlength="10" required name="telnum" value="<?php echo "$telnum" ;?>"/>
                    </div>

                    <div class="box">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" required  name="email" value="<?php echo "$email" ;?>"/>
                    </div>

                    <div class="box">
                    <label>Select nearest location</label>
                    <select name="nearestLocation" required value="<?php echo "$nearestLocation" ;?>">
                    <option value="Location 1">colombo</option>
                    <option value="Location 2">gampaha</option>
                    <option value="Location 3">malabe</option>
                    </select>
                    </div>

                    <div class="box">
                    <label>Select date you prefer to donate</label>
                    <input type="date" name="preferredDate" required value="<?php echo "$preferredDate" ;?>"> 
                        </div>
                    </section>   
                 </div>
                        <br><br>


    

                    <!-- Page 3 (DONATE BLOOD) -->
                    
                        <section class="container">
                            <header>BLOOD DONATION</header>

                                <div class="box">
                                    <label>Sex</label>
                                    <select name="gender" required value="<?php echo " $gender" ;?>">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                    </select>
                                </div>

                                <div class="box">
                                    <label>Weight</label>
                                    <input type="number" name="weight" min="52" max="90" required value="<?php echo "$weight" ;?>">
                                </div>

                                <div class="box">
                                        <label>Date of Birth:</label>
                                        <input type="date" name="dateOfBirth" required value="<?php echo "$dateOfBirth" ;?>">
                                </div>

                                <div class="box">
                                    <label>How many times you have donated:</label>
                                    <input type="number" name="donationCount" min="0" max="60" required value="<?php echo "$donationCount" ;?>">
                                </div>

                                <div class="box">
                                <label>Select Blood Group (One selection only)</label>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="A+" checked="checked" disabled>
                                <label>A+</label>
                                </div>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="A-" checked="checked" disabled>
                                <label>A-</label>
                                </div>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="B+" checked="checked" disabled>
                                <label>B+</label>
                                </div>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="B-" checked="checked" disabled>
                                <label>B-</label>
                                </div>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="AB+" checked="checked" disabled>
                                <label >AB+</label>
                                </div>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="AB-" checked="checked" disabled>
                                <label >AB-</label>
                                </div>

                                <div class="row">
                                <input type="radio" name="bloodGroup" value="O+" checked="checked" disabled>
                                <label >o+</label>
                                </div>

                                <div class="row">
                                <input type="radio"  name="bloodGroup" value="O-" checked="checked" disabled>
                                <label >o-</label>
                                </div>
                                </div>
                        
                        </section><br><br>

                            <!-- Page 4 (DONATE BLOOD) -->
                            <section class="container">
                                <header>BLOOD DONATION</header>
                                    <div class="box">
                                        <p>Have you had any illness in the past week?</p>
                                        <label>
                                            <input type="radio" name="illness" value="Yes" disabled> Yes
                                        </label>
                                        <label>
                                            <input type="radio" name="illness" value="No" disabled> No
                                        </label>
                                    </div>

                                    <div class="box">
                                        <p>If 'yes', what was it?</p>
                                        <textarea name="illnessDetails" rows="4" cols="50" disabled></textarea>
                                    </div>

                                    <div class="box">
                                        <p>Have you had any kind of pills in the last six months?</p>
                                        <label>
                                            <input type="radio" name="pills" value="Yes" disabled> Yes
                                        </label>
                                        <label>
                                            <input type="radio" name="pills" value="No" disabled> No
                                        </label>
                                    </div>

                                    <div class="box">
                                        <p>Have you had tattoos in the last six months?</p>
                                        <label>
                                            <input type="radio" name="tattoos" value="Yes" disabled> Yes
                                        </label>
                                        <label>
                                            <input type="radio" name="tattoos" value="No" disabled> No
                                        </label>
                                    </div>

                                    <div class="box">
                                        <p>Have you had unsafe sex in the last three months?</p>
                                        <label><input type="radio" name="unsafeSex" value="Yes" disabled> Yes</label>
                                            
                                        <label><input type="radio" name="unsafeSex" value="No" disabled> No</label>
                            
                                            
                                </div>

                                    <div class="box">
                                        <p>Were you abroad in the last six months?</p>
                                        <label>
                                            <input type="radio" name="abroad" value="Yes" disabled> Yes
                                        </label>
                                        <label>
                                            <input type="radio" name="abroad" value="No" disabled> No
                                        </label>
                                    </div>
                            
                        </section><br><br><br>

                            <!-- Page 5 (DONATE BLOOD) -->
                            

                            <section class="container">
                                <header>BLOOD DONATION</header>
                                    <div class="box">
                                        <p>Have you had ear piercing in the last six months?</p>
                                            <label><input type="radio" name="earPiercing" value="Yes" disabled> Yes</label>
                                            <label><input type="radio" name="earPiercing" value="No" disabled>  No</label>

                                    </div>

                                    
                            <p>Have you ever felt these symptoms after donating blood (check all that apply)</p>
                                <div class="row2">
                                    <label>
                                        <input type="radio" name="symptoms" value="Vomiting" disabled> Vomiting
                                    </label>
                                </div>
                                <div class="row2">
                                    <label>
                                        <input type="radio" name="symptoms" value="Dizzy" disabled> Dizzy
                                    </label>
                                </div>
                                <div class="row2">
                                    <label>
                                        <input type="radio" name="symptoms" value="Nausea" disabled> Nausea
                                    </label>
                                </div>
                                <div class="row2">
                                    <label>
                                        <input type="radio" name="symptoms" value="Faint" disabled> Faint
                                    </label>
                                </div>
                                <div class="row2">
                                    <label>
                                        <input type="radio" name="symptoms" value="None" disabled> None
                                    </label>
                                </div> 
                            </div>
                        </section>
                    <br><br>

                <!-- Page 6(DONATE BLOOD) -->
                
                <section class="container">
                <header>BLOOD DONATION</header>

                <div class="box">
                    <p>Do you suffer from AIDS?</p>
            
                <div class="aid">
                <label>
                    <input type="radio" name="aids1" value="Yes" disabled> Yes
                    <input type="radio" name="aids1" value="No" disabled> No
                </label>
            

             <p>Have you ever injected yourself with a used needle?</p>
                <div class="aid">
                    <label>
                        <input type="radio" name="aids" value="Yes" disabled> Yes
                        <input type="radio" name="aids" value="No" disabled> No
                    </label>
                </div><br><br>

                <div>
                <p>Do you have or had these illnesses?</p>
             </div>
                <div class="aid">
                    <label>
                        <input type="radio" name="illnesses" value="Asthma"disabled> Asthma
                    </label>
                </div>
                <div class="aid">
                <label>
                    <input type="radio" name="illnesses" value="Pneumonia"disabled> Pneumonia
                </label>
                </div>
                <div class="aid">
                <label>
                    <input type="radio" name="illnesses" value="Dengue" disabled> Dengue
                </label>
                </div>
                <div class="aid">
                <label>
                    <input type="radio" name="illnesses" value="Malaria" disabled> Malaria
                </label>
                </div>
                <div class="aid">
                <label>
                    <input type="radio" name="illnesses" value="Diabetes" disabled> Diabetes
                </label>
                </div>

                <div class="aid">
                 <p>Confirm that the above information is true:</p>
                     <label>
                        <input type="checkbox" name="confirmInformation" value="Yes" disabled> Yes, I Confirm 
                        </label>
                    </div>
                 </div><div class="submitbtn">
                    <input type="submit" value="Update My message" name="updatebtn">
                     <input type="submit" value="Delete My message" name="delete_btn">
                    </div>
                    </div>
                </div></section>
          <br><br><br>
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

$UID = $_COOKIE['UID'];

//check values
if (isset($_POST['FullName']) AND isset($_POST['address']) AND isset($_POST['Age']) AND isset($_POST['telnum']) AND isset($_POST['nearestLocation']) AND isset($_POST['preferredDate']) AND isset($_POST['gender']) AND isset($_POST['weight']) AND isset($_POST['dateOfBirth']) AND isset($_POST['donationCount'])  AND isset($_POST['updatebtn'])) {
    
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
    //update db colmns
    $sql = "UPDATE ap SET  Fullname = '".$FullName."', Address = '".$address."', Age = '".$Age. "' , mobileNumber = '".$telnum."', Email = '". $email."', nearestlocation = '".$nearestLocation."', DonateDate = '".$preferredDate."',Sex = '".$gender."',Weight = '".$weight."',Dob = '".$dateOfBirth."',DonatedTimes = '".$donationCount."'  WHERE Firstname = '".$UID."'";
    if(mysqli_query($conn, $sql)){
    echo('Success');
    echo('<script>window.location="./appointmented.php";
            alert("Your profile updated successfully...");
    </script>');
    }else {
    echo('Failed');
    }

}//when click delete btn wht to do
if(isset($_POST['delete_btn'])){

    $sql = "DELETE FROM ap WHERE Firstname = '".$UID."'";
    $result = mysqli_query($conn, $sql);

    if($result){

        echo('<script>window.location="./appointment.html";
                    alert("Your massage deleted successfully...");
                </script>');
    }
}

?>