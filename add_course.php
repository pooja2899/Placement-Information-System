<?php
include("connection.php");
if(isset($_POST['insert']))
{
	$querry="insert into Course set c_name='".$_POST['Name']."'";
	mysqli_query($con,$querry);
	header("location:course.php");
}

?>

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
		
        <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
        <title>UEM-Admin</title>
		
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="css/footer-style.css">
		
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/add-styles.css" type="text/css">
       
    </head>
<h2>ADD COURSE DETAILS</h2>
<form method="post" action="">
<div>
<table>
<tr><td>Course Name:</td><td><input type="text" name="Name" value="" /></td></tr>
<tr><td><input type="submit" name="insert" value="INSERT" /></td></tr>
</table>
</div>
</form>
</html>