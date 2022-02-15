<?php
include "include.php";
$name=$_POST["name"];
$pw=$_POST["pw"];
$sql="select * from hanam_admin where name='$name' and pw='$pw'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);

if(isset($row["id"])){?>
<script>
    alert("당신의 계정은 <?php echo $row["id"]?> 입니다.");
</script>
<meta http-equiv="refresh" content="0,url=front.php">
<?php } else{ ?>
    <script>
        alert("잘못된계정입니다.");
    </script>
    <meta http-equiv="refresh" content="0,url=front.php">
    <?php
    }
?>

