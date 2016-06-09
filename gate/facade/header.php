<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://<? echo $_SERVER['HTTP_HOST'] ?>/source/css/style.css">
	<link rel="stylesheet" href="http://<? echo $_SERVER['HTTP_HOST'] ?>/source/css/bootstrap.css">
	<link rel="stylesheet" href="http://<? echo $_SERVER['HTTP_HOST'] ?>/source/css/bootstrap-theme.css">
	<script src="http://<? echo $_SERVER['HTTP_HOST'] ?>/source/js/lib/jquery-2.2.0.min.js"></script>
	<script src="http://<? echo $_SERVER['HTTP_HOST'] ?>/source/js/main.js"></script>
	<script src="http://<? echo $_SERVER['HTTP_HOST'] ?>/source/js/bootstrap.js"></script>
</head>
<body>
	<header>
		<div class="nav" style="left: -260px;">
			<div class="nav-header">
				<div class="toggle"></div>
				<div class="clearfix"></div>
			</div>
			<ul>
				<li class="mobilesearch">
					<div class="searchfield">
						<input type="text">
					</div>
				</li><li><a href="works">Справочники</a>
				<ul class="submenu">
					<li class="sub"> <a href="/handbook/html/">HTML</a> </li>
					<li class="sub"> <a href="/">CSS</a> </li>
					<li class="sub"> <a href="/">jQuery</a> </li>
				</ul>
			</li>    
			<li> <a href="company">Учебники</a></li>
			<li> <a href="cases">Ресурсы</a></li>
			<li> <a href="news">Git</a>
				<ul class="submenu">
					<li class="sub"> <a href="/">Комманды</a> </li>
					<li class="sub"> <a href="/">Руководство</a>	</li>
					<li class="sub"> <a href="/">GitHub.com</a> </li>
				</ul>
			</li>	
			<li> <a href="/">Проекты</a>
				<ul class="submenu">
					<li class="sub"> <a href="/">Медиа решения</a> </li>
					<li class="sub"> <a href="/">Медиа стратегия</a> </li>
					<li class="sub"> <a href="/">Дизайн и контент</a> </li>
					<li class="sub"> <a href="/">Концепт проекти</a> </li>
					<li class="sub"> <a href="/">Оборудование</a> </li>
					<li class="sub"> <a href="/">Технологии</a> </li>
				</ul>
			</li>
		</ul>
	</div>
	<div style="clear:both;"></div>
	<div id="darkmask" style="display: none;"></div>
</header>