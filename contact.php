<?php
require_once('connect.php');
if(isset($_POST['txtName']))
{
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone','$txtMessage')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<h1>Contact Records Inserted</h1>";
}
}
else
{
	echo "<h1>Are you a genuine visitor</h1>";
	
}
?>

<br/>
<a href="contact.html">Add New Record</a><br><br>
<a href="navigation.html">Home</a>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background-image: linear-gradient(to bottom right, blue , white);
		}
		@keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    h1 {
      animation-name: fadeIn;
      animation-duration: 2s;
    }
		h1{
			text-align:center ;
			padding-top: 300px;
		}
		a:link{
			text-decoration: none;
			display: flex;
			justify-content: center;
			background-color: powderblue;
			border-radius: 20px;
			align-items: center;
			width: 150px;
			margin-left: 620px;
			padding: 20px;
			font-size: 20px;
		}
		a:hover{
			background-color: grey;
		}
	</style>
</head>
<body>
</body>
</html>

