<?php
$db = mysql_connect ("127.0.0.1","root","");
mysql_select_db("lab-kvinto",$db)or die("CAN NOT ACCEPT THIS DB");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="source/css/style.css">
	<link rel="stylesheet" href="source/css/bootstrap.css">
	<link rel="stylesheet" href="source/css/bootstrap-theme.css">
	<script src="source/js/lib/jquery-2.2.0.min.js"></script>
	<script src="source/js/main.js"></script>
	<script src="source/js/bootstrap.js"></script>
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
					<li class="sub"> <a href="/">HTML</a> </li>
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
<section>
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					
					<?php 
						$query = "SELECT * FROM `software` WHERE `category_id`='1'";
						$result = mysql_query($query, $db);
						if(!$result){
							echo "<p>не обновлен</p>";
							return;
						}
						while ($row = mysql_fetch_array($result)) {
								echo $row['description'];
						}

					?>
				</div>
				<div class="col-md-6">
					<?php 
						$query = "SELECT * FROM `software` WHERE `category_id`='2'";
						$result = mysql_query($query, $db);
						if(!$result){
							echo "<p>не обновлен</p>";
							return;
						}
						while ($row = mysql_fetch_array($result)) {
								echo $row['description'];
						}

					?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<?php 
						$query = "SELECT * FROM `software` WHERE `category_id`='3'";
						$result = mysql_query($query, $db);
						if(!$result){
							echo "<p>не обновлен</p>";
							return;
						}
						while ($row = mysql_fetch_array($result)) {
								echo $row['description'];
						}

					?>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
	</div>
</section>
</body>
</html>