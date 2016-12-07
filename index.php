<!DOCTYPE html>
<html>
<head>
	<title>Demo by Chirag</title>
</head>
<body>
<h1>Try these</h1>
<form method="post">
	<input type="text" name="fname" placeholder="Firstname"></br>
	<input type="text" name="middlename" placeholder="Firstname"></br>
	<input type="text" name="lname" placeholder="Firstname"></br>
	<input type="submit" name="submit" value="Add">
</form>
</body>
</html>


<?php 
if(isset($_POST['submit'])){
	echo 'fist name' . $_POST['fname'];
	echo 'middle name' . $_POST['middlename'];
	echo 'last name' . $_POST['lname'];
}
?>