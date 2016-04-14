<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

<form action="" method="post">

<center>
帳號:<input type="text" name="userid"><br/>
<br/>
密碼:<input type="password" name="userpwd"><br/>
<br/>

<input type="submit" value="登入">
<br/><br/>

<a href="signup.html">申辦帳號</a>
</center>

</form>
<?php

if(isset($_POST["userid"])){
ob_start();
session_start();
//$Link=mysqli_connect("localhost","root","Zz@0910114798","php");
$link=mysqli_connect("localhost","root","123456","php");
mysqli_query($link,"set name utf8");
$userid=$_POST["userid"];
$userpwd=$_POST["userpwd"];
$sql="SELECT * FROM user WHERE userid='$userid' AND userpwd='$userpwd'";
$result=mysqli_query($link, $sql);
$rows=mysqli_num_rows($result);
if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["userid"]=$userid;
	$_SESSION["userpwd"]=$userpwd;

	header('Location:index.php');
	
}else{
	echo "<center>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!你打錯囉!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</center>";
}
}
?>
</html>