<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");


$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$gender = $_POST['gender'];
$bd = $_POST['birthday'];
$email = $_POST['myEmail'];
$address = $_POST['address'];

//檢查帳號是否有人申請
$sql = "SELECT * FROM user Where uid = '$id'";
$result = execute_sql($db_link, "final_db", $sql);

  //如果帳號已經有人使用
  if (mysqli_num_rows($result))
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
		
    //顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
		
    //執行 SQL 命令，新增此帳號
    $sql = "insert into user (uid, password, gender, bdate, email, address, match_uid) values ('$id', '$pw', '$gender', '$bd', '$email', '$address', NULL)";

    $result = execute_sql($db_link, "final_db", $sql);
  }
  
   echo "<script type='text/javascript'>";
   echo "alert('註冊會員成功！');";
   echo "</script>";
   
   echo "<script type='text/javascript'>";
   echo "window.location.href='index.php'";
   echo "</script>";
   

  //關閉資料連接	
  mysqli_close($link);
?>

