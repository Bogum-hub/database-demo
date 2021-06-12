<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            include("connMysql.php");
            $seldb = @mysqli_select_db($db_link, "test");
            if (!$seldb) die("資料庫選擇失敗！");

            if($_FILES["fileUpload"]["error"]==0){
                if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "./img1/".$_FILES["fileUpload"]["name"])){
                    echo "<h1>Upload successful <br /></h1>";
                    echo "<h2> <a href='user.php'> 回使用者介面<a> </h2>";
                }else{
                    echo "Upload failed! ";
                    echo "<a href='javascript:window.history.back();'>Go back</a>";
                }
            }

            $file = "./img1/" . $_FILES["fileUpload"]["name"];
		    

            $sql_query = "INSERT INTO `students` (`title` ,`hastage` ,`text`, `photo`) VALUES (";
            $sql_query .= "'".$_POST["title"]."',";
            $sql_query .= "'".$_POST["hastage"]."',";
            $sql_query .= "'".$_POST["text"]."',";
            $sql_query .= "'$file')";
            
            
            mysqli_query($db_link, $sql_query);	
            echo "<br>";
            
            mysqli_close($db_link);
        ?>
        
 </body>
</html>