<!--person_evalutaion.php-->
<?php
session_start();
include("mysql_connect.inc.php");
$seldb = @mysqli_select_db($db_link,"final_db");

if ( !$_SESSION[ 'username' ] ) {
header( "Location:index.php" );
exit( '非法訪問！' );
}

error_reporting( E_ERROR );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的評價</title>
</head>
<link rel="stylesheet" type="text/css" href="css/person.css">
<style type="text/css">
.table{
position: relative;
left:100px;
width: 1200px;
}
a{
text-decoration: none;
}
#bt{
border: 1px solid #000000;
border-bottom-color: #000000;
border-radius: 5px;
}
</style>
<body>
<h1 align="center">我的評價</h1>
<div>
<form action="person_evalutaion.php" method="post" id="order">
<table class="table" border="1">
<thead>
<tr>
<th>使用者帳號</th>
<th>使用者性別</th>
<th>餐廳代號</th>
<th>餐廳名稱</th>
<th>評價分數</th>
<th>評論</th>
</tr>
</thead>
<tbody>
<?php
$userid = $_SESSION[ 'username' ];
/*訂單表、預約表連接查詢*/
$query = "select user.uid,user.gender,evaluation.eid,evaluation.f_rid,evaluation.point,evaluation.comment,restaurant.rname from user,evaluation,restaurant where user.uid='$userid' and user.uid=evaluation.f_uid and evaluation.f_rid=restaurant.rid";
$result = mysqli_query($db_link,$query );

while ($arr = mysqli_fetch_array( $result )) {
    echo "<tr>";
    echo "<td>" . $arr[ 'uid' ] . "</td>";
    echo "<td>" . $arr[ 'gender' ] . "</td>";
    echo "<td>" . $arr[ 'f_rid' ] . "</td>";
    echo "<td>" . $arr['rname'] ."</td>";
    echo "<td>" . $arr['point'] ."</td>";
    echo "<td>" . $arr['comment'] ."</td>";
    echo "<td>" . $arr['eid'] ."</td>";
    echo "<td><a href='evaluation_update.php?eid=".$arr['eid']."'>修改</a></td>";
    echo "<td><a href='evaluation_delete.php?eid=".$arr['eid']."'>刪除</a></td>";
    echo "</tr>";
    }

?>
</tbody>
</table>
<button value="返回" id="bt"><a href="index.php">返回</a></button>
</form>
</div>
</body>
</html>