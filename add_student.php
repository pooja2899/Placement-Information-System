<?php
include("connection.php");
if(isset($_POST['insert']))
{
	$file="";
	if(isset($_FILES['file'])){
		$folder="student_image";
		$file_exts=array("jpg","JPG","JPEG","bmp","jpeg","gif","png","doc","docx","pdf");
		$value=explode(".",$_FILES["file"]["name"]);
		$upload_exts=end($value);
		if((($_FILES["file"]["type"]== "image/gif")
		|| ($_FILES["file"]["type"]== "image/jpeg")
	    || ($_FILES["file"]["type"]== "image/jpg")
		||  ($_FILES["file"]["type"]== "image/JPG")
		|| ($_FILES["file"]["type"]== "image/JPEG")
		|| ($_FILES["file"]["type"]== "image/png")
		|| ($_FILES["file"]["type"]== "image/pjpeg")
		|| ($_FILES["file"]["type"]== "application/msword")
		|| ($_FILES["file"]["type"]== "application/msword")
		|| ($_FILES["file"]["type"]== "application/pdf")
		&& ($_FILES["file"]["size"]< 2000000000)
		&& in_array($upload_exts, $file_exts)))
		{   
		if($_FILES["file"]["error"] > 0)
		{
		
		}
		else{
				if(file_exists("$folder/" .
				$_FILES["file"]["name"]))
				{
					 echo "<div class='error'?"."(".$_FILES["file"]["name"].")".
					 " already exists. "."</div>";
				}
				else{
					$ran=md5(time().rand());
					$file=$ran.".".$upload_exts;
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"$folder/".$file);
				}
			}
		}
	}

	$querry="insert into Student set Name='".$_POST['Name']."',Address='".$_POST['Address']."',Mail='".$_POST['Mail']."',c_id='".$_POST['course']."',p_image='".$file."',marks='".$_POST['marks']."'";
	mysqli_query($con,$querry);
	header("location:student.php");
}
$querry="select * from Course where status='active'";
$result=mysqli_query($con,$querry);
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

<h2>ADD STUDENT</h2>
<form method="post" action="" enctype="multipart/form-data">
<div>
<table>
<tr><td>Name:</td><td><input type="text" name="Name" value="" /></td></tr>
<tr><td>Select Course</td><td><select name="course" id="cars">
<?php while($fetch=mysqli_fetch_object($result)){?>
    <option value="<?php echo $fetch->c_id;?>"><?php echo $fetch->c_name;?></option>
<?php }?>
  </select></td></tr>
<tr><td>Address:</td><td><input type="text" name="Address" value="" /></td></tr>
<tr><td>Email Id:</td><td><input type="text" name="Mail" value="" /></td></tr>
<tr><td>Marks:</td><td><input type="number_format" name="marks" value="" /></td></tr>
<tr><td>Profile Picture:</td><td><input type="file" id="file" name="file"></td></tr>
<tr><td><input type="submit" name="insert" value="INSERT" /></td></tr>
</table>
</div>
</form>

</html>