<?php
include("connection.php");
if(isset($_POST['click']))
{
	$querry="update Course set c_name='".$_POST['Name']."' where c_id='".$_REQUEST['id']."'";
	mysqli_query($con,$querry);
}
$querry="select * from Course where c_id='".$_REQUEST['id']."'";
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
<a href="course.php">GO TO COURSES</a>
<div>
<table>
<tr><td>Name:</td><td><input type="text" name="Name" value="<?php echo $fetch->c_name;?>" /></td></tr>
<tr><td><input type="submit" name="click" value="UPDATE"/></td></tr>
</table>
</div>
</form>
</html>