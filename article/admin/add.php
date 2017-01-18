<?php
	require_once("../connect.php");
	// 把传递过来的数据入库
	if (!(isset($_POST["title"])&&(!empty($_POST["title"])))) {//标题有效且不能为空
		echo "<script>alert('标题不能为空');window.location.href='add.html'</script>";
	}
	$title=$_POST["title"];
	$author=$_POST["author"];
	$description=$_POST["description"];
	$content=$_POST["content"];
	$dateline=time();
	$insert="insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
	if (mysqli_query($con,$insert)) {
		echo "<script>alert('文章发布成功');window.location.href='add.html'</script>";
	}else{
		echo "<script>alert('文章发布失败');window.location.href='add.html'</script>";
	}