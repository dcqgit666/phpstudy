<?php
 require_once('../connect.php');
 $delete='delete from article where id=2';
 if (mysqli_query($con,$detele)) {
 	echo "<script>alert('文章删除成功');window.location.href=''</script>";
 }else{
 	echo "<script>alert('文章删除失败');window.location.href=''</script>";
 }