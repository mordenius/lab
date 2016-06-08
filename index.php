<?php
$db = mysql_connect ("127.0.0.1:3306","root","");
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
					<li class="sub"> <a href="/lab/gate/chambers/handbook/html/index.html">HTML</a> </li>
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
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$module = 'index';
$action = 'index';

$params = array();

if ($_SERVER['REQUEST_URI'] != '/') {
try {

$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_parts = explode('/', trim($url_path, ' /'));

if (count($uri_parts) % 2) {
throw new Exception();
}
 
$module = array_shift($uri_parts); 
$action = array_shift($uri_parts); 

for ($i=0; $i < count($uri_parts); $i++) {
$params[$uri_parts[$i]] = $uri_parts[++$i];
}
} catch (Exception $e) {
$module = '404';
$action = 'main';
}
}
 
//echo "\$module: $module\n";
//echo "\$action: $action\n";
//echo "\$params:\n";
//print_r($params);
 
?>

 <?php

class Router {
    private $_route = array();
	

    public function setRoute($dir, $file) {
        $this->_route[trim($dir, '/')] = $file;
    }
  
    public function route() {
        if (!isset($_SERVER['PATH_INFO'])) { 
            include_once 'index.html'; 
        } elseif (isset($this->_route[trim($_SERVER['PATH_INFO'], '/')])) {
            include_once $this->_route[trim($_SERVER['PATH_INFO'], '/')];   
        }
        else return false; 
 
        return true;
    }
}

$route = new Router;
$route->setRoute('/handbook/html', "index.html"); 
//$route->setRoute('article-2', "2.html");
if (!$route->route()) { 
    echo 'Маршрут не задан';
}

?>   
    
    
</body>
</html>