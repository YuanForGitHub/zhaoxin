<?php
//***********************************************
header("Content-type: text/html; charset=utf-8");
include 'conn.php';
//***********************************************
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>写来看看</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
    <style>
        label {
            font-weight: 900;
            font-size: 1.3em;
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
                top: 48%;
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
            <h2>管理员登录</h2>
        </div>
        <div class="span3"></div>

        <!--form-->
        <form class="form-horizontal span6" method="POST" action="login.php">
            <div class="control-group">
                <div class="control-label">
                    <label for="user">用户名:</label>
                </div>
                <div class="controls">
                    <input type="text" name="uname" id="user" class="span3" placeholder="User Name" />
                </div>
            </div>
            <div class="control-group">
                <div class="control-label">
                    <label for="psd">密码:</label>
                </div>
                <div class="controls">
                    <input type="password" name="psw" id="psd" class="span3" placeholder="Password" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" class="btn btn-success span2" value="登 录">
                </div>
            </div>
        </form>

        <div class="span3"></div>

        <!--footer-->
        <div class="span12 text-center">
            <p>Copyright © College of Information and College of Software</p>
            <p>Powerd By NetMan</p>
        </div>

    </div>

    <a href="index.html" id="back">
           返<br><br>回
    </a>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>