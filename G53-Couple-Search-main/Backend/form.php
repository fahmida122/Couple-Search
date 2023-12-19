
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





$sql1 = "INSERT INTO `form_1` (`name`, `email`,`gender`,`marital_status`,`present_address`,`permanent_address`,`blood_group`,
`birth_date`, `height`,`weight`,`occupation`,`your_monthly_income` ) VALUES ( '$name','$email', '$gender',
'$marital_status','$present_address','$permanent_address','$blood_group' ,'$birth_date', '$height','$weight',
'$occupation','$your_monthly_income' )";
 



// database insert SQL code


// insert in database 
$rs1 = mysqli_query($con, $sql1);

echo "hello ";
if($rs1)
{
	echo "Contact Records Inserted1";
}
else 
{
	echo "failed to insert1 ";
}
mysqli_close($con);

?>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con2 = mysqli_connect('localhost', 'root', '','webproject');
if(!$con2)
{
	echo 'Connection failed';
}
// get the post records


// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');




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




$sql2 = "INSERT INTO `form_2` (`ssc`, `institution_name_ssc`,`passing_year_ssc`,`obtained_gpa_ssc`,`hsc`,`institution_name_hsc`,
 `passing_year_hsc`, `obtained_gpa_hsc`, `bsc`,`institution_name_bsc`, `department`,`passing_year_bsc`,`obtained_cgpa_bsc`,
 `others`,`marital_status`) VALUES (  '$ssc','$institution_name_ssc','$passing_year_ssc',
 '$obtained_gpa_ssc','$hsc','$institution_name_hsc','$passing_year_hsc','$obtained_gpa_hsc','$bsc','$institution_name_bsc',
 '$department','$passing_year_bsc','$obtained_cgpa_bsc','$others','$marital_status' )";
 



// database insert SQL code


// insert in database 
$rs2 = mysqli_query($con2, $sql2);

echo "hello ";
if($rs2)
{
	echo "Contact Records Inserted2";
}
else 
{
	echo "failed to insert 2";
}

?>

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con3 = mysqli_connect('localhost', 'root', '','webproject');
if(!$con3)
{
	echo 'Connection failed';
}
// get the post records

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

//new

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





$sql3 = "INSERT INTO `form_3` (`cloth`,`salah`, `mahram_nonmahram`,`quran`,`madhab`,`song_video`,
`disease`, `yourself`) VALUES ( '$cloth','$salah','$mahram_nonmahram','$quran',
 '$madhab','$song_video','$disease', '$yourself')";
 



// database insert SQL code


// insert in database 
$rs3 = mysqli_query($con3, $sql3);

echo "hello ";
if($rs3)
{
	echo "Contact Records Inserted3";
}
else 
{
	echo "failed to insert 3";
}

?>

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con4 = mysqli_connect('localhost', 'root', '','webproject');
if(!$con4)
{
	echo 'Connection failed';
}
// get the post records


// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


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




$sql4 = "INSERT INTO `form_4` (`father_name`,`mother_name`,`father_occupation`,`mother_occupation`,

`brother`, `sister`,`monthly_income_of_your_family`,`economical_condition` ) VALUES ( '$father_name',
'$mother_name','$father_occupation','$mother_occupation' ,'$brother', '$sister','$monthly_income_of_your_family',

'$economical_condition' )";






// database insert SQL code


// insert in database 
$rs4 = mysqli_query($con4, $sql4);

echo "hello ";
if($rs4)
{
	echo "Contact Records Inserted4";
}
else 
{
	echo "failed to insert4 ";
}
?>

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con5 = mysqli_connect('localhost', 'root', '','webproject');
if(!$con5)
{
	echo 'Connection failed';
}
// get the post records


// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


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



$sql5 = "INSERT INTO `form_5` (`age_partner`,
`color_partner`, `height_partner`,`edu_partner`,`gift_dowry`,`district_partner`,`marital_status_partner`,

 `occupation_partner`, `economical_condition_partner`, `description_partner`) VALUES ( '$age_partner',

 '$color_partner','$height_partner','$edu_partner',
 
 '$gift_dowry','$district_partner','$marital_status_partner','$occupation_partner',
 '$economical_condition_partner','$description_partner')";






// database insert SQL code


// insert in database 
$rs5 = mysqli_query($con5, $sql5);

echo "hello ";
if($rs5)
{
	echo "Contact Records Inserted5";
}
else 
{
	echo "failed to insert 5";
}


?>

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con6 = mysqli_connect('localhost', 'root', '','webproject');
if(!$con6)
{
	echo 'Connection failed';
}
// get the post records


// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


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


$sql6 = "INSERT INTO `form_6` (`guardian_number`, `guardian`,`your_number`, `email`) VALUES ( '$guardian_number',
 
 '$guardian','$your_number','$email' )";






// database insert SQL code


// insert in database 
$rs6 = mysqli_query($con6, $sql6);

echo "hello ";
if($rs6)
{
	echo "Contact Records Inserted6";
}
else 
{
	echo "failed to insert 6";
}




?>