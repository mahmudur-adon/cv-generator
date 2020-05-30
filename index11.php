<?php 
session_start();
?>
<html>
<head>
</head>
<body>
<?php 
if(isset($_SESSION['username']))
{
	echo "Welcome ".$_SESSION['username'];

?>

<a href="logout.php">Logout</a>
<?php
}
else
{
	Header("location:login.php");
}
?>
<a href>index.php</a>
</body>
</html>