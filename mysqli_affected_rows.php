<?php
header("Content-type:text/html;charset=utf-8");
$con=mysqli_connect('localhost','root','');
$sel=mysqli_select_db($con,'test');
mysqli_query($con,"set names 'utf8'");

$query=mysqli_query($con,'update test set num=80 where id =1');

mysqli_close($con);
