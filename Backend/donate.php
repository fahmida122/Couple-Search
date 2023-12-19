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


$phone="";
if(isset($_POST['phone'])) 
    $phone=$_POST['phone'];




$address="";
if(isset($_POST['address']))
    $address=$_POST['address'];


$amount="";
if(isset($_POST['amount']))
    $amount=$_POST['amount'];


$donate = "";
if(isset($_POST['donate']))
    $donate = $_POST['donate'];




$others="";
if(isset($_POST['others']))
    $others=$_POST['others'];





$account="";
if(isset($_POST['account']))
    $account=$_POST['account'];


// database insert SQL code
$sql = "INSERT INTO `donate` (`name`, `email`,`phone`,`address`,`amount`,`donate`,`others`,`account`) VALUES ( '$name', '$email','$phone','$address','$amount','$donate','$others','$account')";

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