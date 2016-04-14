<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
</html>
<?php
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
	echo "<td><a href='mathingupdate.php?thingsno=".$result[1]."'>更新資料</td>";
	echo "<td><a href='checkdel.php?thingsno=".$result[1]."'>刪除資料</a></td>";
	
	echo "</tr>";
}
	echo "</table>";

echo "<br/>";
?>

