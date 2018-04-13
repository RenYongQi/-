<!doctype html>
<?php
session_start();
if(isset($_SESSION["pwd"]) and isset($_SESSION["user"])){
	}
else{
	echo "<script>alert('请用登录方式进入');location.href='/db2/index.php';</script>";
	}	

?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>失物招领</title>
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
          <a class="navbar-brand" href="#">首页</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li> <a href="/db2/lost.php">丢失物品</a> </li>

            <li> <a href="/db2/find.php">拾到物品</a> </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li> <a href="/db2/thanks.php">感谢信</a> </li>
            <li> <a href="/db2/admin.php">公告</a> </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="carousel slide" id="carousel-578641">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-578641"> </li>
          <li data-slide-to="1" data-target="#carousel-578641"> </li>
          <li data-slide-to="2" data-target="#carousel-578641"> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active"> <img alt="" src="/db2/img/content_1.png" />
            <div class="carousel-caption">
              <h4> First Photo </h4>
              <p> 人生不如意十有八九，抬头看看天，不要停滞不前。 </p>
            </div>
          </div>
          <div class="item"> <img alt="" src="/db2/img/content_2.png" />
            <div class="carousel-caption">
              <h4> Second Photo </h4>
              <p>东西丢了不用慌，大家一起帮帮帮！</p>
            </div>
          </div>
          <div class="item"> <img alt="" src="/db2/img/content_3.png" />
            <div class="carousel-caption">
              <h4> Third Photo </h4>
              <p>涓滴之水成海洋，颗颗爱心变希望。</p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-578641" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-578641" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
      <div class="row clearfix">
        <div class="col-md-12 column">
          <div class="tabbable" id="tabs-899981">
            <ul class="nav nav-tabs">
              <li class="active"> <a href="#panel-675591" data-toggle="tab">最近丢失</a> </li>
              <li> <a href="#panel-7030" data-toggle="tab">最近拾取</a> </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="panel-675591">
                <?php
				
				include("conn.php");
				$result=$pdo->query("select * from tb_swzl_lost order by id desc limit 3");
				$info=$result->fetch(PDO::FETCH_OBJ);
							if($info){
								do{
									?>
                <h4><?php echo $info->items; ?></h4>
                <p><?php echo $info->described; ?>&nbsp;&nbsp;&nbsp;------<?php echo $info->named ?>&nbsp;&nbsp;&nbsp;<?php echo $info->time; ?></p>
                <p><a class="btn" href="#" title="联系人:<?php echo $info->named; ?><?php echo "&nbsp;&nbsp;"?>联系方式:<?php echo $info->telephone; ?>">联系方式</a></p>
                <hr>
                <?php
									
									echo "<br>";
									}while($info=$result->fetch(PDO::FETCH_OBJ));
								}
								
								?>
              </div>
              <div class="tab-pane" id="panel-7030">
                <?php
				
				$result=$pdo->query("select * from tb_swzl_find order by id desc limit 3");
				$info=$result->fetch(PDO::FETCH_OBJ);
							if($info){
								do{
									?>
                                  <h4><?php echo $info->items; ?></h4> 
                                  
                                  <p><?php echo $info->described; ?>&nbsp;&nbsp;&nbsp;------<?php echo $info->named ?>&nbsp;&nbsp;&nbsp;<?php echo $info->time; ?></p>
                                  
                                  <p><a class="btn" href="#" title="联系人:<?php echo $info->named; ?><?php echo "&nbsp;&nbsp;"?>联系方式:<?php echo $info->telephone; ?>">联系方式</a></p> 
                                   <hr>
                                    <?php
									
									echo "<br>";
									}while($info=$result->fetch(PDO::FETCH_OBJ));
								}
								
								?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="panel-group" id="panel-994944">
        <div class="panel panel-default">
          <div class="panel-heading"> <a class="panel-title" data-toggle="collapse" data-parent="#panel-994944" href="#panel-element-864855">最新公告</a> </div>
          <div id="panel-element-864855" class="panel-collapse collapse in">
            <div class="panel-body">
            <?php
			  $result=$pdo->query("select * from tb_swzl_admin order by id desc limit 3");
			  $info=$result->fetch(PDO::FETCH_OBJ);
			  if($info){
				  do{
					  ?>
                      <h5>发布人:<?php echo $info->named; ?></h5>
                      <p><?php echo $info->contentd; ?></p>
                      <p><?php echo $info->timed;?></p>
                      <hr>
                      <?php 
                      }while($info=$result->fetch(PDO::FETCH_OBJ));
				  }
			  ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading"> <a class="panel-title" data-toggle="collapse" data-parent="#panel-994944" href="#panel-element-571601">感谢信</a> </div>
          <div id="panel-element-571601" class="panel-collapse collapse">
            <div class="panel-body">
              <?php
			  $result=$pdo->query("select * from tb_swzl_thanks order by id desc");
			  $info=$result->fetch(PDO::FETCH_OBJ);
			  if($info){
				  do{
					  ?>
                      <h5>To:<?php echo $info->tohow; ?></h5>
                      <p><?php echo $info->content; ?>&nbsp;&nbsp;&nbsp;------<?php echo $info->fromhow;?></p>
                      <p><?php echo $info->time;?></p>
                      <hr>
                      <?php 
                      }while($info=$result->fetch(PDO::FETCH_OBJ));
				  }
			  ?>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div id="footer" style="text-align: center;">
        <div class="panel-footer"> 重庆师范大学计信专业 </div>
        <div class="copyRight"> Copyright ©2018 任永琪版权所有 </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>