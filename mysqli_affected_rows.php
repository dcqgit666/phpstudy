<?php
header("Content-type:text/html;charset=utf-8");
$con=mysqli_connect('localhost','root','');
$sel=mysqli_select_db($con,'test');
mysqli_query($con,"set names 'utf8'");

if(mysqli_query($con,'update test set num=80 where id =1')){
	echo "更新成功，更新数据为";
	echo mysqli_affected_rows($con);
}else{
	echo "更新失败";
}

mysqli_close($con);
