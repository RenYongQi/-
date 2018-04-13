<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>发布公告</title>
</head>

<body>
<?php
include("conn.php");
session_start();
$user=$_SESSION["user"];

if(isset($_POST["submit"])){
	$contentd=$_POST["contentd"];
    $timed=$_POST["timed"];
    $result=$pdo->query("insert into tb_swzl_admin (named,contentd,timed) values ('$user','$contentd','$timed');");
	if($result){
		echo "<script>alert('发布成功');location.href='/db2/content.php';</script>";
		}
		else
		echo "<script>alert('发布失败，请重新发布');history.back();";
	}


?>
</body>
</html>