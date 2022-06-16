<!DOCTYPE html>
<html lang="en">
<head>
<title>Form</title>
</head>
<body>

<?php
$isPost=false;
$user="";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["user"]!="")
		$user=$_POST["user"];
	//echo "button clicked!";
}
?>
<form action="form second page.php" method="post">
<h1 style="background-color:navy;color:white;text-align:center;">Registration</h1> 
<hr>
<br>
<label for="user"> Name: </label><br>
<input type="text" id="user" name="user" placeholder="User Name">
<?php
if($isPost==true && $user=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br>
<br>
<label for="email">Email:</label><br>
<input type="email" id="email" name="usermail" placeholder="User Mail" required> 
<br>
<br>
<label for="pass">Password:</label><br>
<input type="password"id="pass"name="password"placeholder="password">
<br>
<br>
<label for="phn">Phone:</label><br>
<select name="code">
<option value="+880">+880</option>
<option value="+990">+990</option>
<option value="+110">+110</option>
</select>
<input type="number"id="phn"name="phone"placeholder="123456789" required>
<br><br>
Gender:<br>
<input type="radio"id="gnd1"name="gender">
<label for="gnd1"> Male </label>
<input type="radio"id="gnd2"name="gender">
<label for="gnd2"> Female </label>
<br>
<br>
<label for="date">Date of Birth:</label><br>
<input type="date"id="date"name="dob">
<br>
<br>
<label for="time">Time:</label><br>
<input type="time"id="time"name="tm"><br>
<br>
<br>
<label for="file">Choose Photo: </label>
<input type="file"id="file"name="f1">
<br>
<br>
<input type ="submit"value="Send">
<input type ="reset"value="Reset">
</body>
</html>