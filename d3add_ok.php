<?php
include "include.php";
$name=$_POST["name"];
$date1=$_POST["date1"];
$date11=$_POST["date11"];
$date2=$_POST["date2"];
$date22=$_POST["date22"];
$content=$_POST["content"];
$upload=$_SERVER["DOCUMENT_ROOT"]."/file/";
$img=basename($_FILES["img"]["name"]);
$upload_file=$upload.$img;
move_uploaded_file($_FILES["img"]["tmp_name"],$upload_file);
// echo$name;echo$date1;echo$date2;echo$date11;echo$date22;echo$img;echo$content;
$sql="insert into hanam_d3 (name,date1,date11,date2,date22,content,file) values('$name','$date1','$date11','$date2','$date22','$content','$img')";
$rs=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0,url='d3.php'">