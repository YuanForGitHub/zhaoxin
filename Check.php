<?php
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
    <title>录入信息</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
    <script src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/collapse.js"></script>
    <style>
        div {
            border: 1px solid white;
        }

        #change{
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
        
        #back {
            display: block;
            background-color: lightblue;
            opacity: 0.6;
            text-decoration: none;
            padding: 1%;
            border: 1px solid #7577CD;
            border-radius: 8px;
            position: fixed;
            z-index: +1;
            right: -1%;
            top: 44%;
        }
        #Card {
            border: 1px solid white;
            box-shadow: 0px 0px 70px 3px lightgray;
            margin-top: 10%;
            padding: 6% 0%;
        }
        #back:hover {
            opacity: 1;
        }
    </style>
</head>

<body style="overflow-X:hidden">
    <div class="container row-fluid">
        <div class="span3"></div>
        <!-- 卡片 -->
        <div id="Card" class="text-center span6">
            <h3>管理员录入信息：</h3>
            <form class="form-inline" action="beizu.php" method="post" target="_blank">
                <label>输入编号：</label>
                <input type="text" name="id">
                <input type="submit" class="btn btn-info" value="提交">
            </form>
            <!--footer-->
            <hr>
            <div class="row-fluid text-center">
                <p>华南农业大学团学招生</p>
            </div>
        </div>

        <div class="span3"></div>
    </div>

    <a href="index.html" id="back">
           返<br><br>回
        </a>

    <a href="liebiao.php" id="change">
        切<br><br>换
    </a>
</body>

</html>