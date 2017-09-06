<?php
include 'conn.php';

//登录验证
session_start();
if(!isset($_SESSION['uname'])){
    header("Refresh: 0; url=index.html");
    exit();
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>新生信息</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
    <style>
        label {
            font-weight: 900;
            font-size: 1.3em;
        }
        
        #change {
            display: block;
            background-color: lightblue;
            opacity: 0.6;
            text-decoration: none;
            padding: 1%;
            border: 1px solid #7577CD;
            border-radius: 8px;
            position: fixed;
            z-index: +1;
            left: -1%;
            top: 44%;
        }
        
        #back:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="container">
        <!--title-->
        <div class="hero-unit text-center">
            <h2>新生信息</h2>
        </div>
        <div class="span3"></div>

        <!--table-->
        <table class="table table-striped table-bordered table-hover">
            <?php
            $num = mysqli_num_rows(mysqli_query($conn, "SELECT Id FROM xinsheng_b"));
            echo "<tr><th>总共有".$num."个新生信息</th></tr>";//显示面试人数
            $read = mysqli_query($conn, "SELECT * FROM xinsheng_b ORDER BY Id");
            echo "<tr><td>姓名</td><td>性别</td><td>学号</td><td>编号</td><td>专业</td><td>第一志愿</td><td>第二志愿</td><td>服从</td><td>查看</td></tr>";
            while($row = mysqli_fetch_array($read)){
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['xb']."</td>";
                echo "<td>".$row['xh']."</td>";
                echo "<td>".$row['Id']."</td>";
                echo "<td>".$row['zy']."</td>";
                echo "<td>".$row['zhiyuan_1']."</td>";
                echo "<td>".$row['zhiyuan_2']."</td>";
                echo "<td>".$row['fc']."</td>";
                echo "<td><a href='chakan.php?id=".$row['Id']."' class='btn btn-warning' target='blank'>详细信息</a>";
                echo "</tr>";
            }

            ?>
        </table>
        

        <div class="span3"></div>

        <!--footer-->
        <div class="span12 text-center">
            <p>Copyright © College of Information and College of Software</p>
            <p>Powerd By NetMan</p>
        </div>

    </div>

    <a href="Check.php" id="change">
           切<br><br>换
    </a>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>