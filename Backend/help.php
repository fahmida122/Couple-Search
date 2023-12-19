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




$reason="";
if(isset($_POST['reason']))
    $reason=$_POST['reason'];


$number="";
if(isset($_POST['number']))
    $number=$_POST['number'];


$account = "";
if(isset($_POST['account']))
    $account = $_POST['account'];




// database insert SQL code
$sql = "INSERT INTO `help` (`name`, `email`,`phone`,`reason`,`number`,`account`) VALUES ( '$name'
, '$email','$phone','$reason','$number','$account')";

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