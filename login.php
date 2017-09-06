<?php
include 'conn.php';

//设置缓存
session_start();
if(isset($_POST['uname']) && isset($_POST['psw'])){
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    $sql = mysqli_query($conn, "SELECT * FROM yanzheng WHERE uname = '$uname' AND psw = '$psw'");
    $result = mysqli_num_rows($sql);
    if($result < 1){//失败
        echo "Failed!";
        header("Refresh: 2; url = index.html");
        exit();
    }
    else{//成功
        $_SESSION['uname'] = $uname;
        $_SESSION['psw'] = $psw;
        // echo "Success!";
        header("Refresh: 0; url = Check.php");
    }
}
?>