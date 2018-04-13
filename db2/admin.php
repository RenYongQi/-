<!doctype html>
<!--判断是否为管理员用户-->
<?php
include("conn.php");
session_start();
$user=$_SESSION["user"];
$result=$pdo->query("select * from tb_swzl_user WHERE admin='yes' and user='$user';");
$info=$result->fetch(PDO::FETCH_OBJ);
if($info){
	
	}
	else 
	echo "<script>alert('不是管理员用户');history.back();</script>";
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理</title>
<link href="/db2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="/db2/bootstrap/js/jQuery.js"></script>
<script src="/db2/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="background-color: #545652; height:28px;"> <span style="line-height:28px;color:#d5d5d5;font-size: 12px;">Tips:涓滴之水成海洋，颗颗爱心变希望。</span> </div>
  </div>
</div>

<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="/db2/content.php">首页</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li> <a href="/db2/lost.php">丢失物品</a> </li>

            <li> <a href="/db2/find.php">拾到物品</a> </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li> <a href="/db2/thanks.php">感谢信</a> </li>
            <li class="active"> <a href="#">公告</a> </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
<div class="row clearfix">
		<div class="col-md-12 column">
			<form class="form-horizontal" role="form" method="post" action="/db2/admin_ok.php">
                
                <div class="form-group">
					 <label for="contentd" class="col-sm-2 control-label">公告</label>
                     
					<div class="col-sm-10">
                    <textarea style="width:100%; height:100px;" class="form-control" id="contentd" name="contentd" required> </textarea>
					</div>
				</div>
                <div class="form-group">
					 <label for="timed" class="col-sm-2 control-label">时间</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="timed" name="timed" required />
					</div>
				</div>
                
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default" name="submit" id="submit">发布公告</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>
</body>
</html>