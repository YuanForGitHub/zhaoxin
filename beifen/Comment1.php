<?php
//***********************************************
header("Content-Type: text/html; charset=utf-8");
include 'conn.php';
//***********************************************

//插入留言*********************************************************************************************************
if(isset($_POST['name'])){
date_default_timezone_set('PRC');//设置时区为本地时间
$strEx = "20";
$string = date("y-m-d  h:i:sa");
$string = $strEx.$string;
$sql = "INSERT INTO comment(name, comment, shijian) VALUES('{$_POST['name']}', '{$_POST['comment']}', '$string')";
if(mysqli_query($conn, $sql)){
    //echo "Success";
}
else{
    echo "Failed: ".$conn->error;
}
}
//*****************************************************************************************************************
?>
    <!DOCTYPE>
    <html>

    <head>
        <meta charset="utf-8">
        <title>查看留言</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
        <style>
            #title {
                width: 98%;
                margin: auto;
                border-bottom: 1px dotted gray;
                text-align: center;
                padding: 1% 0%;
            }

            #content {
                border-left: 1px dotted gray;
                border-right: 1px dotted gray;
                margin: auto;
                width: 80%;
            }
            #page{
                border-top: 1px dotted gray;
                margin: auto;
                width: 98%;
            }
            #page .btn{
                margin-right: 1%;
            }
            .liuyan {
                border: 1px dotted white;
                margin: 1px auto;
                padding: 1%;
                width: 96%;
            }

            .odd {
                background-color: #E8F1F5;
            }

            textarea {
                width: 95%;
                height: 30%;
                margin-right: 0;
            }

            [type="text"] {
                width: 20%;
            }

            [type="submit"] {
                background-color: #0092CA;
                color: white;
                border-radius: 6px;
                padding: 4px 18px;
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
        <div id="title">
            <h3>留&nbsp言&nbsp区</h3>
        </div>
        <div id="content">
            <?php
        $perpage = 10;//每页显示数量
        $sql = mysqli_query($conn, "SELECT * FROM comment");
        $rows=0;
        while($row=mysqli_fetch_array($sql)){
            $rows++;//记录查询结果数量
        }
        $totalpages = ceil($rows/$perpage);//计算总页数
        if(empty($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page']<1 || $_GET['page']>$totalpages){
            $page = 1;
        }
        else{
            $page = $_GET['page'];
        }

        $start = ($page-1) * $perpage;
        $sql = mysqli_query($conn, "SELECT * FROM comment LIMIT $start, $perpage");
        $color=0;
        while ($row=mysqli_fetch_array($sql)){
                if($color%2!=0){
                    echo "<div class='liuyan odd'>"; 
                }
                else{
                    echo "<div class='liuyan'>";
                }
                $color++;
                echo "<em>"."&nbsp".$row['name']."&nbsp&nbsp".$row['shijian']."</em>"."<br><br>";
                echo "<bold>&nbsp&nbsp&nbsp&nbsp".$row['comment']."</bold>";
                echo "</div>";
            }
        ?>
        </div>

        <!--HTML页码显示-->
        <div id="page" class="text-center">
            <?php
            for($i=1; $i<=$totalpages; $i++){
                echo sprintf('<a class="btn btn-link" href="%s?page=%d">%d</a>', $_SERVER['PHP_SELF'], $i, $i);
            }
            ?>
        </div>
        <hr>

        <div class="row-fluid">
        

            <form action="Comment.php" method="post" class="form-horizontal span11">
                <div class="control-group">
                    <div class="control-label">
                        <label style="font-size: 1.2em">昵称:</label>
                    </div>
                    <div class="controls controls-row">
                        <input type="text" name="name" class="span2" placeholder="如“宇宙第一帅"/>
                        <input type="submit" value="发表" class="btn btn-info"/>
                    </div><br>
                    <div class="control-label">
                        <label style="font-size: 1.2em">评论:</label>
                    </div>
                    <div class="controls">
                        <textarea name="comment" rows="7" placeholder="随意发表，禁止黄赌毒"></textarea>
                    </div>
                </div>
            </form>

        <div class="span1"></div>
    </div>

        <a href="index.html" id="back">
           返<br><br>回
        </a>


        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>