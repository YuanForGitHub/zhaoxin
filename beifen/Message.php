<?php
//***********************************************
header("Content-Type: text/html; charset=utf-8");
include 'conn.php';
//***********************************************

$string = date("y-m-d  h:i:s");
$sql = "INSERT INTO comment(name, comment, shijian) VALUES('{$_POST['name']}', '{$_POST['comment']}', '$string')";
if(mysqli_query($conn, $sql)){
    echo "Success";
}
else{
    echo "Failed: ".$conn->error;
}
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Load</title>
        <style>
        legend{
            border: 1px solid red;
            padding: 2%;
            width: 18%;
            height: 1%;
        }
        fieldset{
            margin-top: 10%;
            margin-left: 23%;
            text-align: center;
            width: 50%;
        }
        form{
            padding-top: 10%;
        }
        input{
            width: 40%;
        }
        textarea{
            width: 50%;
            height: 30%;
        }
        </style>
    </head>

    <body>
        <fieldset>
            <legend>Comment</legend>
            <form action="ss.php" method="post">
                <label for="">Name:</label>
                <input type="text" name="name" placeholder="输入您的昵称，如：宇宙第一帅" required/><br><br>
                <textarea name="comment" placeholder="随意发表言论，禁止黄赌毒"></textarea><br>
                <input type="submit" name="" value="Go!">
            </form>
        </fieldset>
    </body>
</html>