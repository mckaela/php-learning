<?php
$username = $_POST['username'];
$password = $_POST['password'];
if ($username=="" || $password=="") {
	echo "Username and password required for login.";
	echo "<a href='login.html'>Login</a>";
	die();
}
$link = mysqli_connect("localhost","root","123","login") 
	or die("Unable to connect. <a href='login.html'>Try again</a>");
$query = "Select * from users where username='$username' and password='$password'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);

if ($row['username']==$username && $row['password']==$password) {
	echo "Welcome user";
}
else {
	echo "Wrong username/password";
	echo "<a href='login.html'>Login</a>";
}
?>