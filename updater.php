<?php

    include("connMysql.php");
    $seldb = @mysqli_select_db($db_link, "test");
    if (!$seldb) die("資料庫選擇失敗！");

    $query = 'update students set '.
    'title="'.$_POST['title'].'",  '.
    'hastage="'.$_POST['hastage'].'",  '.
    'text="'.$_POST['text'].'" '.
    'where id="'.$_POST['id'].'";';

    mysqli_query($db_link, $query);
    header('location: edit.php');
?>