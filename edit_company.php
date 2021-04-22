<?php
include("connection.php");
if(isset($_POST['click']))
{
	$querry="update Company set comp_name='".$_POST['comp_name']."',min_marks='".$_POST['min_marks']."' where comp_id='".$_REQUEST['id']."'";
	mysqli_query($con,$querry);
	header("location:company.php");
}
$querry="select * from Company where comp_id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$querry);
$fetch=mysqli_fetch_object($result);
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
<form method="post" action="">
<a href="company.php">GO TO COMPANIES</a>
<div>
<table>
<tr><td>Name:</td><td><input type="text" name="comp_name" value="<?php echo $fetch->comp_name;?>" /></td></tr>
<tr><td>Min_marks:</td><td><input type="number_format" name="min_marks" value="<?php echo $fetch->min_marks;?>" /></td></tr>
<tr><td><input type="submit" name="click" value="UPDATE"/></td></tr>
</table>
</div>
</form>
</html>