<?php
if(isset($_POST['name'])){
$servername="localhost";
$username="root";
$password="";
$dbname="ktrtravelform";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection to this db failed due to".mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql="INSERT INTO travelform (name,age,gender,email,phone) VALUES('$name','$age','$gender','$email','$phone')";
//echo $sql;
echo "<br>";
if($conn->query($sql) == true)
{
	//echo "Succesfully inserted";
}
else
{
	echo "Error:<br> $conn->error";
}
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>first project travel form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h3>welcome to srm kattankulathur travel form</h3>
		<h4>enter details and submit</h4>
		<form action="sindexs.php" method="post">
			<label>Name</label>
			<input type="text" name="name" id="name" placeholder=" John Smith">
			<label>Age</label>
			<input type="text" name="age" id="age"  placeholder=" 34">
			<label>Gender</label>
			<input type="text" name="gender" id="gender" placeholder=" male/female">
			<label>Email</label>
			<input type="email" name="email" id="email" placeholder=" JohnSmith@gmail.com">
			<label>Phone number</label>
			<input type="text" name="phone" id="phone" placeholder=" 925634552">
			<button class="btn">Submit</button>
		</form>
		click here to check entries
		<a href="entries.php">Entries</a>
	</div>
	<script src="index.js"></script>
</body>
</html>
