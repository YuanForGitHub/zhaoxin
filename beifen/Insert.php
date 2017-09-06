<?php
//$conn 是连接的变量语句
include'conn.php';

session_start();
//Sign In
if(!isset($_SESSION['uname'])){
    echo "Failed!";
    header("Refresh:2; url=Load.php");
    exit();
}

if(isset($_GET['del'])){
    //删除结果
    $sql = "DELETE FROM result WHERE id='{$_GET['del']}'";
    if(mysqli_query($conn, $sql)){
        // echo "Delete Success!";
    }
    else{
        echo "Delete Failed: ".$conn->error;
    }
}

else if(isset($_POST['partment']) && isset($_POST['name'])){
    //插入结果
    $sql = "INSERT INTO result(partment, name) VALUES('{$_POST['partment']}', '{$_POST['name']}')";
    if(mysqli_query($conn, $sql)){
    // echo "Success";
    }
    else{
        echo "Failed: ".$conn->error;
    }
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
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

        <!--标题-->
        <div class="container">
            <div class="hero-unit text-center">
                <h2>录入结果</h2>
            </div>

            <!--录入信息-->
            <div class="row-fluid controls-row">
                <div class="span3"></div>
                <form class="form-inline span6" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label>录取部门：</label>
                            <select name="partment" class="span3">
                    <option value="网络">网络</option>
                    <option value="青志">青志</option>
                    <option value="文娱">文娱</option>
                    <option value="公关">公关</option>
                    <option value="秘书">秘书</option>
                    <option value="宣传">宣传</option>
                    <option value="学习">学习</option>
                    <option value="级委">级委</option>
                    <option value="体育">体育</option>
                    <option value="新闻">新闻</option>
                    <option value="编辑">编辑</option>
                    <option value="实践">实践</option>
                </select>
                            <label>名字：</label>
                            <input type="text" name="name" class="span3" placeholder="name">
                            <input type="submit" class="btn btn-success span2" value="提交">
                </form>
                <div class="span3"></div>
            </div>

            <hr>

            <!--显示-->
            <div class="row-fluid">
                <div class="span1"></div>
                <div class="span10">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>部门</th>
                            <th>姓名</th>
                            <th>删除</th>
                        </tr>
                        <?php
                    $read = mysqli_query($conn, "SELECT * FROM result ORDER BY partment");
                    while($row = mysqli_fetch_array($read)){
                        echo "<tr>";
                        echo "<td>".$row['partment']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td><a class='btn btn-warning' href='Insert.php?del={$row['id']}'>删除</a></td>";
                        echo "</tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="span1"></div>
            </div>

            <!--footer-->
            <hr>
            <div class="row-fluid text-center">
                <p>Copyright © College of Information and College of Software</p>
                <p>Powerd By NetMan</p>
            </div>

        </div>

        <a href="index.html" id="back">
           返<br><br>回
        </a>
    </body>

    </html>