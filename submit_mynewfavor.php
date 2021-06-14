<?php
session_start();
include("mysql_connect.inc.php");
$seldb = @mysqli_select_db($db_link,"final_db");

$eid=$_SESSION[ 'eid' ];
$uid = $_POST[ 'username' ];
$rname = $_POST[ 'rname' ];
$favor = $_POST[ 'favor' ];
$comment = $_POST[ 'comment' ];

$query = "UPDATE evaluation SET f_uid = '$uid', f_rid = '$rname', point = '$favor', comment = '$comment' WHERE eid = $eid";


mysqli_query($db_link, $query);

echo "<script language='javascript'>";
echo "alert('修改成功！');";
echo "window.location.href='person_evaluation.php';";
echo "</script>";



mysqli_free_result( $result );
mysqli_close( $db_link );
?>