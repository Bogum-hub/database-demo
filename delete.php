<?php
    
    include("connMysql.php");
    $seldb = @mysqli_select_db($db_link, "test");
    if (!$seldb) die("資料庫選擇失敗！");

    $id = isset($_GET['id']) ?$_GET['id']:exit();
    $sql_query = 'delete  from `students` where id = "'.$id.'";';
    mysqli_query($db_link, $sql_query);
    header('location: edit.php');
?>
