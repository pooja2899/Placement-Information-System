<?php
include("connection.php");
if(isset($_POST['insert']))
{
	$querry="insert into Placement set comp_id='".$_POST['company']."',c_id='".$_POST['course']."'";
	mysqli_query($con,$querry);
	header("location:placement.php");
	
}
$querry1="select * from Course where status='active'";
$querry2="select * from Company where status='active'";
$result1=mysqli_query($con,$querry2);
$result2=mysqli_query($con,$querry1);
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
<h2>ADD PLACEMENT RECORD</h2>
<form method="post" action="">
<div>
<table>
<tr><td>Select Company</td><td><select name="company" id="cars">
<?php while($fetch=mysqli_fetch_object($result1)){?>
    <option value="<?php echo $fetch->comp_id;?>"><?php echo $fetch->comp_name;?></option>
<?php }?>
  </select></td></tr>
<tr><td>Select Course</td><td><select name="course" id="cars">
<?php while($fetch=mysqli_fetch_object($result2)){?>
    <option value="<?php echo $fetch->c_id;?>"><?php echo $fetch->c_name;?></option>
<?php }?>
  </select></td></tr>
<tr><td><input type="submit" name="insert" value="INSERT" /></td></tr>
</table>
</div>
</form>
</html>