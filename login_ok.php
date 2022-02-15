<?php
include "include.php";
$id=$_POST["id"];
$pw=$_POST["pw"];
// echo$id;echo$pw;
$sql="select * from hanam_admin where id='$id'and pw='$pw'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);
if($row["id"]){
    $_SESSION["id"]=$id
    ?>
    <script>
        alert("로그인을 환영합니다.")
        self.close();
    </script>
    <meta http-equiv="refresh" content="0,url=front.php">
    <?php
}else{
    ?>
    <script>
        alert("로그인 실패")
        self.close();
        
    </script>
    <meta http-equiv="refresh" content="0,url=front.php">
    <?php
}
?>