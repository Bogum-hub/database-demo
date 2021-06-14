<?php
    $eid = $_GET['eid'];

    include ('connMysql.php');
    include("mysql_connect.inc.php");
    $seldb = @mysqli_select_db($db_link,"final_db");

    $sql_query = "DELETE FROM evaluation WHERE eid = $eid";

    mysqli_query($db_link,$sql_query);

    $db_link->close();

    header("Location: person_evaluation.php");
?>