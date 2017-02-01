<html>
<head>
    <title>Ctrip酒店无线测试用例管理系统</title>
</head>
    <body>
    <h1 style="text-align:center">欢迎使用Ctrip酒店无线测试用例管理系统</h1>

    <?php
    $cnt=8;
    while($cnt>0)
    {
        echo '<br>';
        $cnt--;
    }
    ?>
    <div style="text-align:center">
    <form action="./user_info.php" method="post">
    UserName： <input type="text" name="user_name"><br><br>
    PassWord： <input type="text" name="user_pwd"><br><br>
    <input type="submit">
    </form>
    </div>
</body>
</html>
