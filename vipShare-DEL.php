﻿<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `share` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=vipShare&i=Xóa thành công');
?>