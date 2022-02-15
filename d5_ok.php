<?php
include "include.php";
$name=$_POST["usname"];
$pw=$_POST["pw"];
$title=$_POST["title"];
$content=$_POST["content"];
$sql="insert into hanam_qna (name,pw,title,content) values ('$name','$pw','$title','$content')";
$rs=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0,url='d5_content.php'">