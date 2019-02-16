<?php
require_once ('conn.php');
require_once 'GoogleAuthenticator.php';
session_start();
if (isset($_POST["submit"]) && $_POST["submit"] == "submit") {
    $id = $_POST["userid"];
    $pwd = $_POST["password"];
    $key = $_POST["key"];
    $secret = $_SESSION['sceret'];
    $salt = $_SESSION['salt'];

    //存储登录id
    $_SESSION['M_id'] = $id;
    if ($id == "" || $pwd == "") {
        //弹出对话框后返回到先前页面
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    } else {
        // 创建连接
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $conn->query("SET NAMES utf8");
        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        //学生登录
        //调用salt对提交密码进行哈希对比哈希值是否和数据库中的密码相同
        $newpwd=sha1($pwd.$salt);
        $sql1 = "select * from login_info where login_username = '$id' and login_password ='$newpwd'";
        $result1 = $conn->query($sql1);
        //统计执行结果影响的行数
        $num1 = $result1->num_rows;
        //如果已经存在该用户
        if ($num1) {
            //将数据以索引的方式存储在数组中
            $row1 = mysqli_fetch_array($result1);
            //创建一个新的"安全密匙secret"
            $ga = new PHPGangsta_GoogleAuthenticator();
            //验证密钥和验证码是否对应
            $checkResult = $ga->verifyCode($secret, $key, 1);//设置容差时间30s
            if ($checkResult) {
                //弹出对话框后，到下一个页面
                echo "<script>
                alert('登陆成功！');history.go(1);</script>";
                echo "<script language='javascript'>location.href='index.php'</script>";
            }
            else{
                echo "<script>alert('验证码不正确！');history.go(-1);</script>";
            }
        } else {
            //弹出对话框后返回到先前页面
            echo "<script>alert('用户名或者密码不正确！');history.go(-1);</script>";
        }
    }
} else {
    //弹出对话框后返回到先前页面
    echo "<script>alert('提交未成功！');history.go(-1);</script>";
}
?>