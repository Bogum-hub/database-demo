<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$server = "localhost";
//資料庫名稱
$db_name = "final_db";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "1234";

$db_link = @mysqli_connect($db_server, $db_user, $db_passwd);
    if(!$db_link)  die("Failed to connect to database");

//設定字元集與編碼
mysqli_query($db_link, "SET NAMES utf8");

function execute_sql($link, $database, $sql)
{
  mysqli_select_db($link, $database)
    or die("開啟資料庫失敗: " . mysqli_error($link));

  $result = mysqli_query($link, $sql);

  return $result;
}
?> 

