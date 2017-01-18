<?php
	require_once("../connect.php");
	// 把传递过来的数据入库
	$id=$_POST["id"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$description=$_POST["description"];
	$content=$_POST["content"];
	$dateline=time();
	$update="update article set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id=$id";
	// echo $update;
	if (mysqli_query($con,$update)) {
		echo "<script>alert('文章修改成功');window.location.href='edit.php'</script>";
	}else{
		echo "<script>alert('文章修改失败');window.location.href='edit.php'</script>";
	}