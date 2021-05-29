<?php
	if($_FILES["fileUpload"]["error"]==0){
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "./img1/".$_FILES["fileUpload"]["name"])){
			echo "Upload successful <br />";
			echo "File name: ".$_FILES["fileUpload"]["name"]."<br />";
			echo "File type: ".$_FILES["fileUpload"]["type"]."<br />";
			echo "File size: ".$_FILES["fileUpload"]["size"]."<br />";
		}else{
			echo "Upload failed! ";
			echo "<a href='javascript:window.history.back();'>Go back</a>";
		}
	}


	include('conn.php');

	$file = "./img1/" . $_FILES["fileUpload"]["name"];
	$sql = "INSERT INTO imagedb (image)
			VALUES ('$file')";

	
	echo "成功新增一條記錄";//成功傳入資料後顯示成功新增一條資料

	mysqli_close($conn);
?>