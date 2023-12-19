<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="post.css">
</head>
<body >
    <section class="hero">
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
	
	<div class="row">
		  
		     <div class="col-lg-3">
			  
			  <p class="p">Profiles</p>
			  
			 
			 
			 </div>
			 
			 
			 			 <div class="col-lg-9">
						 
						 <div class="post_form"> 
						 
						 <form method="POST" action="post_database.php" class="form">

         <textarea type="text" rows="10" cols="15" class="input-field" placeholder="What's On Your Mind?" name="post" ></textarea>


            <button type="submit" class="submit-btn">Post</button>

               </form>
						 </div>
						 
						 <table  class="post_form">
<tr >

<td >

<?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '','webproject');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT post FROM post";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo  $row["post"];
	echo "<br>";
	echo "<br>";
	echo "<br>";
  }
} else {
  echo "";
}

mysqli_close($conn);
?>	


</td>
</tr>
</table>



						 
						 
						 
						 
						 
						 
						 </div>
			 
			 
 </div>			 

	
	</section>
	</body>
</html>