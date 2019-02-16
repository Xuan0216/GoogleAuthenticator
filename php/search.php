<?php
session_start();
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('127.0.0.1','root','123456','ysyy_search');
mysqli_set_charset($link,'utf8'); //设定字符集
if (isset($_POST["search"])) { 
$s=$_POST['search'];
 $sql1 = "select * from book where book_name = '$s'";   
 $sql2 = "select * from music where music_name = '$s'";
 $result1 = $link->query($sql1);  
 $result2 = $link->query($sql2);
 $row1 = mysqli_fetch_array($result1);
 $row2 = mysqli_fetch_array($result1);  
 $location1 = $row1['book_location'];
 $location2 = $row2['music_location'];

 if($location1){
     echo "<script language='javascript'>location.href = '$location1'</script>";
}
if($location2){
     echo "<script language='javascript'>location.href = '$location1'</script>";
}
else{
	echo "<script>alert('对不起，没有找到该书籍');location='../html/products_book.html';</script>";
	exit();
}
}
else{
	echo "对不起，数据库链接错误！";
}
