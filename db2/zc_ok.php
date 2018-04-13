<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
</head>

<body>
<?php
include("conn.php");
if(isset($_POST["submit"])){
	$user=$_POST["user"];
	$pwd=$_POST["pwd"];
	$tel=$_POST["tel"];
	$email=$_POST["email"];
	$result=$pdo->query("insert into tb_swzl_user (user,pwd,tel,email) values ('$user','$pwd','$tel','$email')");
	if($result){
		echo "<script>alert('注册成功');location.href='/db2/index.php';</script>";
		}
	else
	echo "<script>alert('注册失败，请重新注册');history.back();</script>";	
	}

?>
</body>
</html>