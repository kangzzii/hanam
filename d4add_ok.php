<?php
include "include.php";
$name=$_POST["name"];
$content=$_POST["content"];
$upload=$_SERVER["DOCUMENT_ROOT"]."/file/";
$date=date("Y-m-d");
$img2=basename($_FILES["img2"]["name"]);
$upload_file2=$upload.$img2;
move_uploaded_file($_FILES["img2"]["tmp_name"],$upload_file2);

$img=basename($_FILES["img"]["name"]);
$upload_file=$upload.$img;
move_uploaded_file($_FILES["img"]["tmp_name"],$upload_file);

// echo$name;echo$date1;echo$date2;echo$date11;echo$date22;echo$img;echo$content;
$sql="insert into hanam_d4 (name,content,file,main,date) values('$name','$content','$img','$img2','$date')";
$rs=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0,url='d4.php'">