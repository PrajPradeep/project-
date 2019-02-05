<!DOCTYPE html>
<html>
<head>
	<title>result</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>

table {
	
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
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
	<table >
	<tr>
		<th>Name</th>
		<th>Number</th>
		<th>Location</th>
	</tr>
<?php 
if(isset($_POST['submit'])){
	$BG=$_POST['BG'];
	$CT=$_POST['CT'];
	$con=mysql_connect("localhost","root","" );
	if(!$con){
		die('could not connect:'.mysql_error());
	}
	mysql_select_db("login_test",$con);

	$run=mysql_query("SELECT * FROM members");
	while ($row=mysql_fetch_array($run)) {
		$showfname=$row[0];
		$showlname=$row[1];
		$shownumber=$row[5];
		$showlocation=$row[6];
		if ($BG==$row[4] && $row[6]==$CT) {
		
			echo "<tr>
						<td>$showfname $showlname</td>
						<td>$shownumber</td>
						<td>$showlocation</td>

			</tr>
			<bt>";
		}
	}
}
	?>
	</table>
</body>
</html>
	

 