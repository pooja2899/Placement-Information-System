<?php
include("connection.php");

$querry="select * from Placement";
$result=mysqli_query($con,$querry);

if(isset($_REQUEST['del']))
{
	$querry="delete from Placement where p_id='".$_REQUEST['del']."'";
	mysqli_query($con,$querry);
	header("location:placement.php");
}
?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
		
        <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
        <title>UEM-Company</title>
		
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
        <link rel="stylesheet" href="css/student-styles.css" type="text/css">
       
    </head>

<table width=50%>
<tr><td>Placement Id</td><td>Company ID</td><td>Course ID</td><td>Status</td><td>Action</td></tr>

<?php while($fetch=mysqli_fetch_object($result)){?>
<tr>
<td>
<?php echo $fetch->p_id;?>
</td>
<td>
<?php echo $fetch->comp_id;?>
</td>
<td>
<?php echo $fetch->c_id;?>
</td>
<td>
<?php if ($fetch->status=='active'){?>
<a href="?status=inactive&id=<?php echo $fetch->p_id;?>">Active</a>
<?php }
else if($fetch->status=='inactive'){?>
<a href="?status=active&id=<?php echo $fetch->p_id;?>">Inactive</a>
<?php }?>	
</td>
<td>
<a href="placement.php?del=<?php echo $fetch->p_id;?>">Delete</a>
</td>
</tr>
<?php }?>
</table>

<div>
<button class="button"><a href="add_placement.php">ADD INTO LIST</a></button>
</div>