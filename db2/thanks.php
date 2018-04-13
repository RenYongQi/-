<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>感谢信</title>
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
            <li class="active"> <a href="#">感谢信</a> </li>
            <li> <a href="/db2/admin.php">公告</a> </li>
          </ul>
        </div>
      </nav>
    </div>
    
   
    
    <div class="row clearfix">
		<div class="col-md-12 column">
			<form class="form-horizontal" role="form" method="post" action="/db2/thanks_ok.php">
				<div class="form-group">
					 <label for="from" class="col-sm-2 control-label">From</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="from" name="from" required />
					</div>
				</div>
				<div class="form-group">
					 <label for="to" class="col-sm-2 control-label">To</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="to" name="to" required />
					</div>
				</div>
                <div class="form-group">
					 <label for="time" class="col-sm-2 control-label">time</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="time" name="time" required />
					</div>
				</div>
                <div class="form-group">
					 <label for="content" class="col-sm-2 control-label">内容</label>
                     
					<div class="col-sm-10">
                    <textarea style="width:100%; height:80px;" class="form-control" id="content" name="content" required> </textarea>
					</div>
				</div>
                
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default" name="submit">发布</button>
					</div>
				</div>
			</form>
		</div>
	</div>
    
  
      <div class="row clearfix">
    <div class="col-md-1 column"></div>
		<div class="col-md-11 column">
			<blockquote>
				<p style="font-size: 16px;">
					感谢信是重要的礼仪文书，是向帮助、关心和支持过自己的人表示感谢的专业书信，有感谢和表扬双重意思。一方受惠于另一方应及时地表达谢忱，使对方在付出劳动和贡献后得到心理上和精神上的收益。
				</p> <small>百度 <cite>百科</cite></small>
			</blockquote>
		</div>
	</div>
    
</div>
</body>
</html>