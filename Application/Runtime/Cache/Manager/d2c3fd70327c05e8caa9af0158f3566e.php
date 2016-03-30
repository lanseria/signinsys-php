<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/Public/favicon.ico">
	<title>后台--管理员中心</title>
	<link href="/Public/asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Public/css/dashboard.css" rel="stylesheet">
	<link href="/Public/css/patch.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<nav class="navbar navbar-fixed-top bs-docs-nav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/Manager/Index/index.html">后台</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo U('Home/Msg/index');?>">前台</a></li>
					<?php if(isset($_SESSION['logineduser'])): ?><li><a>欢迎您,<?php echo (session('logineduser')); ?>!</a></li>
						<li><a href="<?php echo U('Manager/User/logout');?>">退出</a></li>
						<?php else: ?>
						<li><a href="<?php echo U('Manager/User/login');?>">登录</a></li><?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="<?php echo ($oac); ?>"><a href="<?php echo U('Manager/Index/index');?>">Overview</a></li>
					<li class="<?php echo ($eac); ?>"><a href="<?php echo U('Manager/Index/export');?>">Export</a></li>
				</ul>
				<ul class="nav nav-sidebar">
					<li class="<?php echo ($aac); ?>"><a href="<?php echo U('Manager/Index/add');?>">Add</a></li>
				</ul>
				<ul class="nav nav-sidebar">
					<li class="<?php echo ($abac); ?>"><a href="<?php echo U('Manager/Index/about');?>">关于</a></li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
	<form role="form" action="" method="post" class="inline-block" enctype="multipart/form-data" >
		<div id="f1">
			<div class="form-group">
				<label class="h2">活动名字</label>
				<input type="text" class="form-control" id="exampleAname" name="pname" placeholder="Project Name...">
				<textarea class="form-control" rows="6" placeholder="描述主题内容" name="pdes"></textarea>
			</div>
			<div class="form-group">
				<hr/>
			</div>
			<div class="form-group">
				<label class="h3">添加活动信息</label>
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><input type="text" name="title1" style="border-style:none;" placeholder="描述主题"></input><small>-----空白处输入你的文字</small></h3>
					</div>
					<div class="panel-body row">
						<textarea class="form-control" rows="6" name="pdes1" placeholder="描述主题内容" style="border-radius: 0;
						resize:none;
						background-attachment:fixed;
						background-repeat:no-repeat;
						border-style:none; "></textarea>
					</div>
					<div class="panel-footer">
						<input type="file" class="btn btn-default" name="photo[]"></input>
					</div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><input type="text" name="title2" style="border-style:none;" placeholder="描述主题"></input><small>-----空白处输入你的文字</small></h3>
					</div>
					<div class="panel-body row">
						<textarea class="form-control" rows="6" name="pdes2" placeholder="描述主题内容" style="border-radius: 0;
						resize:none;
						background-attachment:fixed;
						background-repeat:no-repeat;
						border-style:none; "></textarea>
					</div>
					<div class="panel-footer">
						<input type="file" class="btn btn-default" name="photo[]"></input>
					</div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><input type="text" name="title3" style="border-style:none;" placeholder="描述主题"></input><small>-----空白处输入你的文字</small></h3>
					</div>
					<div class="panel-body row">
						<textarea class="form-control" rows="6" name="pdes3" placeholder="描述主题内容" style="border-radius: 0;
						resize:none;
						background-attachment:fixed;
						background-repeat:no-repeat;
						border-style:none; "></textarea>
					</div>
					<div class="panel-footer">
						<input type="file" class="btn btn-default" name="photo[]"></input>
					</div>
				</div>
			</div>
			<div class="form-group">
				<hr/>
			</div>
			<div class="form-group">
				<label class="h3">添加你要的信息</label>
				<div class="dropdown">
					<a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>选择添加</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel" id="select">
						</ul>
					</div>
				</div>
				<div class="alert alert-info alert-dismissible form-group" role="alert">
					<strong>姓名</strong> 在你的项目中添加姓名
					<input type="hidden" class="form-control" id="name1" name="name1" value="name">
				</div>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
			</div>
		</div>
	</div>
	<script src="/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/Public/asset/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	var rowCount = 1;  //行数默认1行
	var content = new Array("性别","年龄","学院班级信息","学号","个人简历","电话")
	var Econtent = new Array("gender","age","college","number","detail","tel")
	function addSRow(n){
		var newSelect='<div class="alert alert-info alert-dismissible form-group" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>'+content[n-1]+'</strong> 在你的项目中添加'+content[n-1]+'<input type="hidden" class="form-control" id="name'+(n+1)+'" name="name'+(n+1)+'" value="'+Econtent[n-1]+'">';
		$('#f1').append(newSelect);  
	}
	$(document).ready(function(){
		for (var i = 0; i < content.length; i++) {
			$('#select').append('<li><a href="#" onclick="addSRow('+(i+1)+')">'+content[i]+'</a></li>');
		}
	});
	function changeid(page, Id) {
		$('#sub').attr('href','/Manager/Index/'+page+'.html?sid='+Id); 
		$('#subd').attr('href','/Manager/Index/download.html?pid='+Id); 
	}
</script>
</body>
</html>