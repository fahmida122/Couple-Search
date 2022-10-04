<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','webproject');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records


$name="";
if(isset($_POST['name'])) 
    $name=$_POST['name'];


$email="";
if(isset($_POST['email']))
    $email=$_POST['email'];



$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];

$present_address="";
if(isset($_POST['present_address'])) 
    $present_address=$_POST['present_address'];


$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];


$blood_group="";
if(isset($_POST['blood_group']))
    $blood_group=$_POST['blood_group'];


$birth_date="";
if(isset($_POST['birth_date']))
    $birth_date=$_POST['birth_date'];


$height = "";
if(isset($_POST['height']))
    $height = $_POST['height'];

$weight="";
if(isset($_POST['weight']))
    $weight=$_POST['weight'];

$occupation="";
if(isset($_POST['occupation']))
    $occupation=$_POST['occupation'];


$your_monthly_income="";
if(isset($_POST['your_monthly_income']))
    $your_monthly_income=$_POST['your_monthly_income'];





$sql = "INSERT INTO `form_1` (`name`, `email`,`gender`,`marital_status`,`present_address`,`permanent_address`,`blood_group`,
`birth_date`, `height`,`weight`,`occupation`,`your_monthly_income` ) VALUES ( '$name','$email', '$gender',
'$marital_status','$present_address','$permanent_address','$blood_group' ,'$birth_date', '$height','$weight',
'$occupation','$your_monthly_income' )";
 



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