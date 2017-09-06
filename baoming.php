<?php
include 'conn.php';

//检测用户登录情况
//……代码

//检测重复取号
$num = mysqli_num_rows(mysqli_query($conn, "SELECT Id FROM xinsheng_b WHERE xh = '{$_POST['xh']}'"));
if($num>0){
    echo "<script>alert('您已经报名了，请勿重复取号');</script>";
    header("Refresh: 0; url=baoming.html");
    exit();
}
//插入新生报名信息
$sql = "INSERT INTO xinsheng_b(name, xb, lianxi_c, zy, xh) 
        VALUES('{$_POST['name']}', '{$_POST['xb']}', '{$_POST['lianxi_c']}', '{$_POST['zy']}', 
        '{$_POST['xh']}')";
$result = mysqli_query($conn, $sql);
if($result === TRUE){
    $sql = "SELECT id FROM xinsheng_b WHERE xh = '{$_POST['xh']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo "<script>alert('您的号码是：".$row['id']."');</script>";
    header("Refresh: 0; url=img/logoo.jpg");
}
else{
    echo "Failed: ".$conn->error;
}
?>