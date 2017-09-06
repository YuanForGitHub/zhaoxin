<?php
//***********************************************
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
        form{
            margin-top: 10%;
            padding: 4% 1%;
            border: 1px solid white;
            box-shadow: 0px 0px 100px 30px #E3E3E3;
        }
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
        <div class="span3"></div>

        <!--form-->
        <!--把label和input分别设置成居中响应式网格-->
        <form class="form-horizontal span6" method="POST" action="login.php">
            <div class="text-center">
                <h3>管理员登录</h3>
            </div>
            <div class="control-group row-fluid">
                <div class="span2"></div>
                <div class="control-label span3">
                    <label for="user">用户名:</label>
                </div>
                <div class="controls">
                    <input type="text" name="uname" id="user" class="span6" placeholder="User Name" />
                </div>
            </div>
            <div class="control-group row-fluid">
                <div class="span2"></div>
                <div class="control-label span3">
                    <label for="psd">密码:</label>
                </div>
                <div class="controls">
                    <input type="password" name="psw" id="psd" class="span6" placeholder="Password" />
                </div>
            </div>
            <div class="control-group row-fluid">
                <div class="span5"></div>
                <div class="controls">
                    <input type="submit" class="btn btn-success span4" value="登 录">
                </div>
            </div>
        </div>
        </form>

        <div class="span3"></div>

    </div>

    <a href="index.html" id="back">
           返<br><br>回
    </a>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>