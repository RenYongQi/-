<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆成功</title>
</head>



<body>
<?php
include("conn.php");
if(isset($_POST["submit"])){
	$user=$_POST["user"];
	$pwd=$_POST["pwd"];
	$result=$pdo->query("SELECT * from tb_swzl_user where user='$user' and pwd='$pwd';");
    $info=$result->fetch(PDO::FETCH_OBJ);
	if($info){
		session_start();
		$_SESSION["user"]=$user;
		$_SESSION["pwd"]=$pwd;
		echo "<script>alert('登陆成功');location.href='/db2/content.php';</script>";
		}
	else
	    echo "<script>alert('账号或密码错误');history.back();</script>";	
	}
	else
	echo "<script>alert('2222');</script>";
?>
</body>
</html>