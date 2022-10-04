<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="show.css">
</head>
<body >
    <section class="hero">
      <!-- -------Navbar------- -->
      <nav id="navbar" class="sticky">
        <a href="index.html" class="nav-logo">muslimHack</a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul id="menu">
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Ask</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Couple Search</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  <?php




$link = mysqli_connect("localhost", "root", "", "webproject");
   
    
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];



$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];


$sql = "SELECT * FROM form_1 where gender='$gender' AND marital_status='$marital_status' AND Permanent_address='$permanent_address'";



if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
		echo "<p>General Information</p>";
		echo "<br>";
        echo "<table border=2>";
            echo "<tr>";
              //  echo "<th>name</th>";
                // echo "<th>email</th>";
                echo "<td>Your Gender</th>";
                echo "<td>Marital Status</th>";
				echo "<td>Your Present Address </td>";
                echo "<td>Your Permanent Address</td>";
				echo "<td>Your Blood Group</td>";
                echo "<td>Enter Your Birthday</td>";
                echo "<td>Enter Your Height</td>";
				echo "<td>Enter Your Weight </td>";
                echo "<td>Your Occupation</td>";
                echo "<td>Your Monthly Income</td>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               // echo "<td>" . $row['name'] . "</td>";
               // echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['marital_status'] . "</td>";
				echo "<td>" . $row['present_address'] . "</td>";
                echo "<td>" . $row['Permanent_address'] . "</td>";
                echo "<td>" . $row['blood_group'] . "</td>";
                echo "<td>" . $row['birth_date'] . "</td>";
				echo "<td>" . $row['height'] . "</td>";
                echo "<td>" . $row['weight'] . "</td>";
                echo "<td>" . $row['occupation'] . "</td>";
                echo "<td>" . $row['your_monthly_income'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
}


$sql = "SELECT * FROM form_2 where gender='$gender' AND marital_status='$marital_status' AND Permanent_address='$permanent_address'";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		echo "</br>";
		echo "<p>Educational Information</P>";
		echo "</br>";
        echo "<table border=2>";
            echo "<tr>";
                echo "<td>Have you completed SSC?</th>";
                echo "<td>Institution's Name</th>";
                echo "<td>Passing Year</th>";
                echo "<td>Obtained GPA</th>";
				echo "<td>Have you completed HSC? </td>";
                echo "<td>Institution's Name</td>";
                echo "<td>Passing Year</td>";
                echo "<td>Obtained GPA</td>";
				echo "<td>Have you completed Honours? </td>";
                echo "<td>Institution's Name</td>";
                echo "<td>Your Department</td>";
                echo "<td>Passing Year</td>";
				 echo "<td>Obtained CGPA</td>";
                echo "<td>Other Educational Qualifications</td>";
				
				
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ssc'] . "</td>";
                echo "<td>" . $row['institution_name_ssc'] . "</td>";
                echo "<td>" . $row['passing_year_ssc'] . "</td>";
                echo "<td>" . $row['obtained_gpa_ssc'] . "</td>";
				echo "<td>" . $row['bsc'] . "</td>";
                echo "<td>" . $row['institution_name_bsc'] . "</td>";
                echo "<td>" . $row['passing_year_hsc'] . "</td>";
                echo "<td>" . $row['obtained_gpa_hsc'] . "</td>";
				echo "<td>" . $row['hsc'] . "</td>";
                echo "<td>" . $row['institution_name_hsc'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . $row['passing_year_bsc'] . "</td>";
				echo "<td>" . $row['obtained_cgpa_bsc'] . "</td>";
                echo "<td>" . $row['others'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
}


$sql = "SELECT * FROM form_3 where gender='$gender' AND marital_status='$marital_status' AND Permanent_address='$permanent_address'";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		echo "</br>";
		echo "<p>Personal Information</p>";
	echo "</br>";
		
        echo "<table border=2>";
            echo "<tr>";
                echo "<th>What kind of clothes do you wear to go outside?</th>";
                echo "<th>Do you perform five times salah timely?</th>";
                echo "<th>Do you maintain mahram/Non-mahram</th>";
                echo "<th>Can you read Quran?</th>";
				echo "<td>Which madhab do you follow</td>";
                echo "<td>Do you hear or watch any kind of videos which are restricted in Islam?</td>";
                echo "<td>Do you have any physical or mental disease</td>";
                echo "<td>Write something about yourself</td>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['cloth'] . "</td>";
                echo "<td>" . $row['salah'] . "</td>";
                echo "<td>" . $row['mahram_nonmahram'] . "</td>";
                echo "<td>" . $row['quran'] . "</td>";
				echo "<td>" . $row['madhab'] . "</td>";
                echo "<td>" . $row['song_video'] . "</td>";
                echo "<td>" . $row['disease'] . "</td>";
                echo "<td>" . $row['yourself'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
}



$sql = "SELECT * FROM form_4 where gender='$gender' AND marital_status='$marital_status' AND Permanent_address='$permanent_address'";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		echo "</br>";
		echo "<p>Family Information</p>";
	   echo "</br>";
        echo "<table border=2>";
            echo "<tr>";
                //echo "<th>father_name</th>";
                //echo "<th>mother_name</th>";
                echo "<th>Your Father's Occupation</th>";
                echo "<th>Your Mother's Occupation</th>";
				echo "<td>Number of brother's you have </td>";
                echo "<td>Number of sister's you have</td>";
                echo "<td>Total Monthly Income of Your Family</td>";
                echo "<td>Economical condition of your family</td>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                //echo "<td>" . $row['father_name'] . "</td>";
                //echo "<td>" . $row['mother_name'] . "</td>";
                echo "<td>" . $row['father_occupation'] . "</td>";
                echo "<td>" . $row['mother_occupation'] . "</td>";
				echo "<td>" . $row['brother'] . "</td>";
                echo "<td>" . $row['sister'] . "</td>";
                echo "<td>" . $row['monthly_income_of_your_family'] . "</td>";
                echo "<td>" . $row['economical_condition'] . "</td>";
            echo "</tr>";
        }
         echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
}



$sql = "SELECT * FROM form_5 where gender='$gender' AND marital_status='$marital_status' AND Permanent_address='$permanent_address'";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
		echo "</br>";
		echo " <p>Partner Preference</p> ";
	echo "</br>";
        echo "<table border=2>";
            echo "<tr>";
                echo "<th>Age</th>";
                echo "<th>Complexion</th>";
                echo "<th>Minimum Height</th>";
                echo "<th>Minimum Educational Qualification</th>";
				echo "<th>Do you want any kind of dowry?</th>";
                echo "<th>District</th>";
                echo "<th>Marital Status</th>";
                echo "<th>Occupation</th>";
				echo "<th>Economical Condition</th>";
                echo "<th>Short description about what kind of partner you want</th>";
               
				
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['age_partner'] . "</td>";
                echo "<td>" . $row['color_partner'] . "</td>";
                echo "<td>" . $row['height_partner'] . "</td>";
                echo "<td>" . $row['edu_partner'] . "</td>";
				 echo "<td>" . $row['gift_dowry'] . "</td>";
                echo "<td>" . $row['district_partner'] . "</td>";
                echo "<td>" . $row['marital_status_partner'] . "</td>";
                echo "<td>" . $row['occupation_partner'] . "</td>";
				 echo "<td>" . $row['economical_condition_partner'] . "</td>";
				 echo "<td>" . $row['description_partner'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
} 






$sql = "SELECT * FROM form_6 where gender='$gender' AND marital_status='$marital_status' AND Permanent_address='$permanent_address'";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		echo "</br>";
		echo "<p>Contact Information</p>";
		echo "</br>";
        echo "<table border=2>";
            echo "<tr>";
               // echo "<th>guardian_number</th>";
                echo "<th>Have You Took Your Guardian's permission?</th>";
               // echo "<th>your_number</th>";
                //echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               // echo "<td>" . $row['guardian_number'] . "</td>";
                echo "<td>" . $row['guardian'] . "</td>";
                //echo "<td>" . $row['your_number'] . "</td>";
               //echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
}
 
// Close connection


mysqli_close($link);
?>
	
	
	
	
	
</section>	
	

</body>
</html>