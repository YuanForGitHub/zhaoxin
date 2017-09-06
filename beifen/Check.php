<?php
include 'conn.php';
$partment=array("网络部","青年志愿者","文娱","新闻","实践","编辑","公关","学习","秘书","宣传","体育","级委");
?>

<!DOCTYPE>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>录取结果</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
        .pink{
            background-color: #DBDBEB;
        }
        .green{
            background-color: #E1F5F2;
        }
        .blue{
            background-color: #F5FAC8;
        }
        div{
            padding: 1% 0%;
            margin-top: 3px;
            border-radius: 8px;
            width: 100%;
            opacity: 0.7;
            text-align: center;
        }
        div:hover{
            opacity: 1;
        }
        #back{
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
        #back:hover{
            opacity: 1;
        }
        </style>
    </head>
    <body>
        <?php
        $color=1;
        for($i=0; @$partment[$i]!=''; $i++){
            if($i%3 == 0){
                echo '<div class="pink">';
            }
            else if($i%3 == 1){
                echo '<div class="green">';
            }
            else{
                echo '<div class="blue">';
            }
            echo "<h2>".$partment[$i]."</h2>";
            $sql = mysqli_query($conn, "SELECT * FROM xinsheng WHERE partment='{$partment[$i]}'");
            $flag = 0;//标记是否有消息
            $huiche = 1;//标记是否回车
            while($row = mysqli_fetch_array($sql)){
                echo $row['name']."&nbsp&nbsp&nbsp";
                $flag = 1;
                if($huiche%7 == 0){
                    echo "<br>";
                }
                $huiche++;
            }
            if(!$flag) echo "(还没有消息哦~~好可惜啊~~~)";
            echo "</div>";
        }
        ?>
        <a href="index.html" id="back">
           返<br><br>回
        </a>
    </body>
</html>