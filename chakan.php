<?php
include 'conn.php';

//登录验证
session_start();
if(!isset($_SESSION['uname'])){
    header("Refresh: 0; url=index.html");
    exit();
}

if(isset($_GET['id'])){
    $read = mysqli_query($conn, "SELECT * FROM xinsheng_b WHERE Id = {$_GET['id']}");
    $row = mysqli_fetch_array($read);//读取信息
}
else if(isset($_POST['id'])){
    $sql = "UPDATE xinsheng_b SET 
    zy='{$_POST['zy']}', 
    xh='{$_POST['xh']}', 
    lianxi_c='{$_POST['lianxi_c']}', 
    zhiyuan_1='{$_POST['zhiyuan_1']}',
    zhiyuan_2='{$_POST['zhiyuan_2']}',
    fc='{$_POST['fc']}',
    bz_zz='{$_POST['bz_zz']}', 
    bz_wy='{$_POST['bz_wy']}', 
    bz_gg='{$_POST['bz_gg']}', 
    bz_sj='{$_POST['bz_sj']}', 
    bz_ty='{$_POST['bz_ty']}', 
    bz_bj='{$_POST['bz_bj']}', 
    bz_wl='{$_POST['bz_wl']}', 
    bz_sq='{$_POST['bz_sq']}', 
    bz_xw='{$_POST['bz_xw']}', 
    bz_jw='{$_POST['bz_jw']}', 
    bz_qd='{$_POST['bz_qd']}', 
    bz_xct='{$_POST['bz_xct']}', 
    bz_xcx='{$_POST['bz_xcx']}', 
    bz_ms='{$_POST['bz_ms']}', 
    bz_xx='{$_POST['bz_xx']}' WHERE Id = {$_POST['id']}";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('提交成功！');</script>";
    echo "您已经提交成功，可以关闭该页面";
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
            
            .zhiyuan {}
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
                <!-- 表格 -->
            <form action="chakan.php" method="POST" class="row-fluid">
                <?php
            echo "<label>号码：".$row['Id']."</label><br>";
            echo "<label>性别：".$row['xb']."</label><br>";
            echo "<label>专业：<input type='text' name='zy' value='".$row['zy']."' placeholder='专业班级'></label><br>";
            echo "<label>学号：<input type='text' name='xh' value='".$row['xh']."' placeholder='学号'></label><br>";
            echo "<label>手机：<input type='text' name='lianxi_c' value='".$row['lianxi_c']."' placeholder='手机长号'></label><br>";
            echo "<b>各部门通过情况：</b>";
            echo "<组织部, ".$row['tg_zz'].">----";
            echo "<团委宣传部, ".$row['tg_xct'].">----";
            echo "<实践部, ".$row['tg_sj'].">----";
            echo "<青年志愿者服务队, ".$row['tg_qd'].">----";
            echo "<新闻部, ".$row['tg_xw'].">----";
            echo "<网络部, ".$row['tg_wl'].">----";
            echo "<编辑部, ".$row['tg_bj'].">----";
            echo "<秘书部, ".$row['tg_ms'].">----";
            echo "<年级管理委员会, ".$row['tg_jw'].">----";
            echo "<学习部, ".$row['tg_xx'].">----";
            echo "<学生会宣传部, ".$row['tg_xcx'].">----";
            echo "<生活权益部, ".$row['tg_sq'].">----";
            echo "<体育部, ".$row['tg_ty'].">----";
            echo "<文娱部, ".$row['tg_wy'].">----";
            echo "<公关部, ".$row['tg_gg'].">";
            ?>
            </div>
            <br>

                <!-- 编号 -->
                <input type="text" style="opacity:0" name="id" value="<?php echo $row['Id'];?>">
                <label>
        <select name="zhiyuan_1">
                <option value="">第一志愿</option>	
                <option value="组织部">组织部</option>	
                <option value="团委宣传部">团委宣传部</option>
                <option value="学生会宣传部">学生会宣传部</option>	
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
        </select>
        <select name="zhiyuan_2">
                <option value="">第二志愿</option>	
                <option value="组织部">组织部</option>	
                <option value="团委宣传部">团委宣传部</option>
                <option value="学生会宣传部">学生会宣传部</option>	
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
        </select>
        是否服从：<input type="radio" name="fc" value="服从" checked>服从<input type="radio" name="fc" value="不服从">不服从
    </label>
                <!-- 备注 -->
                <input type="text" style="opacity:0" name="id" value="<?php echo $row['Id'];?>">
                <label>组织部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_zz" placeholder="(在400字之内哦~)"><?php echo $row['bz_zz']; ?></textarea>
                <label>团委宣传部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_xct" placeholder="(在400字之内哦~)"><?php echo $row['bz_xct']; ?></textarea>
                <label>实践部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_sj" placeholder="(在400字之内哦~)"><?php echo $row['bz_sj']; ?></textarea>
                <label>青年志愿者服务队：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_qd" placeholder="(在400字之内哦~)"><?php echo $row['bz_qd']; ?></textarea>
                <label>新闻部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_xw" placeholder="(在400字之内哦~)"><?php echo $row['bz_xw']; ?></textarea>
                <label>网络部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_wl" placeholder="(在400字之内哦~)"><?php echo $row['bz_wl']; ?></textarea>
                <label>编辑部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_bj" placeholder="(在400字之内哦~)"><?php echo $row['bz_bj']; ?></textarea>
                <label>秘书部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_ms" placeholder="(在400字之内哦~)"><?php echo $row['bz_ms']; ?></textarea>
                <label>年级管理委员会：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_jw" placeholder="(在400字之内哦~)"><?php echo $row['bz_jw']; ?></textarea>
                <label>学习部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_xx" placeholder="(在400字之内哦~)"><?php echo $row['bz_xx']; ?></textarea>
                <label>学生会宣传部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_xcx" placeholder="(在400字之内哦~)"><?php echo $row['bz_xcx']; ?></textarea>
                <label>生活权益部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_sq" placeholder="(在400字之内哦~)"><?php echo $row['bz_sq']; ?></textarea>
                <label>体育部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_ty" placeholder="(在400字之内哦~)"><?php echo $row['bz_ty']; ?></textarea>
                <label>文娱部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_wy" placeholder="(在400字之内哦~)"><?php echo $row['bz_wy']; ?></textarea>
                <label>公关部：</label>
                <textarea id="bz" rows="10" class="span12" name="bz_gg" placeholder="(在400字之内哦~)"><?php echo $row['bz_gg']; ?></textarea>
                <div class="row-fluid">
                    <input type="submit" class="btn btn-info span2" value="提交">
                </div>
            </form>
        </div>

    </body>

    </html>