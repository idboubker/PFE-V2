<?php
// "mou9ef.com","mouefcom_root","kalala1998@","mouefcom_mou9ef"
$link = mysqli_connect("localhost","root","","mou9ef");
if(!$link){
    header('location: error/404.html');
    //echo "connecting error";
}
?>
