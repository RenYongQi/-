<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>发布拾到物品</title>
<link href="/db2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="/db2/bootstrap/js/jQuery.js"></script>
<script src="/db2/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style="background-color: #545652; height:28px;">
<span style="line-height:28px;color:#d5d5d5;font-size: 12px;">Tips:涓滴之水成海洋，颗颗爱心变希望。</span>
</div>
</div>
</div>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/db2/content.php">首页</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							 <a href="/db2/lost.php">丢失物品</a>
						</li>
     
						<li class="active">
							 <a href="/db2/find.php">拾到物品</a>
						</li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							 <a href="/db2/thanks.php">感谢信</a>
						</li>
                       
                        <li>
                        <a href="/db2/admin.php">公告</a>
                        </li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
    
    
    <div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form" method="post" action="/db2/find_ok.php">
				<div class="form-group">
					 <label for="items">物品</label><input type="text" class="form-control" name="items" id="items" required />
                     <p class="help-block">
						拾到的物品名称
					</p>
				</div>
				<div class="form-group">
					 <label for="described">描述</label><input type="text" class="form-control" name="described" id="described" required />
				     <p class="help-block">
						拾到物品的详细描述
					</p>
                </div>
				<div class="form-group">
					 <label for="named">联系人</label><input type="text" name="named" class="form-control" id="named" required />
					<p class="help-block">
						姓名
					</p>
				</div>
                <div class="form-group">
					 <label for="telephone">联系电话</label><input type="tel" name="telephone" class="form-control" id="telephone" required />
					<p class="help-block">
						联系方式
					</p>
				</div>
                <div class="form-group">
					 <label for="time">时间</label><input type="date" name="time" class="form-control" id="time" required />
					<p class="help-block">
						发布时时间
					</p>
				</div>
                
				<button type="submit" class="btn btn-default" name="submit">发布</button>
			</form>
		</div>
	</div>
    
        <div class="row clearfix">
		<div class="col-md-12 column">
			<div id="footer" style="text-align: center;">
				<div class="panel-footer">
					 重庆师范大学计信专业
				</div>
				<div class="copyRight">
					Copyright ©2018 任永琪版权所有
				</div>
			</div>
			
		</div>
	</div>
    
</div>



</body>
</html>