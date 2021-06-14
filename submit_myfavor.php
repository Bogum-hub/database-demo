/submit_myfavor.php
<?php
session_start();
include("mysql_connect.inc.php");
$uid = $_SESSION[ 'username' ];
$rname = $_POST[ 'rname' ];
$favor = $_POST[ 'favor' ];
$comment = $_POST[ 'comment' ];



$sql = "insert into evaluation (eid, f_uid, f_rid, point, comment) values (NULL, '$uid', '$rname', '$favor', '$comment')";
$result = execute_sql($db_link, "final_db", $sql);


echo "<script language='javascript'>";
echo "alert('新增成功！');";
echo "window.location.href='person_evaluation.php';";
echo "</script>";



mysqli_free_result( $result );
mysqli_close( $db_link );
?>

