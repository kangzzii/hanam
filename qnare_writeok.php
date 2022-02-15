<?php
include "include.php";
$p_no=$_POST["p_no"];
$content=$_POST["content"];
$sql="insert into hanam_qnare (p_no,content) values('$p_no','$content')";
$rs=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0,url='d5_content.php'">
