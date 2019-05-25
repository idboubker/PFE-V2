<?php

$user = 3;
$sql =   "select * from artisan a, artisan_details d where a.id_art = $user and a.id_art = d.id_art";
$result = mysqli_query($link,$sql);
$info = mysqli_fetch_assoc($result);


$simVil = $info['ville'];
$simMet = $info['metier'];

$reqt = "select * from artisan r, artisan_details t where r.id_art != $user and r.ville = '$simVil' and r.metier = '$simMet' and r.id_art = t.id_art ";
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


