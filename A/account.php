<?php
$email=$_POST["email"];
$phone=$_POST["phone"];
$userid=$_POST["userid"];
$userpwd=$_POST["userpwd"];

//$link=mysqli_connect("localhost","root","Zz@0910114798","php");
$Link=mysqli_connect("localhost","root","123456","php");
mysqli_query($link,"set name utf8");
$add="INSERT INTO user(email,userid,phone,userpwd) VALUES('$email','$userid','$phone','$userpwd')";
$sql = "SELECT * FROM user WHERE userid = '".$userid."'";
$readresult=mysqli_query($link,$sql);
$result=mysqli_fetch_array($readresult);
if($result[0]=="$userid"){
echo "帳號已使用";
header('refresh:3; url="signup.php"');
}else{
mysqli_query($link,$add);
echo "帳號申辦成功";

header('refresh:3; url="reg.php"');
}
?>
</body>