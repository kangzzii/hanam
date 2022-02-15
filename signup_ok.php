<?php
include "include.php";
$id=$_POST["id"];
$pw=$_POST["pw"];
$name=$_POST["name"];
// echo$id;echo$pw;echo$name;
$sql="insert into hanam_admin (id,pw,name) values ('$id','$pw','$name') ";
$rs=mysqli_query($conn,$sql);
?>
<script>
        alert("회원가입이 완료되었습니다.")
</script>
<meta http-equiv="refresh" content="0,url=front.php">