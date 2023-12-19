<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','webproject');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records



$father_name="";
if(isset($_POST['father_name'])) 
    $father_name=$_POST['father_name'];

$mother_name="";
if(isset($_POST['mother_name'])) 
    $mother_name=$_POST['mother_name'];


$father_occupation="";
if(isset($_POST['father_occupation'])) 
    $father_occupation=$_POST['father_occupation'];




$mother_occupation="";
if(isset($_POST['mother_occupation']))
    $mother_occupation=$_POST['mother_occupation'];


$brother="";
if(isset($_POST['brother']))
    $brother=$_POST['brother'];


$sister = "";
if(isset($_POST['sister']))
    $sister = $_POST['sister'];




$monthly_income_of_your_family="";
if(isset($_POST['monthly_income_of_your_family']))
    $monthly_income_of_your_family=$_POST['monthly_income_of_your_family'];





$economical_condition="";
if(isset($_POST['economical_condition']))
    $economical_condition=$_POST['economical_condition'];


$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];



$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];



$sql = "INSERT INTO `form_4` (`father_name`,`mother_name`,`father_occupation`,`mother_occupation`,

`brother`, `sister`,`monthly_income_of_your_family`,`economical_condition`,`gender`,`marital_status`,`permanent_address` ) VALUES ( '$father_name',
'$mother_name','$father_occupation','$mother_occupation' ,'$brother', '$sister','$monthly_income_of_your_family',

'$economical_condition' ,'$gender','$marital_status','$permanent_address')";






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