<?php
    include("connMysql.php");
    $seldb = @mysqli_select_db($db_link, "test");
    if (!$seldb) die("資料庫選擇失敗！");

    $id = isset($_GET['id']) ?$_GET['id']:exit();
    $sql_query = 'select * from `students` where id = "'.$id.'";';
    $result = mysqli_query($db_link, $sql_query);
    $row = mysqli_fetch_row($result);
        
    
    
?>

<form action="updater.php" method="post" enctype="multipart/form-data">
    <table border="1" align="center" cellpadding="4">
      <tr>
        <th>欄位</th><th>資料</th>
      </tr>
      <tr>
        <input type="hidden" name="id"  value ="<?= $row[0] ?>">
        </tr>
      <tr>
        <td>標題</td><td><input type="text" name="title" id="title" value ="<?= $row[1] ?>"></td>
      </tr>
      <tr>
        <td>hastage</td><td>
        <input <?= $row[4] === 'B'? 'selected' : ''?> type="radio" name="hastage" id="hastage" value="B" checked>早餐
        <input <?= $row[4] === 'L'? 'selected' : ''?> type="radio" name="hastage" id="hastage" value="L">午餐
        <input <?= $row[4] === 'D'? 'selected' : ''?> type="radio" name="hastage" id="hastage" value="D">晚餐
        </td>
      </tr>
      <tr>
        <td>內文</td><td><input type="text" name="text" id="text" value ="<?= $row[2] ?>"></td>
      </tr>
      
      <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="add">
        <input type="submit" name="button1" id="button1" value="確認修改">
        </td>
      </tr>
      
    </table>
  </form>