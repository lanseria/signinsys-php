<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>报名管理系统</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="柠檬工作室 LimonPlayer Studio">
	<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
	<meta name="author" content="作者：张超 <limonplayer.cn>">
	<!-- Bootstrap core CSS -->
	<style class="anchorjs"></style>
	<link href="/Public/asset/css/bootstrap.min.css" rel="stylesheet">
	<!-- Optional Bootstrap Theme -->
	<link href="data:text/css;charset=utf-8," data-href="/Public/asset/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
	<link href="/Public/css/docs.min.css" rel="stylesheet">
	<link href="/Public/css/patch.css" rel="stylesheet">
	<link rel="apple-touch-icon" href="/Public/icon.png">
	<link rel="icon" href="/Public/favicon.ico">
	<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script type="text/javascript" src="/Public/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/asset/js/bootstrap.min.js"></script>
	<script src="/Public/js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="/Public/js/area.js"></script>
	<script>var ajaxurl="<?php echo U('/Home/Ajax/getArea');?>";</script>
</head>
<body>
	<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="../" class="navbar-brand" style="padding: 6px 15px;">
					<img alt="Brand" src="/Public/icon.png" style="width: 40px;display: inline-block; margin-right: 10px;">报名管理系统
				</a>
			</div>
			<nav id="bs-navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php echo U('Home/Msg/msglist');?>" >报名列表</a>
					</li>
					<li>
						<a href="<?php echo U('Home/Msg/about');?>" >关于</a>
					</li>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" />
						</div>
						<button type="submit" class="btn btn-default">Search</button>
					</form>
					<li><a href="<?php echo U('Manager/Index/index');?>" target="_blank">后台</a></li>
				</ul>
				<div class="nav navbar-nav navbar-right">
					<a class="navbar-brand" style="padding: 6px 15px;" href="http://www.limonplayer.cn/" target="_blank"><img alt="Brand" src="/Public/apple-touch-icon.png" style="width: 40px;display: inline-block; margin-right: 10px;">LimonPlayer</a>
				</div>
			</nav>
		</div>
	</header>
	<div class="bs-docs-featurette">
	<div class="container">
		<h2 class="bs-docs-featurette-title"><?php echo ($msg["pname"]); ?></h2>
		<p class="lead"><?php echo ($msg["pdes"]); ?></p>
		<div class="col-md-6 col-md-offset-3">
			<form class="form-horizontal" action="<?php echo U('/Home/Msg/vote');?>" method="post">
				<input type="hidden" name="pid" value="<?php echo ($msgid); ?>" />
				<div class="form-group" method="post" >
					<label class="col-sm-3 control-label">姓名</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="iName" placeholder="Name" name="name">
					</div>
				</div>
				<?php if($msg["isgender"] == 1 ): ?><div class="form-group">
						<label class="col-sm-3 control-label">性别</label>
						<div class="col-sm-9">
							<select class="form-control" name="gender">
								<option value="1">男</option>
								<option value="0">女</option>
							</select>
						</div>
					</div>
					<?php else: endif; ?>
				<?php if($msg["isage"] == 1 ): ?><div class="form-group">
						<label class="col-sm-3 control-label">年龄</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="iAge" placeholder="Age" name="age">
						</div>
					</div>
					<?php else: endif; ?>
				<?php if($msg["iscollege"] == 1 ): ?><div class="form-group">
						<label class="col-sm-3 control-label">学院</label>
						<div class="col-sm-9">
							<select class="form-control" name="province" id="province" onchange="loadArea(this.value,'city')">
								<option value="-1" selected>学院/新区/老区</option>
								<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><option value="<?php echo ($one["area_id"]); ?>"><?php echo ($one["colloge_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">专业</label>
						<div class="col-sm-9">
							<select class="form-control" name="city" id="city">
								<option value="-1">请选择专业/班级</option>
							</select>
						</div>
					</div>
					<?php else: endif; ?>
				<?php if($msg["isnumber"] == 1 ): ?><div class="form-group">
						<label class="col-sm-3 control-label">学号</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="iNumber" placeholder="Number" name="number">
						</div>
					</div>
					<?php else: endif; ?>
				<?php if($msg["istel"] == 1 ): ?><div class="form-group">
						<label class="col-sm-3 control-label">手机号</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="iTel" placeholder="Tel" name="tel">
						</div>
					</div>
					<?php else: endif; ?>
				<?php if($msg["isdetail"] == 1 ): ?><div class="form-group">
						<label class="col-sm-3 control-label">个人说明</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="3" name="detail"></textarea>
						</div>
					</div>
					<?php else: endif; ?>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block">报名</button>
				</div>
			</form>
		</div>
		<hr class="half-rule">
	</div>
</div>

	<footer class="bs-docs-footer" role="contentinfo">
		<div class="container">
			<p>Designed and built with all the love in the world by <a href="https://twitter.com/Lanseria01" target="_blank">@Lanseria01</a>.</p>
			<ul class="bs-docs-footer-links text-muted">
				<li>当前版本： v1.0.0</li>
				<li>·</li>
				<li><a href="https://github.com/Lanseria">GitHub 仓库</a></li>
				<li>·</li>
				<li><a href="http://limonplayer.cn">实例精选</a></li>
				<li>·</li>
				<li><a href="http://blog.limonplayer.cn/">官方博客</a></li>
			</ul>
		</div>
	</footer>
</body>