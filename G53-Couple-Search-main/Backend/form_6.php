<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','webproject');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records

$guardian_number= "";
if(isset($_POST['guardian_number']))
    $guardian_number= $_POST['guardian_number'];

$guardian="";
if(isset($_POST['guardian']))
    $guardian=$_POST['guardian'];

$your_number="";
if(isset($_POST['your_number']))
    $your_number=$_POST['your_number'];

$email="";
if(isset($_POST['email']))
    $email=$_POST['email'];


$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];


$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];



$sql = "INSERT INTO `form_6` (`guardian_number`, `guardian`,`your_number`, `email`,`gender`,`marital_status`,`permanent_address`) VALUES ( '$guardian_number',
 
 '$guardian','$your_number','$email','$gender','$marital_status','$permanent_address' )";






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