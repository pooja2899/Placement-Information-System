<?php
include("connection.php");
if(isset($_POST['click']))
{
	$querry="update Student set Name='".$_POST['Name']."',Address='".$_POST['Address']."',Mail='".$_POST['Mail']."',marks='".$_POST['marks']."',c_id='".$_POST['course']."' where id='".$_REQUEST['id']."'";
	mysqli_query($con,$querry);
}
$querry="select * from Student where id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$querry);
$fetch=mysqli_fetch_object($result);
$querry1="select * from Course";
$result1=mysqli_query($con,$querry1);
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
<a href="student.php">GO TO STUDENTS</a>
<div>
<table>
<tr><td>Name:</td><td><input type="text" name="Name" value="<?php echo $fetch->Name;?>" /></td></tr>
<tr><td>Select Course</td><td><select name="course" id="cars">
<?php while($fetch1=mysqli_fetch_object($result1)){?>
  <option value="<?php echo $fetch1->c_id;?>"<?php if($fetch->c_id==$fetch1->c_id){?> selected="selected"<?php }?>><?php echo $fetch1->c_name;?></option>
<?php }?>
  </select></td></tr>
<tr><td>Address:</td><td><input type="text" name="Address" value="<?php echo $fetch->Address;?>" /></td></tr>
<tr><td>Email Id:</td><td><input type="text" name="Mail" value="<?php echo $fetch->Mail;?>" /></td></tr>
<tr><td>Marks:</td><td><input type="number_format" name="marks" value="<?php echo $fetch->marks;?>" /></td></tr>
<tr><td><input type="submit" name="click" value="UPDATE"/></td></tr>
</table>
</div>
</form>
</html>