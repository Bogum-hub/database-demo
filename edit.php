<?php
    include("connMysql.php");
    $seldb = @mysqli_select_db($db_link, "test");
    if (!$seldb) die("資料庫選擇失敗！");

    $sql_query = "SELECT * FROM `students`";
    $result = mysqli_query($db_link, $sql_query);
    $data = [];
    
    while($row = mysqli_fetch_row($result)){
        $data[] = $row;
    }

    print '<font size = "7"> 貼文管理 </font>';
    print'<table border=1>';

    foreach($data as $key => $value){
        print '<tr>';
        print '<td><a href="update.php?id='.$value[0].'">修改</a></td>';
        print '<td><a href="delete.php?id='.$value[0].'">刪除</a></td>';
        print '<td>'.$value[1].'</td>';
        print '<td>'.$value[2].'</td>';
        print '<td>'.$value[3].'</td>';
        print '</tr>';
    }
    print '</table>';
    echo "<h2> <a href='user.php'> 回使用者介面<a> </h2>";
?>

