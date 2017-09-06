<?php
include 'conn.php';

if(isset($_POST['tg_zz'])){
    $sql = "UPDATE xinsheng_b SET 
    zhiyuan_1='{$_POST['zhiyuan_1']}',
    zhiyuan_2='{$_POST['zhiyuan_2']}',
    fc='{$_POST['fc']}',
    tg_zz='{$_POST['tg_zz']}', 
    tg_wy='{$_POST['tg_wy']}', 
    tg_gg='{$_POST['tg_gg']}', 
    tg_sj='{$_POST['tg_sj']}', 
    tg_ty='{$_POST['tg_ty']}', 
    tg_bj='{$_POST['tg_bj']}', 
    tg_wl='{$_POST['tg_wl']}', 
    tg_sq='{$_POST['tg_sq']}', 
    tg_xw='{$_POST['tg_xw']}', 
    tg_jw='{$_POST['tg_jw']}', 
    tg_qd='{$_POST['tg_qd']}', 
    tg_xct='{$_POST['tg_xct']}', 
    tg_xcx='{$_POST['tg_xcx']}', 
    tg_ms='{$_POST['tg_ms']}', 
    tg_xx='{$_POST['tg_xx']}' WHERE id = {$_POST['id']}";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('提交成功！');</script>";
    echo "您已经提交成功，可以关闭该页面";
    exit();
}
else if(isset($_POST['id'])){
    $xh = $_POST['id'];
    $sql = mysqli_query($conn, "SELECT * FROM xinsheng_b WHERE Id={$_POST['id']}");
    $row = mysqli_fetch_array($sql);
    if($row<=0){
        echo "查无此人";
        exit();
    }
}
else{
    exit();
}
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>查看个人信息</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
        <script src="js/jquery.min.js"></script>
        <script type="text/JavaScript" src="js/collapse.js"></script>
        <style>
            body {
                background-image: url('img/logo.jpg');
            }
            
            .container {
                border: 1px solid white;
                box-shadow: 0px 0px 70px 3px lightgray;
                margin-top: 1%;
                padding: 3%;
                /* width: 60%; */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- 头部 -->
            <div class="header">
                <h3>
                    <?php echo $row['name'];?>
                </h3>
                <ol class="breadcrumb">
                    <li>首页 <span>/</span></li>
                    <li>面试界面 <span>/</span></li>
                    <li>新生个人信息</li>
                </ol>
            </div>

            <!-- 信息 -->
            <div>
                <?php
            echo "<label>号码：".$row['Id']."</label><br>";
            echo "<label>性别：".$row['xb']."</label><br>";
            echo "<label>专业：".$row['zy']."</label><br>";
            echo "<label>学号：".$row['xh']."</label><br>";
            echo "<label>手机：".$row['lianxi_c']."</label><br>";
            ?>
            </div>

            <!-- 表格 -->
            <div>
                <form action="beizu.php" method="POST">
                    <!-- 编号 -->
                <input type="text" style="opacity:0" name="id" value="<?php echo $row['Id'];?>">
                    <!-- 志愿 -->
                    <label>
        <select name="zhiyuan_1">
                <option value="">第一志愿</option>	
                <option value="组织部">组织部</option>	
                <option value="宣传部">宣传部</option>	
                <option value="实践部">实践部</option>	
                <option value="青年志愿者服务队">青年志愿者服务队</option>	
                <option value="新闻部">新闻部</option>	
                <option value="网络部">网络部</option>	
                <option value="编辑部">编辑部</option>	
                <option value="秘书部">秘书部</option>	
                <option value="年级管理委员会">年级管理委员会</option>	
                <option value="学习部">学习部</option>	
                <option value="生活权益部">生活权益部</option>	
                <option value="体育部">体育部</option>	
                <option value="文娱部">文娱部</option>	
                <option value="公关部">公关部</option>	
        </select></label>
                    <label>
        <select name="zhiyuan_2">
                <option value="">第二志愿</option>	
                <option value="组织部">组织部</option>	
                <option value="宣传部">宣传部</option>	
                <option value="实践部">实践部</option>	
                <option value="青年志愿者服务队">青年志愿者服务队</option>	
                <option value="新闻部">新闻部</option>	
                <option value="网络部">网络部</option>	
                <option value="编辑部">编辑部</option>	
                <option value="秘书部">秘书部</option>	
                <option value="年级管理委员会">年级管理委员会</option>	
                <option value="学习部">学习部</option>	
                <option value="生活权益部">生活权益部</option>	
                <option value="体育部">体育部</option>	
                <option value="文娱部">文娱部</option>	
                <option value="公关部">公关部</option>	
        </select></label>
                    <label>
                            <input type="radio" name="fc" value="服从" checked>服从
                        </label>
                    <label>
                            <input type="radio" name="fc" value="不服从">不服从
                        </label><br>
                        
                        <!-- 通过与否 -->
                        <select name="tg_zz" id="">
                            <option value="">组织部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_xct" id="">
                            <option value="">团委宣传部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_sj" id="">
                            <option value="">实践部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_qd" id="">
                            <option value="">青年志愿者服务队</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_xw" id="">
                            <option value="">新闻部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_wl" id="">
                            <option value="">网络部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_bj" id="">
                            <option value="">编辑部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_ms" id="">
                            <option value="">秘书部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_jw" id="">
                            <option value="">年级管理委员会</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_xx" id="">
                            <option value="">学习部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_xcx" id="">
                            <option value="">学生会宣传部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_sq" id="">
                            <option value="">生活权益部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_ty" id="">
                            <option value="">体育部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_wy" id="">
                            <option value="">文娱部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                        <select name="tg_gg" id="">
                            <option value="">公关部</option>
                            <option value="通过">通过</option>
                            <option value="不通过">不通过</option>
                            <option value="待定">待定</option>
                        </select>
                    <!-- 备注 -->
                    <div class="row-fluid">
                        <input type="submit" class="btn btn-info span2" value="提交">
                    </div>
                </form>
            </div>
        </div>

    </body>

    </html>