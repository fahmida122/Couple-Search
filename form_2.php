<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','webproject');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records




$ssc="";
if(isset($_POST['ssc']))
    $ssc=$_POST['ssc'];





$institution_name_ssc="";
if(isset($_POST['institution_name_ssc']))
    $institution_name_ssc=$_POST['institution_name_ssc'];


$passing_year_ssc="";
if(isset($_POST['passing_year_ssc']))
    $passing_year_ssc=$_POST['passing_year_ssc'];

$obtained_gpa_ssc="";
if(isset($_POST['obtained_gpa_ssc']))
    $obtained_gpa_ssc=$_POST['obtained_gpa_ssc'];


$hsc="";
if(isset($_POST['hsc']))
    $hsc=$_POST['hsc'];


$institution_name_hsc="";
if(isset($_POST['institution_name_hsc']))
    $institution_name_hsc=$_POST['institution_name_hsc'];
$passing_year_hsc="";
if(isset($_POST['passing_year_hsc']))
    $passing_year_hsc=$_POST['passing_year_hsc'];
$obtained_gpa_hsc="";
if(isset($_POST['obtained_gpa_hsc']))
    $obtained_gpa_hsc=$_POST['obtained_gpa_hsc'];







$bsc="";
if(isset($_POST['bsc']))
    $bsc=$_POST['bsc'];

$institution_name_bsc= "";
if(isset($_POST['institution_name_bsc']))
    $institution_name_bsc= $_POST['institution_name_bsc'];

$department="";
if(isset($_POST['department']))
    $department=$_POST['department'];

$passing_year_bsc="";
if(isset($_POST['passing_year_bsc']))
    $passing_year_bsc=$_POST['passing_year_bsc'];

$obtained_cgpa_bsc="";
if(isset($_POST['obtained_cgpa_bsc']))
    $obtained_cgpa_bsc=$_POST['obtained_cgpa_bsc'];






$others="";
if(isset($_POST['others']))
    $others=$_POST['others'];


$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];



$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];




$sql = "INSERT INTO `form_2` (`ssc`, `institution_name_ssc`,`passing_year_ssc`,`obtained_gpa_ssc`,`hsc`,`institution_name_hsc`,
 `passing_year_hsc`, `obtained_gpa_hsc`, `bsc`,`institution_name_bsc`, `department`,`passing_year_bsc`,`obtained_cgpa_bsc`,
 `others`,`gender`,`marital_status`,`permanent_address`) VALUES (  '$ssc','$institution_name_ssc','$passing_year_ssc',
 '$obtained_gpa_ssc','$hsc','$institution_name_hsc','$passing_year_hsc','$obtained_gpa_hsc','$bsc','$institution_name_bsc',
 '$department','$passing_year_bsc','$obtained_cgpa_bsc','$others','$gender','$marital_status','$permanent_address')";
 



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