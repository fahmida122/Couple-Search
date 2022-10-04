<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','webproject');
if(!$con)
{
	echo 'Connection failed';
}
// get the post records


$cloth="";
if(isset($_POST['cloth']))
    $cloth=$_POST['cloth'];


$salah="";
if(isset($_POST['salah']))
    $salah=$_POST['salah'];


$mahram_nonmahram="";
if(isset($_POST['mahram_nonmahram']))
    $mahram_nonmahram=$_POST['mahram_nonmahram'];



$quran= "";
if(isset($_POST['quran']))
    $quran= $_POST['quran'];



$madhab= "";
if(isset($_POST['madhab']))
    $madhab= $_POST['madhab'];

$song_video= "";
if(isset($_POST['song_video']))
    $song_video= $_POST['song_video'];



$disease="";
if(isset($_POST['disease'])) 
    $disease=$_POST['disease'];


$yourself="";
if(isset($_POST['yourself'])) 
    $yourself=$_POST['yourself'];

$gender="";
if(isset($_POST['gender'])) 
    $gender=$_POST['gender'];

$marital_status="";
if(isset($_POST['marital_status'])) 
    $marital_status=$_POST['marital_status'];



$permanent_address="";
if(isset($_POST['permanent_address'])) 
    $permanent_address=$_POST['permanent_address'];



$sql = "INSERT INTO `form_3` (`cloth`,`salah`, `mahram_nonmahram`,`quran`,`madhab`,`song_video`,
`disease`, `yourself`,`gender`,`marital_status`,`permanent_address`) VALUES ( '$cloth','$salah','$mahram_nonmahram','$quran',
 '$madhab','$song_video','$disease', '$yourself','$gender','$marital_status','$permanent_address')";
 



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