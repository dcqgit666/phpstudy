<?php
header("Content-type:text/html;charset=utf-8");
$con=mysqli_connect('localhost','root','');
$sel=mysqli_select_db($con,'test');
mysqli_query($con,"set names 'utf8'");

// $query=mysqli_query($con,'select * from test');
// $num=mysqli_num_rows($query);
// echo $num;

$query=mysqli_query($con,'select count(*) from test');
$num=mysqli_fetch_row($query);
echo $num[0];

mysqli_close($con);
