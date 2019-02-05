<!DOCTYPE html>
<html>
<head>
	<title>redistered</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
	p{
		font-size: 5vh;
		text-align: center;
	}
	table {
		
	  border-collapse: collapse;
	  width: 100%;
	}

	th, td {
	  text-align: center;
	  padding: 8px;
	  overflow: hidden;
	}

	tr:nth-child(even){background-color: #f5f5f570}

	th {
	  background-color:#4fd45454;
	  color: black;
	}
</style>


</head>
<body>
	<h1><a href="../html/index.html">Blood Donor </a></h1>
<?php
if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$BG=$_POST['BG'];
		$phone=$_POST['phone'];
		$CT=$_POST['CT']; 

	$con=mysql_connect("localhost","root","" );
	if(!$con){
		die('could not connect:'.mysql_error());
	}
	mysql_select_db("login_test",$con);
	 $query = "INSERT Into members (First_Name, Last_Name,email, Gender, Blood_group, Mobile_number, Location) VALUES( '$fname','$lname','$email','$gender','$BG','$phone','$CT')";
	 if(!mysql_query($query,$con)){
	 	die('error in inserting records'.mysql_error());
	 }
	 else{
	 	echo "<p>data inserted successfully<p>";
	 	echo"<table>
		 	<tr>
		 		<th>Name:</th>
		 		<td>$fname $lname </td>
		 	</tr>
		 	<tr>
		 		<th>email:</th>
		 		<td>$email</td>	
		 	</tr>
		 	<tr>
		 	<th>Gender:</th>
		 	<td>$gender</td>
		 	</tr>
		 	<tr>
		 	<th>Name:</th>
		 	<td>$email</td>
		 	</tr>
		 	<tr>
		 	<th>Blood Group:</th>
		 	<td>$BG</td>
		 	</tr>
		 	<tr>
		 	<th>Mobile Number:</th>
		 	<td>$phone</td>
		 	</tr>
		 	<tr>
		 	<th>Location:</th>
		 	<td>$CT</td>
		 	</tr>
		 	
	 	</table>";
	 }
	$sql = "DELETE FROM members WHERE First_Name='pradeep";


}

 ?>
</body>
</html>
