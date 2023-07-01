<?php
require_once('connect.php');

$sql = "SELECT * FROM `tbl_contact` WHERE 1=1";

$result = mysqli_query($con, $sql);

$totalitems = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<style>
	a.hello:link{
		background-color:powderblue;
		border-radius: 40px;
		text-decoration: none;
		display: flex;
		justify-content: center;
		align-items:center ;
		width: 150px;
			margin-left: 500px;
			padding: 20px;
			font-size: 15x;

	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container" style="width:1124px; margin:0 auto;">
<div class="py-5 text-center">
        
        <h2>Edit All Records</h2>
        
      </div>
	  
<?php

if($totalitems > 0)
{
	
	$rowheading='<hr/><div class="row "  style="font-weight:bold">
	  <div class="col-md-1">
	  Sl. No.
	  </div>
	  <div class="col-md-2">
	  Name
	  </div>
	  <div class="col-md-3">
	  Email
	  </div>
	   <div class="col-md-2">
	  Phone
	  </div>
	  <div class="col-md-2">
	  Role
	  </div>
	   <div class="col-md-2">
	  Action
	  </div>'; 
	  
	$rowstring=''; // for storing html plus database records
	/*  Run the while loop and make a string of your records  */
		while($row = mysqli_fetch_assoc($result)){
			/* Each row come with each single line of database  */
			/* Assign each database field records in a variable  */
			$id=$row['Id'];
			$fldName=$row['fldName'];
			$fldEmail=$row['fldEmail'];
			$fldPhone=$row['fldPhone'];
			$fldMessage=$row['fldMessage'];

			/* Now take row of html with 6 column */
			 $rowstring.='<hr/><div class="row">
	  <div class="col-md-1">'.$id.'</div>
	  <div class="col-md-2">'.$fldName.'</div>
	  <div class="col-md-3">'.$fldEmail.'</div>
	  <div class="col-md-2">'.$fldPhone.'</div>
	  <div class="col-md-2">'.$fldMessage.'</div>
	  <div class="col-md-2"><a href="update.php?id='.$id.'">Update</a> | <a href="delete.php?id='.$id.'">Delete</a></div>
	  
          </div>';
	}
	echo $rowheading.$rowstring; // concat row heading and data string and print.
}
else
{
	echo "There is no records in our database?";
	
}
?>
<a class="hello" href="navigation.html">Home</a>

</div>
</body>
</html>
