<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>注册</title>
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
    <form class="form-horizontal" role="form" method="post" action="/db2/zc_ok.php">
      <div class="form-group">
        <label for="user" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="user" name="user" required="required" />
        </div>
      </div>
      <div class="form-group">
        <label for="pwd" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="pwd" name="pwd" required="required" />
        </div>
      </div>
      <div class="form-group">
        <label for="tel" class="col-sm-2 control-label">电话</label>
        <div class="col-sm-5">
          <input type="tel" class="form-control" id="tel" name="tel" required="required">
        </div>
      </div>
      <div class="form-group">
      <label for="email" class="col-sm-2 control-label">邮箱</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" name="email" required="required">
      </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">注册</button>
          <a class="btn btn-default" href="/db2/index.php" role="button">返回</a> </div>
      </div>
    </form>
    <br>
    <br>
    <blockquote>
      <p> Things are lost don't panic, everybody come to help! </p>
      <small>任<cite>永琪</cite></small> </blockquote>
  </div>
</div>
</body>
</html>