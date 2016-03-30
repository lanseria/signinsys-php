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
				<h1 class="page-header">仪表盘</h1>
<div class="row placeholders">
	<h2 class="col-sm-4 sub-header text-left"><?php echo ($msg[0]["pname"]); ?></h2>
	<form class="form-inline col-sm-2 col-sm-offset-6">
		<div class="form-group">
			<select class="form-control" name="data" id="data" onchange="changeid('index',this.value)">
				<option value="0">请选择数据</option>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><option value="<?php echo ($one["pid"]); ?>"><?php echo ($one["pname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<a type="submit" id="sub" class="btn btn-default" href="/Manager/Index/index.html?sid=<?php echo ($msg[0]["pid"]); ?>">查找</a>
	</form>
</div>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>学院</th>
				<th>班级</th>
				<th>学号</th>
				<th>电话</th>
				<th>报名时间</th>
				<th>自我评价</th>
				<th>删除</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($memberlist)): $i = 0; $__LIST__ = $memberlist;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($vo["mid"]); ?></td>
					<td><?php echo ($vo["mname"]); ?></td>
					<td><?php echo ($vo["msex"]); ?></td>
					<td><?php echo ($vo["mage"]); ?></td>
					<td><?php echo ($vo["colloge_name"]); ?></td>
					<td><?php echo ($vo["class_name"]); ?></td>
					<td><?php echo ($vo["mnumber"]); ?></td>
					<td><?php echo ($vo["mtel"]); ?></td>
					<td><?php echo ($vo["mcreate_date"]); ?></td>
					<td><?php echo ($vo["mdetail"]); ?></td>
					<td><a href="del?mid=<?php echo ($vo["mid"]); ?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
			
		</tbody>
	</table>
</div>
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