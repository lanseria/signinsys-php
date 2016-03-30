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
	<main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
	<div class="container">
		<img class="bs-docs-booticon bs-docs-booticon-lg" style="background-color: rgba(255,255,255,0);" src="/Public/icon-144.png" alt="logo" />
		<p class="lead">由LimonPlayer Studio开发的报名管理系统是以最受欢迎的Bootstrap框架为基础，用于大学、企业中、小型活动报名统计的 WEB 项目。</p>
		<p class="lead">
			<a href="https://github.com/Lanseria/mm" class="btn btn-outline-inverse btn-lg">下载 LDemo</a>
		</p>
		<p class="version">当前版本： v1.0.0 | 文档更新于：2016-03-18</p>
	</div>
</main>
<?php if(is_array($msglist)): foreach($msglist as $key=>$msg): ?><div class="bs-docs-featurette">
		<div class="container">
			<h2 class="bs-docs-featurette-title"><?php echo ($msg["pname"]); ?></h2>
			<p class="lead"><?php echo ($msg["pdes"]); ?></p>
			<hr class="half-rule">
			<div class="row">
				<div class="col-sm-4">
					<img src="/Public/pic/project1/<?php echo ($msg["pimg1"]); ?>" alt="Sass and Less support" class="img-responsive">
					<h3><?php echo ($msg["ptitle1"]); ?></h3>
					<p><?php echo ($msg["pdescribe1"]); ?></p>
				</div>
				<div class="col-sm-4">
					<img src="/Public/pic/project1/<?php echo ($msg["pimg2"]); ?>" alt="Responsive across devices" class="img-responsive">
					<h3><?php echo ($msg["ptitle2"]); ?></h3>
					<p><?php echo ($msg["pdescribe2"]); ?></p>
				</div>
				<div class="col-sm-4">
					<img src="/Public/pic/project1/<?php echo ($msg["pimg3"]); ?>" alt="Components" class="img-responsive">
					<h3><?php echo ($msg["ptitle3"]); ?></h3>
					<p><?php echo ($msg["pdescribe3"]); ?></p>
				</div>
			</div>
			<hr class="half-rule">
			<p class="lead">如果你有意愿，参与我们，报名参加吧！</p>
			<a href="<?php echo U('Home/Msg/join');?>?pid=<?php echo ($msg["pid"]); ?>" class="btn btn-outline btn-lg">我要报名</a>
		</div>
	</div><?php endforeach; endif; ?>
<div class="bs-docs-featurette">
	<div class="container">
		<h2 class="bs-docs-featurette-title">基于 LDemo 构建的网站</h2>
		<p class="lead">全球数以百万计的网站都是基于 LDemo 构建的。你可以先参观一下我们提供的实例精选或者看一看我们粉丝的网站吧。</p>
		<hr class="half-rule">
		<div class="row bs-docs-featured-sites">
			<div class="col-xs-6 col-sm-3">
				<a href="http://www.golaravel.com/" target="_blank" title="Laravel中文网">
					<img src="/Public/img/blog.png" alt="Laravel中文网" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a href="http://www.ghostchina.com/" target="_blank" title="Ghost中国">
					<img src="/Public/img/broswer.png" alt="Ghost中国" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a href="http://www.gulpjs.com.cn/" target="_blank" title="Gulp中文网">
					<img src="/Public/img/love.png" alt="Gulp中文网" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<a href="http://www.gruntjs.net/" target="_blank" title="Gurnt中文网">
					<img src="/Public/img/oj.png" alt="Gurnt中文网" class="img-responsive">
				</a>
			</div>
		</div>
		<hr class="half-rule">
		<p class="lead">我们在“优站精选”里展示了许多精美的 Bootstrap 网站。</p>
		<a href="http://limonplayer.cn" class="btn btn-outline btn-lg">逛一逛“优站精选”</a>
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