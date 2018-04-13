<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>发布</title>
</head>

<body>
<?php

include("conn.php");
if(isset($_POST["submit"])){
	$items=$_POST["items"];
	$telephone=$_POST["telephone"];
	$named=$_POST["named"];
	$described=$_POST["described"];
	$time=$_POST["time"];
	$result=$pdo->query("insert into tb_swzl_find (items,telephone,named,described,time) values ('$items','$telephone','$named','$described','$time');");
	if($result){
		echo "<script>alert('发布成功');location.href='/db2/find.php';</script>";
		}
	else
	echo "<script>alert('发布失败，请重新发布');history.back();</script>";	
	}
?>

</body>
</html>