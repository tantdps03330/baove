<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$mysqlHost = "localhost";
	$mysqlUser = "root";
	$mysqlPass = "";
	$mysqlDB   = "SHOPPING";
	mysql_connect("{$mysqlHost}", "{$mysqlUser}", "{$mysqlPass}") or die("Không thể kết nối database");
    mysql_select_db("{$mysqlDB}") or die("Không thể chọn database");
	mysql_query("SET NAMES 'utf8'");
?>