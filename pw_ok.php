<?php
include "include.php";
$name=$_POST["name"];
$id=$_POST["id"];
$sql="select * from hanam_admin where name='$name' and id='$id'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);

if(isset($row["id"])){?>
<script>
    alert("당신의 비밀번호는 <?php echo $row["pw"]?> 입니다.");
</script>
<meta http-equiv="refresh" content="0,url=front.php">
<?php } else{ ?>
    <script>
        alert("잘못된 입력입니다.");
    </script>
    <meta http-equiv="refresh" content="0,url=front.php">
    <?php
    }
?>

