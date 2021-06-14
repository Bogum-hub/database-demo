<!--user.php-->
<?php
//檢查是否存在登錄session，否則跳轉登錄介面
session_start();
require_once 'mysql_connect.inc.php';
$seldb = @mysqli_select_db($db_link,"final_db");
$eid=$_SESSION['eid']=$_GET['eid'];

if ( !isset( $_SESSION[ 'username' ] ) ) {
header( "Location:index.php" );
exit( '非法訪問！' );
}
error_reporting( E_ERROR );

$id = $_SESSION[ 'username' ];
$query = "select * from evaluation where eid='$eid' ";
$result = mysqli_query( $db_link, $query );
$arr = mysqli_fetch_array( $result );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用者評分系統</title>
<link rel="stylesheet" href="css/person.css" type="text/css">
<style type="text/css">
#res_form {
/*表的寬度以及位置*/
width: 500px;
position: relative;
left: 500px;
top: 100px;
}
#a {
/*調整input輸入框與文字位置，顯示同一行*/
height: 50px;
border: 1px;
margin: 10px;
text-align: left;
}
#a input {
border: 1px solid #000000;
/*按鈕邊緣*/
border-radius: 5px;
float: right;
}
#a select {
border: 5px;
width: 200px;
border-color: #000000;
border-radius: 5px;
float: right;
}
#textarea {
float: right;
width: 200px;
}
#bt input {
float: left;
margin: 10px;
width: 50px;
background-color: #3CF;
border-bottom-color: #000000;
border-radius: 5px;
position: relative;
top: 20px;
left: 100px;
}
#bt input:hover {
background-color: #F00;
color: #FFF;
cursor: pointer;
}
#out {
display: block;
position: relative;
left: 10px;
}
img {
position: relative;
float: right;
}
#we {
position: relative;
right: 100px;
}
h1 {
position: absolute;
float: left top;
left: 660px;
}
</style>
</head>
<body>
<div id="res">
<ul id="item">
<div id="out">
<div id="we">歡迎您&nbsp;&nbsp;
<?php
echo $eid;
?>&nbsp;,</div>
<!--此處未改好樣式-->
<li><a href="login_out.php">退出登錄</a>
</li>
<li><a href="adm_up_user.php" target="_blank">修改密碼</a>
</li>
<li><a href="myorder.php">我的訂單</a>
</li>
</ul>
</div>
<h1>使用者評分系統</h1>
<div id="res_form">
<form action="submit_mynewfavor.php" method="post">
<div id="a">
帳號
<input type="text" name="username" value="<?php echo $arr['uid']; ?>" required="required">
</div>
<div id="a">
餐廳名稱
<input type="text" name="rname" value="<?php echo $arr['rid'];?>">
</div>
<div id="a">
滿意程度
<select name="favor">
　<option value=5>5</option>
　<option value=4>4</option>
　<option value=3>3</option>
　<option value=2>2</option>
  <option value=1>1</option>
</select>
</div>
<div id="a">
敘述
<textarea id="textarea" name="comment" cols="30" rows="4" value="<?php echo $arr['comment'];?>" placeholder="請填寫您的評論" required></textarea>
<!--多行文本框-->
</div>
<div id="bt">
<input type="submit" value="確定">
<input type="reset" value="重置">
</div>
</form>
</div>
</div>
</body>
</html>