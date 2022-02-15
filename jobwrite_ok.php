<?php
include "include.php";
$title=$_POST["title"];
$content=$_POST["content"];
$upload=$_SERVER["DOCUMENT_ROOT"]."/file/";
$img=basename($_FILES["img"]["name"]);
$upload_file=$upload.$img;
move_uploaded_file($_FILES["img"]["tmp_name"],$upload_file);
$date=date("Y-m-d");
$sql="insert into hanam_job (title,file,content,date) values ('$title','$img','$content','$date')";
$rs=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0,url='d2.php'">