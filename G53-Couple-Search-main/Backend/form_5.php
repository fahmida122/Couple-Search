<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','webproject');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records



$age_partner="";
if(isset($_POST['age_partner']))
    $age_partner=$_POST['age_partner'];

$color_partner="";
if(isset($_POST['color_partner']))
    $color_partner=$_POST['color_partner'];





$height_partner="";
if(isset($_POST['height_partner']))
    $height_partner=$_POST['height_partner'];


$edu_partner="";
if(isset($_POST['edu_partner']))
    $edu_partner=$_POST['edu_partner'];

$gift_dowry="";
if(isset($_POST['gift_dowry']))
    $gift_dowry=$_POST['gift_dowry'];








$district_partner="";
if(isset($_POST['district_partner']))
    $district_partner=$_POST['district_partner'];


$marital_status_partner="";
if(isset($_POST['marital_status_partner']))
    $marital_status_partner=$_POST['marital_status_partner'];

$occupation_partner="";
if(isset($_POST['occupation_partner']))
    $occupation_partner=$_POST['occupation_partner'];


$economical_condition_partner="";
if(isset($_POST['economical_condition_partner']))
    $economical_condition_partner=$_POST['economical_condition_partner'];




$description_partner="";
if(isset($_POST['description_partner']))
    $description_partner=$_POST['description_partner'];


$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];


$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];



$sql = "INSERT INTO `form_5` (`age_partner`,
`color_partner`, `height_partner`,`edu_partner`,`gift_dowry`,`district_partner`,`marital_status_partner`,

 `occupation_partner`, `economical_condition_partner`, `description_partner`,`gender`,`marital_status`,`permanent_address`) VALUES ( '$age_partner',

 '$color_partner','$height_partner','$edu_partner',
 
 '$gift_dowry','$district_partner','$marital_status_partner','$occupation_partner',
 '$economical_condition_partner','$description_partner','$gender','$marital_status','$permanent_address')";






// database insert SQL code


// insert in database 
$rs = mysqli_query($con, $sql);

echo "hello ";
if($rs)
{
	echo "Contact Records Inserted";
}
else 
{
	echo "failed to insert ";
}




?>