<?php
	require_once("config.php");//引入配置文件
	// 连接数据库
	$con=mysqli_connect(HOST,USERNAME,PASSWORD);
	if (!$con) {
		echo mysqli_error($con);
	}
	// 选择数据库
	if (!mysqli_select_db($con,"test")) {
		echo mysqli_error($con);
	}
	// 设置字符集
	if (mysqli_query($con,'set names utf8')) {
		echo mysqli_error($con);
	}