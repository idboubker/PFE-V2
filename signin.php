<?php

if(isset($_POST['auth'])){
    require("connexion.php");
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    $sql="select * from artisan";
    $select=mysqli_query($link,"select * from artisan where email_art='$login' and pwd_art='$pass'");
    $selected=mysqli_fetch_array($select);
    if($selected){
        echo count($selected);
    }else{
        header('Location: authentification.php?error=ep');
    }
}

?>
