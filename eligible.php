<?php
include("connection.php");
$query = "select * from student";
$students = mysqli_query($con, $query);
$students1 = mysqli_query($con, $query);

if (isset($_POST["studId"])) {
  $query = "select * from student where id='" . $_POST["studId"] . "'";
  $res = mysqli_query($con, $query);
  $student = mysqli_fetch_object($res);

  $query1 = "select * from placement, course, company where placement.c_id=course.c_id and placement.comp_id=company.comp_id and placement.c_id = '" . $student->c_id . "' and company.min_marks<=" . $student->marks . "";
  $companies = mysqli_query($con, $query1);
}
?>
<head><meta charset="utf-8">
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
        
        
	
	<style>
body {
	margin:0px;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #e6f0fa;
	}
.heading{
	text-align:center;
	marign-top:50px;
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: middle;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.grid-container {
	margin-top:50px;
	margin-left:auto;
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
  padding: 10px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

.outer{
	border: 3px solid #5c6d7d;
}

.inner{
	text-align:center;
	font-weight:bold;
}
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
<div class="heading">
<h1 style="margin-top:80px;">STUDENT ELIGIBILITY</h1>
</div>
<div class="grid-container">
<div class="outer">
<div class="inner">
<p> Select student's name and Mail ID:</p>
</div>
<form method="POST">
  <select name="studId">
    <?php while ($fetch = mysqli_fetch_object($students)) { ?>
      <option value="<?php echo $fetch->id; ?>" <?php echo isset($_POST["studId"]) && $fetch->id == $student->id ? "selected" : "" ?>><?php echo $fetch->Name; ?></option>
    <?php } ?>
  </select>
</form>

<form method="POST">
  <select name="studId">
    <?php while ($fetch = mysqli_fetch_object($students1)) { ?>
      <option value="<?php echo $fetch->id; ?>" <?php echo isset($_POST["studId"]) && $fetch->id == $student->id ? "selected" : "" ?>><?php echo $fetch->Mail; ?></option>
    <?php } ?>
  </select><br><br>
  <button type="submit" value="check">Check</button>
</form>
</div>

<div class="outer">
<div class="inner">
<p> Company list in which the selected Student is eligible:<br></p>
</div>
<?php if (isset($_POST["studId"])) { ?>
  <ul>
    <?php while ($fetch = mysqli_fetch_object($companies)) {  ?>
      <li><?php echo $fetch->comp_name; ?></li>
    <?php } ?>
	</ul>
	<div class="inner">
	<p> The details of selected student:<br></p>
	</div>
	<div class="inner-table">
	<table>
	<tr><th>Student Id</th><th>Name</th><th>Email</th><th>Address</th><th>Profile Picture</th></tr>
	<tr>
	<td>
	<?php echo $student->id?>
	</td>
	<td>
	<?php echo $student->Name?>
	</td>
	<td>
	<?php echo $student->Mail?>
	</td>
	<td>
	<?php echo $student->Address?>
	</td>
	<td>
    <img src="student_image/<?php echo $student->p_image;?>" style="height:70px;width:85px;">
    </td>
    </tr>
    </table>
	</div>
    <?php } ?>
	</div>
	</div>
	<div id="footer">
	Pooja Agarwal, CSE 3H, 38 <br>
	Prayosi Paul, CSE 3H, 39
	</div>
		</body>

	