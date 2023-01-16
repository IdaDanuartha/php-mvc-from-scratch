<?php 
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

define("URL", $url);
define("BASE_URL", "http://localhost/pwpb_php_mvc/public");

define("DB_HOST", 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pwpb_mvc2');