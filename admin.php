<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    
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
        <link rel="stylesheet" href="css/admin-styles.css" type="text/css">
       <style>
	   #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 60px;
			color:white;
            background: black;
			text-align:center;
        }
</style>
    </head>
<body>
<?php
include("include/header.php");
?>
<div class="container" style="margin-top:50px;" >
<button class="button"><span><a href="student.php" style="color:#337ab7">DISPLAY STUDENTS</a></span></button><br>
<button class="button"><span><a href="course.php" style="color:#337ab7">DISPLAY COURSES</a></span></button><br>
<button class="button"><span><a href="company.php"style="color:#337ab7">COMPANIES LISTED</a></span></button><br>
<button class="button"><span><a href="placement.php"style="color:#337ab7">PLACEMENT RECORD</a></span></button><br>
<button class="button"><span><a href="eligible.php"style="color:#337ab7">CHECK ELIGIBLILITY</a></span></button><br>
</div>
	<div id="footer">
	Pooja Agarwal, CSE 3H, 38 <br>
	Prayosi Paul, CSE 3H, 39
	</div>

</body>

</html>