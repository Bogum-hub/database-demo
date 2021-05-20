<!DOCTYPE html>
<html>
<head>
</head>

<?php 
    include 'connMysql.php';
    header("Contene-Type: text/html; charset=utf-8");
    $seldb = @mysqli_select_db($db_link, "final_db");

    if(!$seldb) die("Fail to select designated db");

?>
<body>

</body>

</html>