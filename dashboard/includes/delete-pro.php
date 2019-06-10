<?php

if(isset($_GET['id_por_del'])){
	$id_por_del=$_GET['id_por_del'];
	$path_to_directory = "../uploads/projet/pro-".$id_por_del;
	
	function rmAllDir($strDirectory){
    $handle = opendir($strDirectory);
    while(false !== ($entry = readdir($handle))){
        if($entry != '.' && $entry != '..'){
            if(is_dir($strDirectory.'/'.$entry)){
                rmAllDir($strDirectory.'/'.$entry);
            }
            elseif(is_file($strDirectory.'/'.$entry)){
                unlink($strDirectory.'/'.$entry);
            }
        }
    }
    rmdir($strDirectory.'/'.$entry);
    closedir($handle);
}
	
	
	if(file_exists($path_to_directory)){
		echo "qsdjfhqsjkdfh";
			rmAllDir($path_to_directory);
		}
	
	
$delete=mysqli_query($link,"delete from portfolio where id_por=$id_por_del and id_art=$id_art")or header("location: ../error/404.html");
header("location: ./index.php");
	}

?>