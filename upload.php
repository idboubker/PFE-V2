<?php


	

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$myfile = $_FILES['myup'];
	
	$path_to_directory = 'path/';
if (!file_exists($path_to_directory) && !is_dir($path_to_directory)) {
    mkdir($path_to_directory, 0777, true);
}
	
	for($i=0;$i<count($myfile['name']);$i++){
		copy($myfile['tmp_name'][$i] , $path_to_directory."/".$myfile['name'][$i]);	
	}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<form action="upload.php" method="post" enctype="multipart/form-data">
<lable for="img">choisir une image
	<input id="img" type="file" name="myup[]" multiple>
	
</lable>
<input type="submit">
</form>
	
</body>
</html>