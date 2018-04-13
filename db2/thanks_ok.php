<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
include("conn.php");
if(isset($_POST["submit"])){
	$from=$_POST["from"];
	$to=$_POST["to"];
	$time=$_POST["time"];
	$content=$_POST["content"];
	$result=$pdo->query("insert into tb_swzl_thanks (fromhow,tohow,content,time) values ('$from','$to','$content','$time');");
	if($result){
		echo "<script>alert('发布成功');location.href='/db2/content.php';</script>";
		}
	else
	echo "<script>alert('发布失败，请重新发布');history.back();</script>";	
	}
?>

</body>
</html>