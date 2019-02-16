<?php
require_once 'GoogleAuthenticator.php';
session_start();
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('127.0.0.1', 'root', '', 'ysyy');
mysqli_set_charset($link, 'utf8'); //设定字符集
$name = $_POST['username'];
$pwd = $_POST['password'];
$pwdconfirm = $_POST['confirm'];
if ($name == '') {
    echo "<script>alert('你的用户名不能为空，请重新输入');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
    exit;
}
if ($pwd == '') {
    echo "<script>alert('你的密码不能为空，请重新输入');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
    exit;
}
if ($pwd != $pwdconfirm) {
    echo "<script>alert('你输入的两次密码不一致，请重新输入');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
    exit;
}
$sql1 = "select * from login_info where login_username = '$name'";
$result1 = $link->query($sql1);
//统计执行结果影响的行数
$num1 = $result1->num_rows;
if ($num1) {
    echo "<script>alert('您输入的用户名已存在,请重新注册！');location='../html/register.html'</script>";
    exit;
}

//谷歌身份验证器
$ga = new PHPGangsta_GoogleAuthenticator();
//创建一个新的"安全密匙secret"
//把本次的"安全密匙secret" 入库,和账户关系绑定
//客户端也是绑定这同一个"安全密匙secret"
$secret = $ga->createSecret();
$_SESSION['sceret'] = $secret;

//密码加盐哈希:
//首先使用mcrypt，产生电脑随机生成的，专门用户加密的随机数函数。
//第二步，把得到的随机数通过base64加密，使其变长并且不利于猜解。
//第三步，把得出的盐拼接到密码的后面，再对其使用sha1进行哈希。
//再把password存入到用户的数据库。
$salt=base64_encode(mcrypt_create_iv(32,MCRYPT_DEV_RANDOM));
$_SESSION['salt'] = $salt;
$newpwd=sha1($pwd.$salt);

//把本次的"安全密钥secret" 入库,和账户关系绑定客户端也是绑定这同一个"安全密钥secret"
$insert_sql = "insert into login_info(login_username,login_password,
login_secret)values('$name' , '$newpwd' ,'$secret')";
$stmt = mysqli_prepare($link, $insert_sql);
$result_insert = mysqli_stmt_execute($stmt);
if ($result_insert) {
    echo "<script>alert('密钥：$secret');location='../login.html'</script>";
} else {
    echo "<script>alert('您输入的用户名已存在,请重新注册！');location='../html/register.html'</script>";
    exit;
}