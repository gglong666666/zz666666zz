<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
</html>>
<?php
ob_start();
session_start();


if(isset($_POST["userid"])){
	$userid=$_POST["userid"];
	echo $userid;
	echo "歡迎回來";
	$read="SELECT * FROM user WHERE userid= '$userid'";
	$readresult=mysqli_query($link,$read);

		echo "你上次登入時間為：";
		echo "你的登入次數為：";
}
	$userid=$_POST["userid"];
	$userpwd=$_POST["userpwd"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];

//$Link=mysqli_connect("localhost","root","Zz@0910114798","php");
$Link=mysqli_connect("localhost","root","123456","php");
mysqli_query($Link,"set name utf8");

$read="SELECT * FROM things";
$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>帳號</td><td>密碼</td><td>email</td><td>電話</td><td>更新資料</td><td>刪除資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td>";
	echo "<td><a href='profile.php?userid=".$result[0]." & userpwd=".$result[1]." &email=".$result[2]." &phone=".$result[3]."'>更新資料</td>";
	echo "<td><a href='checkdel.php?userid=".$result[0]." & userpwd=".$result[1]." &email=".$result[2]." &phone=".$result[3]."'>刪除資料</a></td>";
	
	echo "</tr>";
}
	echo "</table>";

?>

