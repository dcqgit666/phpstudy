<?php
 require_once('../connect.php');
 $id=$_GET('id');
 $delete="delete from article where id=$id";
 if (mysqli_query($con,$detele)) {
 	echo "<script>alert('文章删除成功');window.location.href='index.php'</script>";
 }else{
 	echo "<script>alert('文章删除失败');window.location.href='index.php'</script>";
 }