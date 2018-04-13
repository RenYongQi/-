<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>拾到物品</title>
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
							 <a href="#">拾到物品</a>
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
			<div class="row clearfix">
				<div class="col-md-11 column">
					<?php
				
				include("conn.php");
				$result=$pdo->query("select * from tb_swzl_find order by id desc");
				$info=$result->fetch(PDO::FETCH_OBJ);
							if($info){
								do{
									?>
                                  <h3><?php echo $info->items; ?></h3> 
                                  
                                  <p><?php echo $info->described; ?>&nbsp;&nbsp;&nbsp;------<?php echo $info->named ?>&nbsp;&nbsp;&nbsp;<?php echo $info->time; ?></p>
                                  
                                  <p><a class="btn" href="#" title="联系人:<?php echo $info->named; ?><?php echo "&nbsp;&nbsp;"?>联系方式:<?php echo $info->telephone; ?>">联系方式</a></p> 
                                   <hr>
                                    <?php
									echo "<br>";
									}while($info=$result->fetch(PDO::FETCH_OBJ));
								}
								
								?>
                                
                                
				</div>
				<div class="col-md-1 column">
					 <a href="/db2/find_publish.php"><button type="button" class="btn btn-default">发布</button></a>
				</div>
			</div>
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