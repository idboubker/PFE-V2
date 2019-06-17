<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_GET['ida'])){
    $user = $_GET['ida'];
}
else {
    header("location: result.php?fp=1&ville=".$_SESSION['ville']."&metier=".$_SESSION['metier']);
    exit;
}

$sql =   "select * from artisan a, artisan_details d, meties m, villes v where a.id_art = $user and a.id_art = d.id_art and a.metier = m.id_met and a.ville = v.id_vil";
$result = mysqli_query($link,$sql);
$info = mysqli_fetch_assoc($result);


$simVil = $info['ville'];
$simMet = $info['metier'];

$reqt = "select * from artisan r, artisan_details t, meties m, villes v where r.id_art != $user and r.ville = '$simVil' and r.metier = '$simMet' and r.id_art = t.id_art and r.metier = m.id_met and r.ville = v.id_vil ";
$rslt = mysqli_query($link,$reqt);
							



function age($date) {
    $age = date('Y') - date('Y', strtotime($date));
    if (date('md') < date('md', strtotime($date))) {
    return $age - 1;
    }
    return $age;
    }

    

$req = "select * from portfolio where id_art = $user"; 
$rsl = mysqli_query($link,$req);

// $number = mysqli_num_rows($rsl);
// echo $number;

$req1 = "select * from portfolio p, portfolio_pics o where p.id_art = $user and p.id_por = o.id_por";
$rsl1 = mysqli_query($link,$req1);
$port1 = mysqli_fetch_assoc($rsl1);



