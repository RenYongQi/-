<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>失物招领</title>
<link href="/db2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="/db2/bootstrap/js/jQuery.js"></script>
<script src="/db2/bootstrap/js/bootstrap.min.js"></script>
<style>
* {
	padding: 0px;
	margin: 0px;
}
html, body {
	width: 100%;
	height: 100%;
}
body {
	height: 100%;
	background: url(/db2/img/bg1.png) no-repeat;
	background-size:cover;
	width: 100%;
}
</style>
</head>

<body>
<div class="container">
  <div class="row clearfix" style="margin-top: 200px;">
    <div class="col-md-3 column"></div>
    <div class="col-md-9 column">
      <h3> .失物招领系统. </h3>
      <br>
      <br>
      <br>
      <form class="form-horizontal" role="form" method="post" action="/db2/dl_ok.php">
        <div class="form-group">
          <label for="user" class="col-sm-2 control-label">用户名</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="user" name="user" required />
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="col-sm-2 control-label">密码</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" id="pwd" name="pwd" required />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="submit">登陆</button>
            <a class="btn btn-default" href="/db2/zc.php" role="button">注册</a> </div>
        </div>
      </form>
      <br>
      <br>
      <blockquote>
        <p> Things are lost don't panic, everybody come to help! </p>
        <small>任<cite>永琪</cite></small> </blockquote>
    </div>
  </div>
</div>
<div class="row clearfix">
  <div class="col-md-3 column"></div>
  <div class="col-md-9 column"> <a id="modal-317677" href="#modal-container-317677" role="button" class="btn" data-toggle="modal">查看管理员账号</a>
    <div class="modal fade" id="modal-container-317677" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"> 管理员 </h4>
          </div>
          <div class="modal-body"> 账号：任永琪
          <br>
        密码：ryq19970210
           </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>