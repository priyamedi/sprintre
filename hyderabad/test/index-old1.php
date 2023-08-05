<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="Tests | Sprint Diagnostics">
	<meta name="author" content="Sprint Diagnostics">
	<meta name="format-detection" content="telephone=no">
	<title>Tests | Sprint Diagnostics</title>
	<!-- Stylesheets -->
	<link href="../vendor/slick/slick.css" rel="stylesheet">
	<link href="../vendor/animate/animate.min.css" rel="stylesheet">
	<link href="../icons/style.css" rel="stylesheet">
	<link href="../vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="../images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	
	
	<!-- Google map -->
	

<style>
.bb
{
    border-radius:10px;
	font-size:14px;
	color: #2c53a5;
	padding: 2px 5px;
	text-align:center;
	height:60px;
	border: 2px solid #239fd6;
	margin-bottom:5px;
}
.bb a
{
	color: #2c53a5;	
}
.bb:hover
{
	background-color:#2c53a5;
	
}
.bb:hover a
{
	color:#fff;
	
}


</style>
</head>


	<?php include '../../side-nav.php';?>
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="https://sprintdiagnostics.in/">Home</a>
						<span>Tests</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		
		<!--section-->
		<div class="section page-content-first">
			<div class="container mt-6 mb-4">
				<div class="row" style="padding: 10px;">
		<?php

$servername = "localhost";
$username = "devdb_sprint";
$password = "superherogram9@";
$dbname = "sprint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	echo '<div class="col-md-4 col-lg-4 col-12 " >
						<div class="bb">
						<a href="'. $row["url"].'" >						
							'. $row["title"].'
											
						</a>
						</div>
					</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>


		
					
					
					
					
					
					
					
							
					</div>
					
			</div>
		</div>
		<!--//section-->
		
	<?php include '../../footer.php';?>

</body>

</html>