<?php
include("connection.php");

$querry="select * from Student";
$result=mysqli_query($con,$querry);
if(isset($_REQUEST['del']))
{
	$querry="delete from Student where id='".$_REQUEST['del']."'";
	mysqli_query($con,$querry);
	header("location:student.php");
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
		
		
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/student-styles.css" type="text/css">
     
    </head>
<body>
<h2>STUDENT LIST</h2>
<table>
<tr><th>Student Id</th><th>Name</th><th>Address</th><th>Email</th><th>Profile Picture</th><th>Aggregate Percentage</th><th>Course Name</th><th>Action1</th><th>Action2</th></tr>

<?php while($fetch=mysqli_fetch_object($result)){?>
<tr>
<td>
<?php echo $fetch->id;?>
</td>
<td>
<?php echo $fetch->Name;?>
</td>

<td>
<?php echo $fetch->Address;?>
</td>
<td>
<?php echo $fetch->Mail;?>
</td>
<td>
<img src="student_image/<?php echo $fetch->p_image;?>" style="height:60px;width:85px;">
</td>
<td>
<?php echo $fetch->marks;?>
</td>
<td>
<?php 
$querry1="select c_name from Course where c_id='".$fetch->c_id."'";
$result1=mysqli_query($con,$querry1);
$fetch1=mysqli_fetch_object($result1);
echo $fetch1->c_name;?>
</td>
<td>
<a href="edit_student.php?id=<?php echo $fetch->id;?>">Edit</a>
</td>
<td>
<a href="student.php?del=<?php echo $fetch->id;?>">Delete</a>
</td>
</tr>
<?php }?>
</table>

</body>
<div>
<button class="button"><a href="add_student.php">ADD MORE STUDENTS</a></button>
</div>
</html>