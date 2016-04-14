<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
</html>
<?php
$thingsno=$_GET["thingsno"];
//$Link=mysqli_connect("localhost","root","Zz@0910114798","php");
$Link=mysqli_connect("localhost","root","123456","php");
$del="DELETE FROM user WHERE userid='".$userid."' AND userpwd='".$userpwd."' AND email='".$email."' AND phone='".$phone."'";

mysqli_query($Link,$del);
//讀取資料
$read="SELECT * FROM user";
$readresult=mysqli_query($Link,$read);

	echo "<a href='reg.php'>返回登入頁面</a><br/>";
?>