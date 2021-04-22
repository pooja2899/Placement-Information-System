<?php
include("connection.php");
if(isset($_POST['insert']))
{
	$file="";
	if(isset($_FILES['file'])){
		$folder="company_image";
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

	$querry="insert into Company set comp_name='".$_POST['comp_name']."',c_image='".$file."',min_marks='".$_POST['min_marks']."'";
	mysqli_query($con,$querry);
	header("location:company.php");
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
<h2>ADD COMPANY</h2>
<form method="post" action="" enctype="multipart/form-data">
<div>
<table>
<tr><td>Company Name:</td><td><input type="text" name="comp_name" value="" /></td></tr>
<tr><td>Profile Picture:</td><td><input type="file" id="file" name="file"></td></tr>
<tr><td>Min_Marks:</td><td><input type="number_format" name="min_marks" value="" /></td></tr>
<tr><td><input type="submit" name="insert" value="INSERT" /></td></tr>
</table>
</div>
</form>
</html>