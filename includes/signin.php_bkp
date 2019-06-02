<?php

if(isset($_POST['auth'])){
    require("../connexion.php");
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    $select=mysqli_query($link,"select * from artisan where email_art='$login' and pwd_art='$pass'");
    $selected=mysqli_fetch_array($select);
    if($selected){
        session_start();
		$_SESSION['id_art']=$selected['id_art'];
		//echo $_SESSION['id_art'];
        header('Location: ../dashboard');
    }else{
        header('Location: ../authentification.php?error=ep');
    }
}

?>
